<?php


use Illuminate\Support\Facades\Route;
use App\Models\Painting;

Route::get('/', function () {
    return view('index');
});

Route::get('/gallery', function () {
    $paintings = Painting::with('artist')->latest()->paginate(3);

    return view('gallery.index', [
        'paintings' => $paintings
    ]);
});

Route::get('/gallery/create', function () {
    return view('gallery.create');
});


Route::get('/gallery/{id}', function ($id) {
    $painting = Painting::find($id);
    
    return view('gallery.show', ['painting' => $painting]);
});

Route::post('/gallery', function () {
    // validation..........

    Painting::create([
        'title' => request('title'),
        'artist_id' => 1,
        'price' => request('price')
    ]);
    return redirect('/gallery');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
