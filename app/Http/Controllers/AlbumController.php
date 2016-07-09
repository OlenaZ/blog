<?php

namespace App\Http\Controllers;

use App\Album;

use Illuminate\Http\Request;

use App\Http\Requests;

class AlbumController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin', ['except' => ['index', 'show', 'slideshow']]);
    }

    public function index()
    {
        $albums = Album::latest()->get();
        
        return view('gallery.album', compact('albums'));
    }

    public function create()
    {
        return view('gallery.create');
    }

    public function store(Request $request)
    {
        $album = Album::create($request->all(), "0");

        flash('Your album has been successfully created!');

        return redirect('album');
    }

    public function show(Album $album)
    {
        return view('gallery.show', compact('album'));
    }

    public function slideshow(Album $album)
    {
        return view('gallery.slideshow', compact('album'));
    }

    public function edit(Album $album)
    {
        return view('gallery.edit', compact('album'));
    }

    public function update(Request $request, Album $album)
    {
        $album->update($request->all());

        flash('Your album has been successfully updated!');

        return view('gallery.show', compact('album'));
    }

    public function destroy(Album $album)
    {
        $album->delete();

        flash('Your album has been deleted.');

        return redirect('album');
    }

}
