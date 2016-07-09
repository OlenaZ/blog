    <div class="form-group">
        {!! Form::label('title', 'Назва:') !!}
        {!! Form::text('title', null, 
            array('required', 
                  'class'=>'form-control', 
                  'placeholder'=>'Назва посту')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('subtitle', 'Підзаголовок:') !!}
        {!! Form::text('subtitle', null,
            array('required', 
                  'class'=>'form-control', 
                  'placeholder'=>'Підзаголовок посту')) !!} 
    </div>

    <div class="form-group">
        {!! Form::label('beginning', 'Початок:') !!}
        {!! Form::text('beginning', null, 
            array('required', 
                  'class'=>'form-control', 
                  'placeholder'=>'Перші одне-два речення посту')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Повний текст:') !!}
        {!! Form::textarea('body', null, 
            array('required', 
                  'class'=>'form-control', 
                  'placeholder'=>'Повний текст посту',
                  'id' => 'summernote')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('image', 'Верхня світлина:') !!}
        {!! Form::textarea('image', null, 
            array('required', 
                  'class'=>'form-control', 
                  'placeholder'=>'Лінк на верхню світлину')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('tag_list', 'Теги:') !!}
        {!! Form::select('tag_list[]', $tags, null, 
            array('required',
                  'multiple',
                  'class'=>'form-control',
                  'id' => 'tag_list')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('publish', 'Опублікувати пост:') !!}<br>
        <div style="font-size: 18px;">
            {!! Form::radio('publish', 'так', true) !!} Так
            <br>
            {!! Form::radio('publish', 'ні') !!} Ні
        </div>
    </div>

    <div class="form-group">
        {!! Form::submit($submitButtonText, 
          array('class'=>'btn btn-primary')) !!}
    </div>