<?php

namespace App\Http\Controllers;
use App\Models\Painting;
use Illuminate\Http\Request;

class PaintingController extends Controller
{
    public function index()
    {
        $paintings = Painting::with('artist')->latest()->paginate(3);
        return view('gallery.index', [
            'paintings' => $paintings
        ]);
    }
    public function create()
    {
        return view('gallery.create');
    }
    public function show(Painting $painting)
    {
        return view('gallery.show', ['painting' => $painting]);
    }
    public function store()
    {
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
    }
    public function edit(Painting $painting)
    {
        return view('gallery.edit', ['painting' => $painting]);
    }
    public function update(Painting $painting)
    {
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
    }
    public function destroy(Painting $painting)
    {
        $painting->delete();
        return redirect('/gallery');
    }
}
