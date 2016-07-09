@if ($access)

    <a href = "/post/{{ $post->id }}/edit" class="btn btn-info">Змінити</a>

    <a href = "/post/{{ $post->id }}/edit" class="btn btn-danger">Видалити</a>

@endif