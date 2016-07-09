@extends('layouts.app')

@section('content')

<div class="container">
    
    <h1>Змінити/Видалити альбом</h1>
    
    <hr>

    <h3>Змінити альбом "{{ $album->title }}"</h3>

    <br>

    {!! Form::model($album, array('route' => 'album.update', 'url' => 'album/'.$album->id, 'method' => 'PUT', 'class' => 'form')) !!}

    @include ('partials.form_album', ['submitButtonText' => 'Зберегти зміни'])

    {!! Form::close() !!}

    <hr>

    <h3>Хочеш видалити цей альбом?</h3>

    {!! Form::open(array('url' => 'album/'.$album->id, 'method' => 'DELETE', 'class' => 'form')) !!}

    <div class="form-group">
        {!! Form::submit('Видалити альбом', 
          array('class'=>'btn btn-danger')) !!}
    </div>

    {!! Form::close() !!}

</div>

@endsection