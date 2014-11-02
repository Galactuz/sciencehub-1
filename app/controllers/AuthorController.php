<?php

class AuthorController extends BaseController {

	public function show($author)
	{
		$theAuthor = Author::whereUsername($author)->first();
		return View::make('author.profile', ['theAuthor' => $theAuthor]);
	}

	public function create()
	{
		return View::make('author.create');
	}

	public function store()
	{
		$validator = Validator::make(Input::all(), ['username' => 'required', 'password' => 'required', 'email' => 'required']);

		if($validator->fails())
			return Redirect::back()->withInput()->withErrors($validator->messages());
		
		$author = new Author;
		$author->username = Input::get('username');
		$author->password = Hash::make(Input::get('password'));
		$author->email = Input::get('email');
		$author->first_name = Input::get('first_name');
		$author->last_name = Input::get('last_name');
		$author->bio = Input::get('bio');
		$author->save();

		return Redirect::to('/')->with('message', 'Author created!');
	}

}