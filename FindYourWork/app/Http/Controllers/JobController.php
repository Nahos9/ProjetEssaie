<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
// use Illuminate\Queue\Jobs\Job as JobsJob;

class JobController extends Controller
{
    public function index()
    {
       $jobs = Job::online()->latest()->get();
            // 
        return view('jobs.index',[
            'jobs'=> $jobs
        ]);
    }

    public function show(Job $id)
    {
        return view('jobs.show',[
            'id'=>$id
        ]);
    }
}
