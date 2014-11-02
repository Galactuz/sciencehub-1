<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

Route::get('/{author}', function($author){
	$theAuthor = Author::whereUsername($author)->first();
	return View::make('author.profile', ['theAuthor' => $theAuthor]);
});


// Route::get('/{username}', function($username){
// 	return 'User ' . $username;
// });
