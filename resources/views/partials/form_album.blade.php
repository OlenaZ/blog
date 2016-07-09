    <div class="form-group">
        {!! Form::label('title', 'Назва:') !!}
        {!! Form::text('title', null, 
            array('required', 
                  'class'=>'form-control', 
                  'placeholder'=>'Назва альбому')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Опис альбому - за бажанням:') !!}
        {!! Form::text('description', null,
            array('class'=>'form-control', 
                  'placeholder'=>'Опис альбому')) !!} 
    </div>

    <div class="form-group">
        {!! Form::label('cover_image', 'Обкладинка:') !!}
        {!! Form::textarea('cover_image', null, 
            array('required', 
                  'class'=>'form-control', 
                  'placeholder'=>'Посилання на обкладинку альбому')) !!}
    </div>

    <div class="form-group">
        {!! Form::submit($submitButtonText, 
          array('class'=>'btn btn-primary')) !!}
    </div>