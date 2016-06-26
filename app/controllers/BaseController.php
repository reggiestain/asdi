<?php

	use Carbon\Carbon;
class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
    
    protected $courses;

    public function __construct(Course $courses) {

        $countries = Country::orderBy('name')->lists('name', 'id');

        $categories = Category::lists('name', 'id');
        $this->courses = $courses;

        View::share([
            'countries' => $countries,
            'categories' => $categories
        ]);
        }
        
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}
	
	public function getContent($path)
	{
		
		$categories = Category::with('courses')->get();
		return View::make('pages.'.$path, ['course_categories' => $categories]);
	}
	public function getSubContent($path)
	{
		return View::make('pages.subpages.'.$path);
	}
	public function getSubDev($path)
	{
		return View::make('pages.developingprofessionals.'.$path);
		//return View::make('pages.subpages.'.$path);
	}
	public function getLearning($path)
	{
		return View::make('pages.learning-design.'.$path);
		//return View::make('pages.subpages.'.$path);
	}
	
	public function postContact()
	{
		$input = Input::except(['_token']);
		
		$rules = [
			'first_name' => 'required|alpha',
			'last_name' => 'required',
			'email' => 'required|email',
			'mobile' => 'required',
		];
		
		$validator = Validator::make($input, $rules);
		
		if($validator->fails()) {
			
			return Redirect::to(URL::previous())->withErrors($validator)->withInput();
		}
		
		$input['time'] = Carbon::now()->toDateTimeString() . ' UTC';
		Mail::send('emails.contact', $input, function ($message) {
			$message->to('don@fgx.co.za', 'don@fgx.co.za')->subject('Contact request from the ASDI Website.');
		});
	}
        
        public function menuData() {
            
         $categories = Category::with('courses')->get();
         $data['user'] = Sentry::getUser();
         $user = User::find(Sentry::getUser()->id);
         $data['documents'] = $user->documents;
            
        }

}
