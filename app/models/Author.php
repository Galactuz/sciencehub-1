<?php

class Author extends Eloquent {

	public $timestamps = false;

	public function publications()
	{
		return $this->hasMany('Publication');
	}

}