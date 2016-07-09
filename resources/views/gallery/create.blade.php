@extends('layouts.app')

@section('content')

<div class="container">
    
    <h1>Форма для створення нового альбому</h1>
    
    <hr>

    {!! Form::open(array('route' => 'album.store', 'class' => 'form')) !!}

    @include ('partials.form_album', ['submitButtonText' => 'Зберегти'])

    {!! Form::close() !!}

</div>

@endsection