<?php

namespace App\Http\Controllers\web;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::getAllJobs();
         return view('job' , ['jobs' => $jobs , 'name' => 'Youssef' , 'title' => 'Job Listings']);
    }
}
