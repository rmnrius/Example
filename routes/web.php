<?php


use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    $painting = Job::all();
    
    dd($painting);

    // return view('index');
});

Route::get('/gallery', function () {
    return view('gallery', [
        'paintings' => Job::all()
    ]);
});

Route::get('/gallery/{id}', function ($id) {
    $painting = Job::find($id);
    
    return view('painting', ['painting' => $painting]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
