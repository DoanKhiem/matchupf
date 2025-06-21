<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Category;
use App\Models\Blog;
use App\Models\JobApplication;
use App\Mail\JobApplicationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('jobs')->take(4)->get();
        $jobs = Job::with('company')->latest()->take(6)->get();
        $blogs = Blog::select('id', 'title', 'slug', 'image', 'content', 'created_at')
            ->latest()
            ->take(4)
            ->get()
            ->map(function ($blog) {
                return [
                    'id' => $blog->id,
                    'title' => $blog->title,
                    'image' => $blog->image,
                    'slug' => $blog->slug,
                ];
            });
        
        return Inertia::render('HomeView', [
            'categories' => $categories,
            'jobs' => $jobs,
            'blogs' => $blogs
        ]);
    }

    public function jobs(Request $request)
    {
        $categories = Category::withCount('jobs')->get();
        if ($request->has('query')) {
            $query = $request->input('query');
            $jobs = Job::with('company')
                    ->where('title', 'like', '%' . $query . '%')
                    ->get();
            return Inertia::render('Jobs', [
                'jobs' => $jobs,
                'categories' => $categories,
                'searchQuery' => $query,
            ]);
        } else {
            $jobs = Job::with('company')->get();
            return Inertia::render('Jobs', [
                'jobs' => $jobs,
                'categories' => $categories
            ]);
        }
    }

    public function jobsByCategory($slug)
    {
        $category = Category::where('title', 'like', str_replace('-', ' ', $slug))->firstOrFail();
        $jobs = $category->jobs()->with('company')->get();
        $categories = Category::withCount('jobs')->get();

        return Inertia::render('Jobs', [
            'jobs' => $jobs,
            'categories' => $categories,
            'selectedCategory' => $category->title,
        ]);
    }


    public function jobDetail($id)
    {
        $job = Job::with('company')->where('id', $id)->firstOrFail();
        return Inertia::render('JobDetail', [
            'job' => $job
        ]);
    }

    public function applyForJob(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:10240', // 10MB max
            'message' => 'nullable|string|max:5000',
        ]);

        $job = Job::with('company')->findOrFail($id);

        // Store the CV file
        $cvPath = null;
        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('job-applications/cv', 'public');
        }

        // Save application to database
        $application = JobApplication::create([
            'job_id' => $job->id,
            'name' => $request->name,
            'email' => $request->email,
            'cv_path' => $cvPath,
            'message' => $request->message,
            'status' => 'pending',
        ]);

        $applicationData = [
            'name' => $request->name,
            'email' => $request->email,
            'cv' => $request->file('cv'),
            'message' => $request->message,
            'cv_path' => $cvPath,
        ];

        try {
            // Send email to admin/HR
            $adminEmail = config('mail.from.address', 'admin@example.com');
            Mail::to($adminEmail)->send(new JobApplicationMail($applicationData, $job));

            // Send confirmation email to applicant
            Mail::to($request->email)->send(new JobApplicationMail($applicationData, $job));

            return back()->with('success', 'Your application has been submitted successfully!');
        } catch (\Exception $e) {
            // If email fails, still store the application data
            // You might want to log this error
            \Log::error('Job application email failed: ' . $e->getMessage());

            return back()->with('success', 'Your application has been submitted successfully!');
        }
    }

    public function blogs()
    {
        $blogs = Blog::select('id', 'title', 'slug', 'image', 'content', 'created_at')
            ->latest()
            ->get()
            ->map(function ($blog) {
                // Extract a short description from content
                $desc = substr(strip_tags($blog->content), 0, 120) . '...';
                
                return [
                    'id' => $blog->id,
                    'title' => $blog->title,
                    'img' => $blog->image,
                    'desc' => $desc,
                    'slug' => $blog->slug,
                    'created_at' => $blog->created_at,
                ];
            });
        
        // Get 5 popular blogs for sidebar
        $popularBlogs = Blog::select('id', 'title', 'slug', 'image')
            ->latest()
            ->take(5)
            ->get()
            ->map(function ($blog) {
                return [
                    'id' => $blog->id,
                    'title' => $blog->title,
                    'image' => $blog->image,
                    'slug' => $blog->slug,
                ];
            });
        
        return Inertia::render('Blogs', [
            'blogs' => $blogs,
            'popularBlogs' => $popularBlogs
        ]);
    }

    public function searchBlogs(Request $request)
    {
        $query = $request->input('query');
        
        $blogs = Blog::select('id', 'title', 'slug', 'image', 'content', 'created_at')
            ->where('title', 'like', '%' . $query . '%')
            ->orWhere('content', 'like', '%' . $query . '%')
            ->latest()
            ->get()
            ->map(function ($blog) {
                // Extract a short description from content
                $desc = substr(strip_tags($blog->content), 0, 120) . '...';
                
                return [
                    'id' => $blog->id,
                    'title' => $blog->title,
                    'img' => $blog->image,
                    'desc' => $desc,
                    'slug' => $blog->slug,
                    'created_at' => $blog->created_at,
                ];
            });
        
        // Get 5 popular blogs for sidebar
        $popularBlogs = Blog::select('id', 'title', 'slug', 'image')
            ->latest()
            ->take(5)
            ->get()
            ->map(function ($blog) {
                return [
                    'id' => $blog->id,
                    'title' => $blog->title,
                    'image' => $blog->image,
                    'slug' => $blog->slug,
                ];
            });
        
        return Inertia::render('Blogs', [
            'blogs' => $blogs,
            'popularBlogs' => $popularBlogs,
            'searchQuery' => $query
        ]);
    }

    public function blogDetail($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        
        // Get popular blogs for sidebar
        $popularBlogs = Blog::select('id', 'title', 'slug', 'image')
            ->where('id', '!=', $blog->id)  // Exclude current blog
            ->latest()
            ->take(5)
            ->get()
            ->map(function ($blog) {
                return [
                    'id' => $blog->id,
                    'title' => $blog->title,
                    'image' => $blog->image,
                    'slug' => $blog->slug,
                ];
            });
        
        return Inertia::render('BlogDetail', [
            'blog' => [
                'id' => $blog->id,
                'title' => $blog->title,
                'image' => $blog->image,
                'content' => $blog->content,
                'created_at' => $blog->created_at->format('M d, Y'),
                'slug' => $blog->slug,
            ],
            'popularBlogs' => $popularBlogs
        ]);
    }
}
