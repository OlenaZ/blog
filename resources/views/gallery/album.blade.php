@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Фотоальбоми</h1>

    <hr>

    @include('partials.create_album_button')

    <br>

    <div class="row">

        @foreach($albums as $album)
        
            <div class="col-sm-4">            

                <a href="/album/{{ $album->id }}" class="thumbnail">

                    <img src="{{ $album->cover_image }}" style="height:225px">

                       <h4>{{ $album->title }}</h4>

                       <p>{{ $album->description }}</p>

                       <p>{{ count($album->photos) }} світлин(и) </p>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection

