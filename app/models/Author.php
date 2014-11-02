<?php

class Author extends Eloquent {

	public function publications()
	{
		return $this->hasMany('Publication');
	}

}