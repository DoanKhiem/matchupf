<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\JobApplicationController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('dashboard', function () {
    return Inertia::render('dashboard/Index');
})->middleware(['auth', 'verified'])->name('dashboard');

// Blog routes
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/blog/{slug}', [HomeController::class, 'blogDetail'])->name('blog.detail');
Route::get('/search-blogs', [HomeController::class, 'searchBlogs'])->name('blogs.search');

Route::get('/about', function () {
    return Inertia::render('About');
})->name('about');

// Job routes
Route::get('/jobs', [HomeController::class, 'jobs'])->name('jobs');
Route::get('/job-category/{slug}', [HomeController::class, 'jobsByCategory'])->name('job.category');
// Route::get('/search-jobs', [HomeController::class, 'searchJobs'])->name('jobs.search');

Route::get('/job/{id}', [HomeController::class, 'jobDetail'])->name('job.detail');
Route::post('/job/{id}/apply', [HomeController::class, 'applyForJob'])->name('job.apply');

// Route::get('/post-job', function () {
//     return Inertia::render('PostAJob');
// })->name('post.job');

// Contact routes
Route::get('/contact', function () {
    return Inertia::render('Contact');
})->name('contact');

// Auth routes
Route::get('/login', function () {
    return Inertia::render('Login');
})->name('login');

// Route::get('/dashboard/jobs', [JobController::class, 'index'])
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard.jobs');

Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function () {
    Route::resource('jobs', JobController::class)->except(['edit', 'show']);
    Route::resource('companies', CompanyController::class);
    Route::resource('categories', CategoryController::class)->except(['edit', 'show']);
    Route::resource('blogs', BlogController::class)->except(['edit', 'show']);
    
    // Job Applications routes (view-only)
    Route::get('/applications', [JobApplicationController::class, 'index'])->name('dashboard.applications');
    Route::get('/applications/{jobApplication}', [JobApplicationController::class, 'show'])->name('dashboard.applications.show');
    Route::get('/applications/{jobApplication}/download', [JobApplicationController::class, 'downloadCV'])->name('dashboard.applications.download');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
