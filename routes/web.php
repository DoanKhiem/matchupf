<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('HomeView');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Blog routes
Route::get('/blogs', function () {
    return Inertia::render('Blogs');
})->name('blogs');

Route::get('/blog/{slug}', function ($slug) {
    return Inertia::render('BlogDetail', ['slug' => $slug]);
})->name('blog.detail');

// Job routes
Route::get('/jobs', function () {
    return Inertia::render('Jobs');
})->name('jobs');

Route::get('/job/{slug}', function ($slug) {
    return Inertia::render('JobDetail', ['slug' => $slug]);
})->name('job.detail');

Route::get('/post-job', function () {
    return Inertia::render('PostAJob');
})->name('post.job');

// Auth routes
Route::get('/login', function () {
    return Inertia::render('Login');
})->name('login');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
