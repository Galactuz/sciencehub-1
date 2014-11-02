<?php

class Publication extends Eloquent {

	public function author()
	{
		return $this->belongsTo('Author');
	}

}