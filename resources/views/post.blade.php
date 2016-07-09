@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Подорожі Україною</h1>

    @if(isset($tag))

        <h3>за тегом "{!! $tag->name !!}" </h3>

    @endif

    <hr>

    @if($access)

        @include('partials.create_post_button')

    @endif

    <br>

    @foreach($posts as $post)
    
        @if($post->publish == 'так')
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href = "/post/{{ $post->id }}"> {{ $post->title }} </a>
                        </div> 
                        <div class="panel-body">{{ $post->beginning }}</div>
                    </div>
                </div>
            </div>
                            
        @elseif($access)
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <b>Не опублікований</b>
                            <a href = "/post/{{ $post->id }}"> {{ $post->title }} </a>
                        </div> 
                        <div class="panel-body">{{ $post->beginning }}</div>
                    </div>
                </div>
            </div>   
        @endif
                
    @endforeach
</div>
@endsection