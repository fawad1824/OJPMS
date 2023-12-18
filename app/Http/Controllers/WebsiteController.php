<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
      // webite
      public function HomeIndex()
      {
          return view('website.Home');
      }
      public function companies()
      {
          return view('website.Companies');
      }
      public function FindJobs()
      {
          return view('website.Jobs');
      }
      public function contact()
      {
          return view('website.Contact');
      }
      public function about()
      {
          return view('website.About');
      }
      public function GetJobs(){
        return view('website.JobsDetail');
      }
}
