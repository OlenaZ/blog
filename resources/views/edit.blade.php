@extends('layouts.app')

@section('content')

<div class="container">
    
    <h1>Змінити/Видалити пост</h1>
    
    <hr>

    <h3>Змінити пост "{{ $post->title }}"</h3>

    <br>

    {!! Form::model($post, array('route' => 'post.update', 'url' => 'post/'.$post->id, 'method' => 'PUT', 'class' => 'form')) !!}

    @include ('partials.form', ['submitButtonText' => 'Зберегти зміни'])

    {!! Form::close() !!}

    <hr>

    <h3>Хочеш видалити цей пост?</h3>

    {!! Form::open(array('url' => 'post/'.$post->id, 'method' => 'DELETE', 'class' => 'form')) !!}

    <div class="form-group">
        {!! Form::submit('Видалити пост', 
          array('class'=>'btn btn-danger')) !!}
    </div>

    {!! Form::close() !!}

</div>

@endsection