<?php

class AuthorController extends \BaseController {

	public function show($username)
	{
		$authorSelected = Author::whereUsername($username)->first();
		return View::make('authors.show', ['authorSelected' => $author]);
	}

}