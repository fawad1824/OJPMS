<?php

namespace App\Http\Controllers;

use App\Models\Companymain;
use App\Models\JobsAcive;
use App\Models\ProfileCV;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebsiteController extends Controller
{
    // webite
    public function HomeIndex()
    {
        $jobs = JobsAcive::where('status', '!=', 'Hire')->get();
        return view('website.Home', compact('jobs'));
    }
    public function companies()
    {
        $mainCompanies = Companymain::all();
        return view('website.Companies', compact('mainCompanies'));
    }
    public function FindJobs()
    {
        $jobs = JobsAcive::where('status', '!=', 'Hire')->get();
        return view('website.Jobs', compact('jobs'));
    }
    public function contact()
    {
        return view('website.Contact');
    }
    public function about()
    {
        return view('website.About');
    }
    public function GetJobs($id)
    {
        $jobs = JobsAcive::where('id', $id)->first();
        $jobsCompany = Companymain::where('id', $jobs->companyid)->first();
        return view('website.JobsDetail', compact('jobs', 'jobsCompany'));
    }
}
