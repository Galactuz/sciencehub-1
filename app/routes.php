<?php

Route::get('/', 'HubController@index');

Route::get('/{author}', function($author){
	return View::make('author.profile', $author);
});

Route::post('/store', 'AuthorController@store');

Route::get('/authors/create', 'AuthorController@create');
