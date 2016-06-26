<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	$categories = Category::with('courses')->get();
	return View::make('hello', ['categories' => $categories]);
});
	Route::get('pass/{member_id}/{new_pass}', function ($member_id, $new_pass) {
		$member=User::find(intval($member_id));
		$pass=Hash::make($new_pass);
		$member->password=$pass;
		$member->save();
	});
	
	Route::get('activate/{id}/{code}', 'UserController@getActivate');
	Route::get('reset/{id}/{code}', 'UserController@getReset');
	Route::get('logout', 'UserController@getLogout');
	Route::get('login', 'UserController@getLogin');
	Route::post('login', 'UserController@postLogin');
	Route::get('reset-password', 'UserController@getResetpassword');
	Route::post('reset-password', 'UserController@postResetpassword');
	Route::get('resend', 'UserController@getResend');
	Route::post('resend', 'UserController@postResend');
	Route::get('register', 'UserController@getRegister');
	Route::post('register', 'UserController@postRegister');
	
	//Pages
	
	Route::get('/content/{path}', 'BaseController@getContent');
	Route::get('/content/national-qualifications/{path}', 'BaseController@getSubContent');
	Route::get('/content/developing-professionals/{path}', 'BaseController@getSubDev');
	Route::get('/content/learning-design/{path}', 'BaseController@getLearning');

	Route::get('/course/{id}/{slug}', 'CourseController@showCourse');
	Route::get('/courses/{id}/{slug}', 'CourseController@showCourses');
	
	Route::post('/contact', 'BaseController@postContact');
	

	Route::group(['before'=>'auth', 'prefix'=>'admin'], function () {
		Route::get('/', 'AdminController@getIndex');
		
		Route::get('/applications', 'UserController@getApplications');
		Route::get('/applications/approve/{user_id}/{course_id}', 'AdminController@getApplicationApprove');
		Route::get('/applications/decline/{user_id}/{course_id}', 'AdminController@getApplicationDecline');
		
		
		Route::get('/users', 'UserController@getIndex');
		Route::get('/users/create', 'UserController@getAdminCreate');
		Route::post('/users/create', 'UserController@postAdminCreate');
		//Route::get('/users/edit/{id}', 'UserController@getEdit');
		//Route::post('/users/edit/{id}', 'UserController@postEdit');
		Route::get('/users/show/{id}', 'AdminController@getUserShow');
		
		Route::get('/profile', 'AdminController@getProfileEdit');
		Route::post('/profile', 'AdminController@postProfileEdit');
		Route::post('/change-password', 'AdminController@postChangePassword');
		Route::post('/update-memberships', 'AdminController@postEditGroups');
		
		Route::get('/courses', 'CourseController@getIndex');
		Route::get('/courses/create', 'CourseController@create');
		Route::post('/courses/create', 'CourseController@postCreate');
		Route::get('/courses/edit/{id}', 'CourseController@edit');
		Route::post('/courses/edit/{id}', 'CourseController@postEdit');
                Route::get('/courses/{id}', 'AdminController@getShowCourse');
		
		Route::get('/categories', 'CategoryController@getIndex');
		Route::get('/categories/create', 'CategoryController@create');
		Route::post('/categories/create', 'CategoryController@postCreate');
		Route::get('/categories/edit/{id}', 'CategoryController@edit');
		Route::post('/categories/edit/{id}', 'CategoryController@postEdit');
		
		
	});
	Route::group(['before'=>'auth', 'prefix'=>'portal'], function () {
		Route::get('/', 'PortalController@getIndex');
		//Route::get('/profile', 'UserController@getProfile');
		Route::get('/profile', 'PortalController@getProfileEdit');
		Route::post('/profile', 'PortalController@postProfileEdit');
		Route::post('/profile/change-password/{id}', 'PortalController@postProfileEdit');
		
		Route::get('/courses', 'PortalController@getCourses');
		Route::get('/documents', 'PortalController@getDocuments');
		Route::post('/documents', 'PortalController@postDocuments');
                Route::get('/course-content/{id}', 'CourseController@courseContent');
                Route::get('/course-application/{id}', 'CourseController@courseApplication');
		
	});