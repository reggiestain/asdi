<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
	
	protected $fillable = ['email', 'title','first_name','last_name','birth_date','gender','home_address','home_postal_code','home_country_id','postal_address','postal_postal_code','postal_country_id','tel','mobile','fax'];
	
	public function courses()
	{
		return $this->belongsToMany('Course')->withPivot('approved', 'paid');
	}
	
	public function documents()
	{
		return $this->hasMany('Document');
	}
	
	public function invoices()
	{
		return $this->hasMany('Invoice');
	}

}
