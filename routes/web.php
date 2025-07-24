<?php


use Illuminate\Support\Facades\Route;
use App\Models\Painting;

Route::get('/', function () {
    return view('index');
});

Route::get('/gallery', function () {
    $paintings = Painting::with('artist')->paginate(3);

    return view('gallery', [
        'paintings' => $paintings
    ]);
});

Route::get('/gallery/{id}', function ($id) {
    $painting = Painting::find($id);
    
    return view('painting', ['painting' => $painting]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
