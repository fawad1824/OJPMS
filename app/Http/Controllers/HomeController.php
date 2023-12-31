<?php

namespace App\Http\Controllers;

use App\Models\Applyjob;
use App\Models\Company;
use App\Models\Companyinfo;
use App\Models\Companymain;
use App\Models\JobsAcive;
use App\Models\ProfileCV;
use App\Models\User;
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
        if (Auth::user()->role_id == 'admin') {
            return view('home');
        } else if (Auth::user()->role_id == 'job') {
            $company = Applyjob::where('userid', Auth::user()->id)->get();
            return view('Admin.jobs.applyjobs', compact('company'));
        } else if (Auth::user()->role_id == 'vendor') {
            $jobs = JobsAcive::where('userid', Auth::user()->id)->get();
            return view('Admin.jobs.jobs', compact('jobs'));
        }
    }

    public function adminJobs()
    {
        $jobs = JobsAcive::where('userid', Auth::user()->id)->where('status', '!=', 'Hire')->get();
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
    public function DeleteApplyJobs($id)
    {
        Applyjob::where('id', $id)->delete();
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

    // create CV
    public function CreateCv($id = null)
    {
        if ($id) {
            $profile = ProfileCV::where('userid', $id)->first();
            return view('CV.Create2', compact('profile'));
        } else {
            $profile = ProfileCV::where('userid', Auth::user()->id)->first();
            return view('CV.Create', compact('profile'));
        }
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
        return redirect()->back()->with('success', 'Updated successfully!');
    }
    public function ApplyJObs($id)
    {
        $jobs = JobsAcive::where('id', $id)->first();
        $apply = new Applyjob();
        $apply->jobid = $id;
        $apply->userid = Auth::user()->id;
        $apply->companyid = $jobs->companyid;
        $apply->status = "pending";
        $apply->date = date('Y-m-d');
        $apply->save();
        return redirect()->back()->with('success', 'Apply added successfully!');
    }
    public function AllJObs()
    {
        $company = Applyjob::where('userid', Auth::user()->id)->get();
        return view('Admin.jobs.applyjobs', compact('company'));
    }
    public function condidateJobs()
    {
        $id = Companymain::where('user_id', Auth::user()->id)->first();
        $company = Applyjob::where('companyid', $id->id ?? "")->get();
        return view('Admin.jobs.jobslist', compact('company'));
    }
    public function DeletedcondidateJobs($id)
    {
        $company = Applyjob::where('companyid', $id)->delete();
        return redirect()->back()->with('success', 'Deleted successfully!');
    }
    public function selectCandidate(Request $request)
    {
        $request->all();
        $jobs = Applyjob::where('jobid', $request->jobid)->first();
        $jobs->status = $request->status;
        $jobs->save();

        $jobsC = JobsAcive::where('id', $request->jobid)->first();
        if ($request->status == 'Hire') {
            $jobsC->status = $request->status;
            $jobsC->save();
        }

        return redirect()->back()->with('success', 'Updated successfully!');
    }

    public function adminCategory()
    {
        $company = Companymain::all();
        return view('Admin.company.Companieslist', compact('company'));
    }
    public function adminlist()
    {
        $company = User::all();
        return view('Admin.users.usersList', compact('company'));
    }
    public function adminJObslist()
    {
        $company = Applyjob::where('status', '=', 'pending')->get();
        return view('Admin.jobs.jobslistAdmin', compact('company'));
    }
    public function adminProfile()
    {
        return view('Admin.users.profile');
    }
    public function AddminProfile(Request $request)
    {
        $user = User::where('id', Auth::user()->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->website = $request->website;
        $user->bio = $request->bio;
        $user->shortdesc = $request->shortdesc;
        $user->country = $request->country;
        $user->state = $request->state;
        $user->address = $request->address;
        if ($request->hasFile('image')) {
            $imageExtension = $request->file('image')->extension();
            $imageName = time() . '_image.' . $imageExtension;
            $imagePath = 'images/' . $imageName; // Full path: 'public/images/filename'
            $request->file('image')->move(public_path('images'), $imageName);
            $user->profile = $imagePath; // Assign the full path to the 'image' property
        }
        $user->save();
        return redirect()->back()->with('success', 'Updated successfully!');
    }
}
