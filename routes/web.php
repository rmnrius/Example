<?php


use Illuminate\Support\Facades\Route;
use App\Models\Painting;

//home page
Route::get('/', function () {
    return view('index');
});

//displays all the paintings in the gallery
Route::get('/gallery', function () {
    $paintings = Painting::with('artist')->latest()->paginate(3);

    return view('gallery.index', [
        'paintings' => $paintings
    ]);
});

//create a new painting
Route::get('/gallery/create', function () {
    return view('gallery.create');
});

//shows a specific painting
Route::get('/gallery/{id}', function ($id) {
    $painting = Painting::find($id);
    
    return view('gallery.show', ['painting' => $painting]);
});

//query for new painting
Route::post('/gallery', function () {
    // validation..........
    request()->validate([
        'title' => 'required|min:3',
        'price' => 'required'
    ]);

    Painting::create([
        'title' => request('title'),
        'artist_id' => 1,
        'price' => request('price')
    ]);
    return redirect('/gallery');
});

Route::get('/gallery/{id}/edit', function ($id) {
    $painting = Painting::find($id);
    
    return view('gallery.edit', ['painting' => $painting]);
});

//about page
Route::get('/about', function () {
    return view('about');
});

//contact page
Route::get('/contact', function () {
    return view('contact');
});
