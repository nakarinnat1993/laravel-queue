<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Failed_job;
use Illuminate\Support\Carbon;

class JobController extends Controller
{
    public function index(){
        $jobs = Job::all();
        return view('recent_job',compact('jobs'));
        // dd(Job::all());
    }
    public function failed_jobs(){
        dd(Failed_job::all());
    }
}
