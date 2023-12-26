<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Companyinfo;
use App\Models\Companymain;
use App\Models\JobsAcive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function logout()
    {
        Auth::logout(); // Perform the logout action
        return redirect('/login'); // Redirect to the login page or any other desired page
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function adminJobs()
    {
        $jobs = JobsAcive::where('userid', Auth::user()->id)->get();
        return view('Admin.jobs.jobs', compact('jobs'));
    }
    public function CreateadminJobs()
    {
        return view('Admin.jobs.create');
    }
    public function EditadminJobs($id)
    {
        $jobs = JobsAcive::where('id', $id)->first();
        return view('Admin.jobs.edit', compact('jobs'));
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
            return redirect()->back()->with('success', 'Created successfully!');
        }
    }
    public function DeleteadminJobs($id)
    {
        JobsAcive::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Deleted successfully!');
    }

    // company profile

    public function companyProfile()
    {
        $company = Companymain::where('user_id', Auth::user()->id)->first();
        return view('Admin.company.create', compact('company'));
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
        return redirect()->back()->with('success', 'Updated successfully!');
    }
}
