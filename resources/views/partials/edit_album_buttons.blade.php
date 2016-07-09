<a href = "{{ action('PhotoController@create' , $album->id, [$album->id]) }}" class="btn btn-info">Додати світлину</a>

<a href = "/album/{{ $album->id }}/edit" class="btn btn-info">Змінити назву/обкладинку</a>

<a href = "/album/{{ $album->id }}/edit" class="btn btn-danger">Видалити</a>