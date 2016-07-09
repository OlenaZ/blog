<?php

namespace App\Http\Controllers;

use App\Album;

use App\Photo;

use DB;

use Illuminate\Http\Request;

use App\Http\Requests;

class PhotoController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function create($id)
    {
        $album = Album::find($id);

        return view('photos.create', compact('album'));
    }

    public function store(Request $request, Album $album)
    {
        $photo = Photo::create($request->all());

        flash('The photo has been added!');

        return back();
    }

    public function destroy(Photo $photo)
    {
        $photo->delete();

        flash('The photo has been deleted.');

        return back();
    }
}
