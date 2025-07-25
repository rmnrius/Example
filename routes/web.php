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
Route::get('/gallery/{painting}', function ( Painting $painting) {
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


//display the edit form for a specific painting
Route::get('/gallery/{painting}/edit', function (Painting $painting) {
    return view('gallery.edit', ['painting' => $painting]);
});

//update the painting
Route::patch('/gallery/{painting}', function (Painting $painting) {
    //authorize on hold
    //validate
    request()->validate([
        'title' => 'required|min:3',
        'price' => 'required'
    ]);
    $painting->update([
        'title' => request('title'),
        'price' => request('price')
    ]);
    return redirect('/gallery/' . $painting->id);

});

//delete the painting
Route::delete('/gallery/{painting}', function (Painting $painting) {
    $painting->delete();

    return redirect('/gallery');
});

//about page
Route::get('/about', function () {
    return view('about');
});

//contact page
Route::get('/contact', function () {
    return view('contact');
});
