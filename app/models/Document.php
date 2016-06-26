<?php

class Document extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'fileUpload'	=> 'required'
	);

	
	public function user()
	{
		return $this->belongsTo('User');
	}
	
}
