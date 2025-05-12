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
        $blogs = Blog::all();
        return Inertia::render('Blogs', [
            'blogs' => $blogs
        ]);
    }
}
