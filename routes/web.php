<?php

use App\Http\Controllers\PaintingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//home page
Route::view('/', 'index');

Route::controller(PaintingController::class)->group(function () {
    Route::get('/gallery', 'index');
    Route::get('/gallery/create', 'create');
    Route::get('/gallery/{painting}', 'show');
    Route::post('/gallery', 'store');
    Route::get('/gallery/{painting}/edit', 'edit');
    Route::patch('/gallery/{painting}', 'update');
    Route::delete('/gallery/{painting}', 'destroy');
});
Route::view('/about', 'about');
Route::view('/contact', 'contact');

