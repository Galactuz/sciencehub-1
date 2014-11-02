<?php

Route::get('/', 'HubController@index');

Route::get('/{author}', 'AuthorController@show');

Route::post('/store', 'AuthorController@store');

Route::get('/authors/create', 'AuthorController@create');