<?php

class CourseController extends Controller {

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
   
    public function getIndex() {
        
        $categories = Category::with('courses')->get();
        return View::make('courses.index', ['course_categories' => $categories]);
    }

    public function courseContent($id) {
        $course = Course::find($id);   
        $categories = Category::with('courses')->get();       
        $data['user'] = Sentry::getUser();
        $user = User::find(Sentry::getUser()->id);
        $data = $user->documents;
        
        
        return View::make('portal.courses.content',['user' => $user,'categories'=> $categories,'course'=>$course,'documents'=>$data]);
    }
    //show courses in a category in the front-end
    public function showCourses($id) {
        
        $courses = $course = Category::find($id);

        return View::make('courses.frontend-courses',['courses'=>$courses]);
    }
    //show single course in the front-end
    public function showCourse($id) {
        $course = Course::find($id);      
        
        return View::make('courses.showcourse',['course'=>$course]);
    }
    
    public function courseApplication($id) {
        $course = Course::find($id);   
        $categories = Category::with('courses')->get();       
        $data['user'] = Sentry::getUser();
        $user = User::find(Sentry::getUser()->id);
        $data = $user->documents;
        
      return View::make('portal.courses.apply',['user' => $user,'categories'=> $categories,'course'=>$course,'documents'=>$data]);  
    }

    public function create() {
        return View::make('courses.create');
    }

    public function postCreate() {
        $input = Input::except(['_token']);

        $validator = Validator::make($input, Course::$rules);

        if ($validator->fails()) {
            Session::flash('error', 'Please check your input!');
            return Redirect::to('/admin/courses/create')->withErrors($validator)->withInput();
        } else {
            if ($course = Course::create($input)) {
                Session::flash('success', 'Course created!');
                return Redirect::to('/admin/courses');
            } else {
                Session::flash('error', 'Course could not be created!');
                return Redirect::to('/admin/courses/create')->withInput();
            }
        }
    }

    public function edit($id) {
        $course = Course::find($id);
        return View::make('courses.edit', ['course' => $course]);
    }

    public function postEdit($id) {
        $input = Input::except(['_token']);

        $validator = Validator::make($input, Course::$rules);

        if ($validator->fails()) {
            Session::flash('error', 'Please check your input!');

            return Redirect::to('/admin/courses/edit/' . $id)->withErrors($validator)->withInput();
        } else {
            $course = $this->courses->find($id);
            if ($course->update($input)) {
                Session::flash('success', 'Course updated!');

                return Redirect::to('/admin/courses');
            } else {
                Session::flash('error', 'Course could not be updated!');

                return Redirect::to('/admin/courses/edit/' . $id)->withInput();
            }
        }
    }

}
