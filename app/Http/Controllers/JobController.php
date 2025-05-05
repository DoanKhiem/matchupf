<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Company;
use Illuminate\Http\Request;
use Inertia\Inertia;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('company')->get();
        return Inertia::render('DashboardJobs', [
            'jobs' => $jobs
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'location' => 'required|string',
            'type' => 'required|string',
            'salary' => 'required|string',
            'experience' => 'required|string',
            // 'company_id' => 'required|exists:companies,id',
            'description' => 'required|string',
            'responsibilities' => 'required|array',
            'skills' => 'required|array',
        ]);
        Job::create($validated);
        // Sau khi tạo, redirect về index để Inertia nhận lại jobs mới
        return redirect()->route('dashboard.jobs')->with('success', 'Job created!');
    }

    public function show($id)
    {
        $job = Job::with('company')->findOrFail($id);
        return response()->json($job);
    }

    public function update(Request $request, $id)
    {
        $job = Job::findOrFail($id);
        $validated = $request->validate([
            'title' => 'sometimes|required|string',
            'location' => 'sometimes|required|string',
            'type' => 'sometimes|required|string',
            'salary' => 'sometimes|required|string',
            'experience' => 'sometimes|required|string',
            // 'company_id' => 'sometimes|required|exists:companies,id',
            'description' => 'sometimes|required|string',
            'responsibilities' => 'sometimes|required|array',
            'skills' => 'sometimes|required|array',
        ]);
        $job->update($validated);
        return redirect()->route('dashboard.jobs')->with('success', 'Job updated!');
    }

    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();
        return redirect()->route('dashboard.jobs')->with('success', 'Job deleted!');
    }
} 