<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Category;
use App\Models\Blog;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
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
