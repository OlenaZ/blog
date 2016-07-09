@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">

                    <b>Авторизація здійснена успішно</b>
                </div>

                <div class="panel-body">

                    @if ($access)

                        <i><p><h4>Вітаю на твоєму блозі!</h4></p>

                        <br>

                        <p>Наразі у тебе немає неопублікованих постів.</p>

                        <br>

                        <p>Бажаєш:</p></i>

                        @include('partials.create_post_button')

                        <br>

                        <a href = "/post" class="btn btn-info">Перейти до переліку постів</a>

                    @else

                        Тепер Ви можете залишати коментарі на сайті.

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
