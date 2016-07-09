@extends('layouts.app')

@section('content')

  <h2 style="text-align: center;">{{ $album->title }}</h2>
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000" data-wrap="false" data-pause="hover">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      @for($i = 1; $i <= count($album->photos); $i++)
        <li data-target="#myCarousel" data-slide-to="{{ $i }}"></li>
      @endfor
    </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{ $album->cover_image }}" class="img-responsive center-block">
      <div class="carousel-caption">
        <p>{{ $album->description }}</p>
      </div>
    </div>

    @foreach($album->photos as $photo)
      <div class="item">
        <img src="{{ $photo->image }}" class="img-responsive center-block">
        <div class="carousel-caption">
          <p>{{ $photo->description }}</p>
        </div>
      </div>
    @endforeach

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>

@endsection
