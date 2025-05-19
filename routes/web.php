<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return Inertia::render('HomeView');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('dashboard/Index');
})->middleware(['auth', 'verified'])->name('dashboard');

// Blog routes
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');

Route::get('/blog/{slug}', [HomeController::class, 'blogDetail'])->name('blog.detail');

// Job routes
Route::get('/jobs', [HomeController::class, 'jobs'])->name('jobs');
Route::get('/job-category/{slug}', [HomeController::class, 'jobsByCategory'])->name('job.category');
// Route::get('/search-jobs', [HomeController::class, 'searchJobs'])->name('jobs.search');

Route::get('/job/{id}', [HomeController::class, 'jobDetail'])->name('job.detail');

// Route::get('/post-job', function () {
//     return Inertia::render('PostAJob');
// })->name('post.job');

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
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
