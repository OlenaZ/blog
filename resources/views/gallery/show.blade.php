@extends('layouts.app')

@section('content')

<div class="container">

    @if ($access)

        @include('partials.edit_album_buttons')

    @endif

    <br><br>
    <div class="starter-template">
        <div class="media">
            <img class="media-object pull-left" src="{{ $album->cover_image }}" width="350px">
            <div class="media-body">
            	<h2 class="media-heading" style="font-size: 24px;">Назва альбому:</h2>

            	<p><i><h4>{{ $album->title }}</h4></i></p>

                <div class="media">

                    @if ($album->description != null)

                        <h2 class="media-heading" style="font-size: 24px;">Опис альбому:</h2>

                        <p>{{ $album->description }}</p>

                    @endif
                    <br>
                    <a href="/slideshow/{{ $album->id }}">Слайд-шоу</a>
                </div>
            </div>  
        </div>
    </div>

    <div class="container-fluid text-center" style="padding: 40px">
        <div class="row">

            @foreach($album->photos as $photo)
            
                <div class="col-sm-3">

                    <a href="{{ $photo->image }}" class="thumbnail">

                        <p>{{ $photo->description }}</p>

                        <img src="{{ $photo->image }}" style="height:150px">

                         @if ($access)

                            @include('partials.form_photo_delete')

                        @endif
                    </a>
                </div>

            @endforeach
        </div>
    </div>    
</div>

@endsection