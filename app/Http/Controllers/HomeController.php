<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function jobs()
    {
        $jobs = Job::with('company')->get();
        return Inertia::render('Jobs', [
            'jobs' => $jobs
        ]);
    }
}
