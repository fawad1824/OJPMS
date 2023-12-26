<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Companymain;
use App\Models\JobsAcive;
use App\Models\ProfileCV;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class APIController extends Controller
{

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'role' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role,

        ]);
        $token = $user->createToken('authToken')->plainTextToken;

        $token = explode("|", $token);

        return response()->json(['token' => $token[1], "users" => Auth::user()]);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('authToken')->plainTextToken;
            $token = explode("|", $token);


            return response()->json(['token' => $token[1], "users" => Auth::user()]);
        }

        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    public function logout()
    {
        Auth::logout(); // Perform the logout action
        return redirect('/login'); // Redirect to the login page or any other desired page
    }

    public function adminJobs()
    {
        $jobs = JobsAcive::where('userid', Auth::user()->id)->get();
        return response()->json([
            'status' => '200',
            'data' => $jobs,
            'message' => 'edit Successfull',
        ]);
    }

    public function EditadminJobs($id)
    {
        $jobs = JobsAcive::where('id', $id)->first();
        return response()->json([
            'status' => '200',
            'data' => $jobs,
            'message' => 'edit Successfull',
        ]);
    }
    public function AddadminJobs(Request $request)
    {
        if ($request->id) {
            $jobs =  JobsAcive::where('id', $request->id)->first();
            $company = Companymain::where('user_id', Auth::user()->id)->first();
            $jobs->title = $request->title;
            $jobs->description = $request->description;
            $jobs->skills = $request->skills;
            $jobs->education = $request->education;
            $jobs->location = $request->location;
            $jobs->vacancy = $request->vancy;
            $jobs->jobtype = $request->jobtype;
            $jobs->salary = $request->salary;
            $jobs->date = date('Y-m-d');
            $jobs->applicationdate = date('Y-m-d');
            $jobs->status = "Active";
            $jobs->companyid = $company->id;
            $jobs->userid = Auth::user()->id;
            $jobs->experience = $request->experience;
            $jobs->save();
            return redirect()->back()->with('success', 'Updated successfully!');
        } else {
            $jobs = new JobsAcive();
            $company = Companymain::where('user_id', Auth::user()->id)->first();
            $jobs->title = $request->title;
            $jobs->description = $request->description;
            $jobs->skills = $request->skills;
            $jobs->education = $request->education;
            $jobs->location = $request->location;
            $jobs->vacancy = $request->vancy;
            $jobs->jobtype = $request->jobtype;
            $jobs->salary = $request->salary;
            $jobs->date = date('Y-m-d');
            $jobs->applicationdate = date('Y-m-d');
            $jobs->status = "Active";
            $jobs->companyid = $company->id;
            $jobs->userid = Auth::user()->id;
            $jobs->experience = $request->experience;
            $jobs->save();
            return response()->json([
                'status' => '200',
                'message' => 'Create Successfull',
            ]);
        }
    }
    public function DeleteadminJobs($id)
    {
        $data = JobsAcive::where('id', $id)->delete();
        return response()->json([
            'status' => '200',
            'message' => 'Deleted Successfull',
        ]);
    }

    public function companyProfile()
    {
        $company = Companymain::where('user_id', Auth::user()->id)->first();
        return response()->json([
            'status' => '200',
            'data' => $company,
            'message' => 'Profile Data',
        ]);
    }
    public function AddcompanyProfile(Request $request)
    {
        $company = Companymain::where('user_id', Auth::user()->id)->first();
        if (!$company) {
            $company = new Companymain();
        }
        $company->name = $request->name;
        $company->user_id = $request->user_id;
        $company->email = $request->email;
        $company->companyinfo = $request->companyinfo;
        $company->address = $request->address;
        $company->location = $request->location;
        $company->country = $request->country;
        $company->state = $request->state;
        $company->city = $request->city;
        $company->employe = $request->employee;
        $company->website = $request->website;
        $company->desc = $request->desc;
        if ($request->hasFile('image')) {
            $imageExtension = $request->file('image')->extension();
            $imageName = time() . '_image.' . $imageExtension;
            $imagePath = 'images/' . $imageName; // Full path: 'public/images/filename'
            $request->file('image')->move(public_path('images'), $imageName);
            $company->image = $imagePath; // Assign the full path to the 'image' property
        }

        $company->save();
        return response()->json([
            'status' => '200',
            'message' => 'Company Profile Added',
        ]);
    }
    public function AddCreateCv(Request $request)
    {
        $profile = ProfileCV::where('userid', Auth::user()->id)->first();
        if (!$profile) {
            $profile = new ProfileCV();
        }
        $profile->firstname = $request->firstname;
        $profile->middlename = $request->middlename;
        $profile->surename = $request->surename;
        $profile->dob = $request->dob;
        $profile->gender = $request->gender;
        $profile->martial = $request->martial;
        $profile->city = $request->city;
        $profile->state = $request->state;
        $profile->country = $request->country;
        $profile->phone = $request->phone;
        $profile->email = $request->email;
        $profile->website = $request->website;
        $profile->address = $request->address;
        $profile->graduation = $request->graduation;
        $profile->university = $request->university;
        $profile->degree = $request->degree;
        $profile->level = $request->level;
        $profile->course = $request->course;
        $profile->info = $request->info;
        $profile->company = $request->company;
        $profile->position = $request->position;
        $profile->locationc = $request->locationc;
        $profile->from = $request->from;
        $profile->to = $request->to;
        $profile->infocompany = $request->infocompany;
        $profile->skills = $request->skills;
        $profile->userid = Auth::user()->id;
        $profile->save();
        return response()->json([
            'status' => '200',
            'data' => $profile,
            'message' => 'Profile CV Added',
        ]);
    }
}
