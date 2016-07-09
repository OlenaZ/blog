@extends('layouts.app')

@section('content')

<div class="container">

    @include('partials.edit_post_buttons')

    <h1>{{ $post->title }}</h1>

    <h3>{{ $post->subtitle }}</h3>

    <br>

    <hr>

    <div>{!! $post->body !!}</div> 

    @unless ($post->tags->isEmpty())
        
        <br>

        <h4>Теги:</h4>
        
        <ul>
        
        @foreach ($post->tags as $tag)
            
            <li>{!! link_to_action('TagsController@show', $tag->name, [$tag->name]) !!}</li>

        @endforeach
        
        </ul>
    
    @endunless          
                
</div>

@include('partials.comments')

@endsection