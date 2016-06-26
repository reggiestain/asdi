<?php



class Category extends Eloquent  {
	

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'categories';
	public $timestamps = false;
	
	protected $fillable = array('name','description','symbols');
	
	public static $rules = array(
		'name' => 'required',
		'description' => 'required',
		'symbols' => 'required'
	);
	
	
	public function courses()
	{
		return $this->hasMany('Course');
	}
	
}
