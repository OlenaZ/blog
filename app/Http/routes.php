<?php

Route::group(['middleware' => 'web'], function () {

	Route::auth();

	Route::get('/home', 'HomeController@index');

	Route::resource('post', 'PostController');

	Route::get('tags/{tags}', 'TagsController@show');

	Route::resource('album', 'AlbumController');

	Route::get('photo/create/{album}', 'PhotoController@create');

	Route::resource('photo', 'PhotoController', ['only' => ['store', 'destroy']]);

	Route::get('slideshow/{album}', 'AlbumController@slideshow');

});





