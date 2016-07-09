@extends('layouts.app')

@section('content')

<div class="container">
    
    <h1>Додати нову світлину до альбому</h1>

    <h3><i><p>"{{ $album->title }}"</p></i></h3> 
    
    <hr>

    {!! Form::open(array('route' => 'photo.store', 'class' => 'form')) !!}

        <div class="form-group">
        {!! Form::hidden('album_id', $album->id) !!}
        
        </div>

        <div class="form-group">
        {!! Form::label('description', 'Опис світлини - за бажанням:') !!}
        {!! Form::text('description', null,
            array('class'=>'form-control', 
                  'placeholder'=>'Опис світлини')) !!} 
        </div>

        <div class="form-group">
        {!! Form::label('image', 'Лінк:') !!}
        {!! Form::textarea('image', null, 
            array('required', 
                  'class'=>'form-control', 
                  'placeholder'=>'Лінк світлини')) !!}
        </div>

        <div class="form-group">
        {!! Form::submit('Додати', 
          array('class'=>'btn btn-primary')) !!}
        </div>

    {!! Form::close() !!}

    <br><br>

    <a href="/album/{{ $album->id }}" class="btn btn-primary">Назад до альбому</a>

</div>

@endsection