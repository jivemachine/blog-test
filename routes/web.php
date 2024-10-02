<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    // return view('welcome');
    return Inertia::render('Index', [
        'foo' => 'bar',
    ]);
});


Route::get('/about', function () {
    return Inertia::render('About');
});

Route::get('/contact', function () {
    return Inertia::render('Contact');
});

Route::get('/posts', function () {
    return Inertia::render('Posts');
});


// Route::resource('/post', PostController::class);
