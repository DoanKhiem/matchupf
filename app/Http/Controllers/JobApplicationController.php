<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use Illuminate\Http\Request;
use Inertia\Inertia;

class JobApplicationController extends Controller
{
    /**
     * Display a listing of job applications.
     */
    public function index()
    {
        $applications = JobApplication::with(['job.company'])
            ->latest()
            ->get()
            ->map(function ($application) {
                return [
                    'id' => $application->id,
                    'name' => $application->name,
                    'email' => $application->email,
                    'cv_path' => $application->cv_path,
                    'message' => $application->message,
                    'status' => $application->status,
                    'created_at' => $application->created_at->toISOString(),
                    'job' => [
                        'id' => $application->job->id,
                        'title' => $application->job->title,
                        'company' => $application->job->company ? [
                            'name' => $application->job->company->name,
                        ] : null,
                    ],
                ];
            });

        return Inertia::render('dashboard/JobApplications', [
            'applications' => $applications,
        ]);
    }

    /**
     * Display the specified job application.
     */
    public function show(JobApplication $jobApplication)
    {
        $jobApplication->load(['job.company']);

        return Inertia::render('dashboard/JobApplicationDetail', [
            'application' => [
                'id' => $jobApplication->id,
                'name' => $jobApplication->name,
                'email' => $jobApplication->email,
                'cv_path' => $jobApplication->cv_path,
                'message' => $jobApplication->message,
                'status' => $jobApplication->status,
                'created_at' => $jobApplication->created_at->toISOString(),
                'job' => [
                    'id' => $jobApplication->job->id,
                    'title' => $jobApplication->job->title,
                    'company' => $jobApplication->job->company ? [
                        'name' => $jobApplication->job->company->name,
                    ] : null,
                ],
            ],
        ]);
    }

    /**
     * Download the CV file.
     */
    public function downloadCV(JobApplication $jobApplication)
    {
        if (!$jobApplication->cv_path) {
            abort(404, 'CV file not found');
        }

        $path = storage_path('app/public/' . $jobApplication->cv_path);
        
        if (!file_exists($path)) {
            abort(404, 'CV file not found');
        }

        return response()->download($path, 'CV_' . $jobApplication->name . '_' . $jobApplication->job->title . '.pdf');
    }
} 