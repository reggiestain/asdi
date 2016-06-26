<?php



class Course extends Eloquent  {
	

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'courses';
	
	protected $fillable = array('category_id','code','name', 'cost', 'description','active');
	
	public static $rules = array(
		'name' => 'required',
		'category_id' => 'required|numeric',
		'code' => 'required',
		'cost' => 'required|numeric'
	);
	
	public function users()
	{
		return $this->belongsToMany('User')->withPivot('approved', 'paid')->orderBy('last_name')->orderBy('first_name');
	}
	
	public function category()
	{
		return $this->belongsTo('Category');
	}
	
}
