@extends('layouts.app')

@section('content')

<div class="container">
    
    <h1>Форма для створення нового посту</h1>
    
    <hr>

    {!! Form::open(array('route' => 'post.store', 'class' => 'form')) !!}

    @include ('partials.form', ['submitButtonText' => 'Зберегти'])

    {!! Form::close() !!}

</div>

@endsection