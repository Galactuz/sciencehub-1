<?php

class AuthorController extends \BaseController {

	public function show($author)
	{
		$theAuthor = Author::whereUsername($author)->first();
		return View::make('author.profile', ['theAuthor' => $theAuthor]);
	}

}