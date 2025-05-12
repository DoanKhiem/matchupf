<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();
        return Inertia::render('dashboard/Blogs', [
            'blogs' => $blogs
        ]);
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'content' => 'required|string',
                'image' => 'required|image|max:2048',
            ]);

            // Generate slug from title
            $validated['slug'] = Str::slug($validated['title']);
            
            // Ensure unique slug
            $count = 1;
            $originalSlug = $validated['slug'];
            while (Blog::where('slug', $validated['slug'])->exists()) {
                $validated['slug'] = $originalSlug . '-' . $count;
                $count++;
            }

            // Handle image upload
            if ($request->hasFile('image')) {
                $path = $request->file('image')->store('public/blogs');
                $validated['image'] = Storage::url($path);
            }

            Blog::create($validated);
            return redirect()->route('blogs.index')->with('success', 'Blog created!');
        } catch (ValidationException $e) {
            if ($request->wantsJson()) {
                return response()->json(['errors' => $e->errors()], 422);
            }
            throw $e;
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $blog = Blog::findOrFail($id);
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'content' => 'required|string',
                'image' => 'nullable|image|max:2048',
            ]);

            // Generate new slug if title is being updated
            if (isset($validated['title']) && $validated['title'] !== $blog->title) {
                $validated['slug'] = Str::slug($validated['title']);
                
                // Ensure unique slug
                $count = 1;
                $originalSlug = $validated['slug'];
                while (Blog::where('slug', $validated['slug'])->where('id', '!=', $blog->id)->exists()) {
                    $validated['slug'] = $originalSlug . '-' . $count;
                    $count++;
                }
            }

            // Handle image upload
            if ($request->hasFile('image')) {
                // Delete old image if exists
                if ($blog->image) {
                    $oldPath = str_replace('/storage/', 'public/', $blog->image);
                    Storage::delete($oldPath);
                }
                
                $path = $request->file('image')->store('public/blogs');
                $validated['image'] = Storage::url($path);
            }

            $blog->update($validated);
            return redirect()->route('blogs.index')->with('success', 'Blog updated!');
        } catch (ValidationException $e) {
            if ($request->wantsJson()) {
                return response()->json(['errors' => $e->errors()], 422);
            }
            throw $e;
        }
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        
        // Delete image if exists
        if ($blog->image) {
            $path = str_replace('/storage/', 'public/', $blog->image);
            Storage::delete($path);
        }
        
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog deleted!');
    }
}
