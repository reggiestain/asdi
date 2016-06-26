<?php

class AdminController extends BaseController {
	
	public function __construct()
	{
		
		$countries = Country::orderBy('name')->lists('name', 'id');
		
		View::share([
			'countries' => $countries
		]);
	}

	public function getIndex()
	{
		return View::make('admins.dashboard');
	}
	
	public function postChangePassword()
	{
		// Gather Sanitized Input
		$input=array(
			'oldPassword'             =>Input::get('oldPassword'),
			'newPassword'             =>Input::get('newPassword'),
			'newPassword_confirmation'=>Input::get('newPassword_confirmation')
		);
		// Set Validation Rules
		$rules=array(
			'oldPassword'             =>'required|min:6',
			'newPassword'             =>'required|min:6|confirmed',
			'newPassword_confirmation'=>'required'
		);
		//Run input validation
		$v=Validator::make($input, $rules);
		if($v->fails()) {
			// Validation has failed
			return Redirect::to('/admin/profile')->withErrors($v)->withInput();
		}
		else {
			try {
				//Get the current user's id.
				$user =Sentry::getUser();
				//dd($user);
					if($user->checkPassword($input['oldPassword'])) {
						
						$resetCode=$user->getResetPasswordCode();
						
						if($user->attemptResetPassword($resetCode, $input['newPassword'])) {
							// Password reset passed
							Session::flash('success', 'Your password has been changed. Please log out.');
							
							return Redirect::to('/admin/profile');
						}
						else {
							// User not saved
							Session::flash('error', 'Your password could not be changed.');
							
							return Redirect::to('/admin/profile');
						}
					}
					else {
						// The oldPassword did not match the password in the database. Abort. 
						Session::flash('error', 'You did not provide the correct password.');
						
						return Redirect::to('/admin/profile');
					}
				
			}
			catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
				Session::flash('error', 'User was not found.');
				
				return Redirect::to('/admin/profile');
			}
		}
	}
	
	/**
	 *  Edit / Update User Profile
	 */
	public function getProfileEdit()
	{
		try {
			//Get the current user's id.
			//Sentry::check();
			$currentUser=Sentry::getUser();
			//Do they have admin access?
			if($currentUser->hasAccess('admin')) {
				$data['myUser']=$currentUser;
				$data['userGroups']=$currentUser->getGroups();
				$data['allGroups']=Sentry::findAllGroups();
				
				return View::make('admins.profile')->with($data);
			}
		}
		catch (Cartalyst\Sentry\UserNotFoundException $e) {
			Session::flash('error', 'There was a problem accessing your account.');
			
			return Redirect::to('/');
		}
	}
	
	public function postProfileEdit()
	{
		// Gather Sanitized Input
		$input=array(
			'first_name'=>Input::get('first_name'),
			'last_name' =>Input::get('last_name')
		);
		// Set Validation Rules
		$rules=array(
			'first_name'=>'required',
			'last_name' =>'required',
		);
		//Run input validation
		$v=Validator::make($input, $rules);
		if($v->fails()) {
			// Validation has failed
			return Redirect::to('/admin/profile')->withErrors($v)->withInput();
		}
		else {
			try {
				//Get the current user's id.
				$user=Sentry::getUser();
				//Do they have admin access?
				if($user->hasAccess('admin')) {
					// Either they are an admin, or they are changing their own password. 
					
					// Update the user details
					$user->first_name=$input['first_name'];
					$user->last_name=$input['last_name'];
					// Update the user
					if($user->save()) {
						// User information was updated
						Session::flash('success', 'Profile updated.');
						
						return Redirect::to('/admin/profile');
					}
					else {
						// User information was not updated
						Session::flash('error', 'Profile could not be updated.');
						
						return Redirect::to('/admin/profile/');
					}
				}
				else {
					Session::flash('error', 'You don\'t have access to that user.');
					
					return Redirect::to('/');
				}
			}
			
			catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
				Session::flash('error', 'User was not found.');
				
				return Redirect::to('/admin/users');
			}
		}
	}
	
	public function getInvoiceIndex()
	{
		$invoices = Invoice::with('user','course')->paginate(20);
		return View::make('admins.invoices_list', ['invoices'=>$invoices]);
	}
	
	public function getShowCourse($id)
	{
		$data['course'] = Course::find($id);

		return View::make('courses.show', $data);
	}
	
	public function getUserShow($id)
	{
		$data['user'] = User::find($id);
		$data['applications'] = $data['user']->courses()->wherePivot('approved',false)->get();
	
		return View::make('users.show', $data);
	}
	
	public function getApplicationApprove($user_id, $course_id)
	{
		$result = User::find($user_id)->courses()->updateExistingPivot($course_id, ['approved' => 1]);
		
		if($result)
		{
			$data['user'] = User::find($user_id)->toArray();
			$data['course'] = Course::find($course_id)->toArray();
			Mail::send('emails.course_approved', $data, function ($m) use ($data) {
				$m->to($data['email'])->subject('ASDI Application Successful!');
			});
			
			Session::flash('success','Course Approved!');
			
		} else {
			Session::flash('error', 'Course Not Approved!');
		}
		
		return Redirect::to(URL::previous());
	}
	
	public function getApplicationDecline($user_id, $course_id)
	{
		if($user = User::find($user_id)->courses()->detatch($course_id)) {
			$data = $user->toArray();
			Mail::send('emails.course_declined', $data, function ($m) use ($data) {
				$m->to($data['email'])->subject('ASDI Application Unsuccessful!');
			});
			
			Session::flash('success', 'Course Declined!');
		}
		else {
			Session::flash('error', 'Course Not Declined!');
		}
		
		return Redirect::to(URL::previous());
	}
	
	
}
