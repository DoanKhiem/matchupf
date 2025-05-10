<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Company;
use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('company')->get();
        $categories = Category::all();
        return Inertia::render('dashboard/Jobs', [
            'jobs' => $jobs,
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'location' => 'required|string|max:255',
                'type' => 'required|string|max:255',
                'salary' => 'required|string|max:255',
                'experience' => 'required|string|max:255',
                'status' => 'required|in:active,inactive',
                'description' => 'required|string',
                'responsibilities' => 'required|array|min:1',
                'responsibilities.*' => 'required|string',
                'skills' => 'required|array|min:1',
                'skills.*' => 'required|string',
                'benefits' => 'required|array|min:1',
                'benefits.*' => 'required|string',
                'category_id' => 'required|exists:categories,id',
                'logo' => 'nullable|image|max:2048',
            ]);

            // Generate slug from title
            $validated['slug'] = Str::slug($validated['title']);
            
            // Ensure unique slug
            $count = 1;
            $originalSlug = $validated['slug'];
            while (Job::where('slug', $validated['slug'])->exists()) {
                $validated['slug'] = $originalSlug . '-' . $count;
                $count++;
            }

            // Handle logo upload
            if ($request->hasFile('logo')) {
                $path = $request->file('logo')->store('public/logos');
                $validated['logo'] = Storage::url($path);
            }
            Job::create($validated);
            return redirect()->route('dashboard.jobs')->with('success', 'Job created!');
        } catch (ValidationException $e) {
            if ($request->wantsJson()) {
                return response()->json(['errors' => $e->errors()], 422);
            }
            throw $e;
        }
    }

    public function show($id)
    {
        $job = Job::with('company')->findOrFail($id);
        return response()->json($job);
    }

    public function update(Request $request, $id)
    {
        try {
            $job = Job::findOrFail($id);
            $validated = $request->validate([
                'title' => 'sometimes|required|string|max:255',
                'location' => 'sometimes|required|string|max:255',
                'type' => 'sometimes|required|string|max:255',
                'salary' => 'sometimes|required|string|max:255',
                'experience' => 'sometimes|required|string|max:255',
                'status' => 'sometimes|required|in:active,inactive',
                'description' => 'sometimes|required|string',
                'responsibilities' => 'sometimes|required|array|min:1',
                'responsibilities.*' => 'required|string',
                'skills' => 'sometimes|required|array|min:1',
                'skills.*' => 'required|string',
                'benefits' => 'sometimes|required|array|min:1',
                'benefits.*' => 'required|string',
                'category_id' => 'sometimes|required|exists:categories,id',
                'logo' => 'nullable|image|max:2048',
            ]);

            // Generate new slug if title is being updated
            if (isset($validated['title']) && $validated['title'] !== $job->title) {
                $validated['slug'] = Str::slug($validated['title']);
                
                // Ensure unique slug
                $count = 1;
                $originalSlug = $validated['slug'];
                while (Job::where('slug', $validated['slug'])->where('id', '!=', $job->id)->exists()) {
                    $validated['slug'] = $originalSlug . '-' . $count;
                    $count++;
                }
            }

            // Handle logo upload
            if ($request->hasFile('logo')) {
                // Delete old logo if exists
                if ($job->logo) {
                    $oldPath = str_replace('/storage/', 'public/', $job->logo);
                    Storage::delete($oldPath);
                }
                
                $path = $request->file('logo')->store('public/logos');
                $validated['logo'] = Storage::url($path);
            }

            $job->update($validated);
            return redirect()->route('dashboard.jobs')->with('success', 'Job updated!');
        } catch (ValidationException $e) {
            if ($request->wantsJson()) {
                return response()->json(['errors' => $e->errors()], 422);
            }
            throw $e;
        }
    }

    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        
        // Delete logo if exists
        if ($job->logo) {
            $path = str_replace('/storage/', 'public/', $job->logo);
            Storage::delete($path);
        }
        
        $job->delete();
        return redirect()->route('dashboard.jobs')->with('success', 'Job deleted!');
    }
} 