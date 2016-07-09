{!! Form::open(array('url' => 'photo/'.$photo->id, 'method' => 'DELETE', 'class' => 'form')) !!}

{!! Form::submit('Видалити світлину', array('class'=>'btn-link btn-xs')) !!}

{!! Form::close() !!}