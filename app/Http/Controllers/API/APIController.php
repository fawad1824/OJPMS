<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Companymain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class APIController extends Controller
{
    public function GetCategory(Request $request)
    {
        return $company = Company::all();
    }
    public function AddCategory(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imagePath = $request->file('image')->store('images', 'public');

            // Get the full URL of the stored image
            $imageUrl = '/storage/' . $imagePath;

            $company = Company::create([
                'name' => $request->name,
                'image' => $imageUrl,
            ]);

            return response()->json(['message' => 'Image stored successfully', 'company' => $company]);
        } else {
            return response()->json(['message' => 'Invalid image file'], 400);
        }
    }
    public function EditCategory(Request $request, $id)
    {


        $company = Company::find($id);

        if (!$company) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        $imageUrl = $company->image;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Delete the old image before storing the new one
            Storage::disk('public')->delete(str_replace('/storage/', '', $imageUrl));

            $imagePath = $request->file('image')->store('images', 'public');
            $imageUrl = '/storage/' . $imagePath;
        }

        $company->update([
            'name' => $request->name,
            'image' => $imageUrl,
        ]);

        return response()->json(['message' => 'Category updated successfully', 'company' => $company]);
    }
    public function DeleteCategory($id)
    {
        $company = Company::find($id);

        if (!$company) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        // Delete the associated image from storage
        Storage::disk('public')->delete(str_replace('/storage/', '', $company->image));

        $company->delete();

        return response()->json(['message' => 'Category deleted successfully']);
    }

    // Country
    public function GetCountry(Request $request)
    {
        return DB::table('countries')->get();
    }
    public function GetState($id)
    {
        return DB::table('states')->where('country_id', $id)->get();
    }
    public function GetCities($id)
    {
        return DB::table('cities')->where('state_id', $id)->get();
    }

    // Company API
    public function GetCompany()
    {
        return $company = Companymain::all();
    }
    public function AddCompany(Request $request)
    {
        $company = new Companymain();
        $company->name = $request->name;
        $company->email = $request->email;
        $company->website = $request->website;
        $company->companyinfo = $request->companyinfo;
        $company->address = $request->address;
        $company->location = $request->location;
        $company->country = $request->country;
        $company->state = $request->state;
        $company->city = $request->city;
        $company->status = $request->status;
        $company->date = $request->date;
        $company->employe = $request->employe;
        $company->desc = $request->desc;
        $company->status = "active";
        $company->user_id = Auth::user()->id;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imagePath = $request->file('image')->store('images', 'public');

            // Get the full URL of the stored image
            $imageUrl =  'storage/' . $imagePath;
        }
        $company->image = asset('') . $imageUrl;
        $company->save();
        return response()->json(['message' => 'Company Added successfully', 'company' => $company]);
    }
    public function editCompany(Request $request, $id)
    {
        $company = Companymain::where('id', $id)->first();
        $company->name = $request->name;
        $company->email = $request->email;
        $company->website = $request->website;
        $company->companyinfo = $request->companyinfo;
        $company->address = $request->address;
        $company->location = $request->location;
        $company->country = $request->country;
        $company->state = $request->state;
        $company->city = $request->city;
        $company->status = $request->status;
        $company->date = $request->date;
        $company->employe = $request->employe;
        $company->desc = $request->desc;
        $company->status = "active";
        $company->user_id = Auth::user()->id;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imagePath = $request->file('image')->store('images', 'public');

            // Get the full URL of the stored image
            $imageUrl =  'storage/' . $imagePath;
        }
        $company->image = asset('') . $imageUrl;
        $company->save();
        return response()->json(['message' => 'Company Updated successfully', 'company' => $company]);
    }

    public function deleteCompany($id)
    {
        Companymain::where('id', $id)->delete();
        return response()->json(['message' => 'Company Deleted successfully']);
    }
}
