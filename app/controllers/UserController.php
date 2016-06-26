<?php

class UserController extends BaseController {
	/**
	 * Instantiate a new UserController
	 */
	public function __construct()
	{
//		//Check CSRF token on POST
//		$this->beforeFilter('csrf', array('on' => 'post'));
//		
//		//Enable the throttler.  [I am not sure about this...]
//		// Get the Throttle Provider
		$throttleProvider=Sentry::getThrottleProvider();
//
//		// Enable the Throttling Feature
		$throttleProvider->enable();
		
		$countries = Country::orderBy('name')->lists('name','id');
		$user=Sentry::getUser();
		View::share([
			'user'=> $user,
			'countries' => $countries
		]);
	}
	
	/**
	 * Display a listing of the resource.
	 * @return Response
	 */
	public function getIndex()
	{
		
		$data['admin_users']= Sentry::findAllUsersWithAccess(['admin']);
		$data['users']= Sentry::findAllUsersWithAccess(['users']);
		
		$users = User::all();
		$countArray = [];
		foreach($users as $item)
		{
			$countArray[$item->id] = $item->courses->count();
		}
		$data['countArray'] = $countArray;
		
		return View::make('users.index',$data);
	}
	
	public function getApplications()
	{
		$users = User::has('courses')->get();
		$temp = [];
		foreach($users as $user)
		{
			foreach($user->courses as $course) {
				if(!$course->pivot->approved)
				{
					$new = [];
					$new['user'] = $user->toArray();
					$new['course'] = $course->toArray();
					
					$temp[] = $new;
				}
			};
		}
	
		$data['users'] = $temp;
		return View::make('users.applications', $data);
	}
	
	/**
	 * Register a new user.
	 * @return Response
	 */
	public function getRegister()
	{
		// Show the register form
		$courses = [
			'0' => 'Please Select...',
            '1' => 'Certificate IV Qualifications',
			'2' => 'Certificate IV in Business',
			'3' => 'Certificate IV in Business Administration',
			'4' => 'Certificate IV in Frontline Management',
			'5' => 'Certificate IV in Human Resources',
			'6' => 'Certificate IV in Marketing',
			'7' => 'Certificate IV in Project Management',
			'8' => 'Certificate IV in Small Business Management',
			'9' => 'Certificate IV in Training and Assessment',
			'10' => 'Diploma Qualifications',
			'11' => 'Diploma of Business',
			'12' => 'Diploma of Management',
			'13' => 'Diploma of Project Management',
			'14' => 'Advanced Diploma Qualifications',
			'15' => 'Advanced Diploma of Business',
			'16' => 'Advanced Diploma of Management',
			'17' => 'Customised Courses',
			'18' => 'Certificate in New Venture Creation'
		];
		return View::make('users.register', ['courses' =>$courses]);
	}
	
	public function postRegister()
	{
		// Gather Sanitized Input
		$input=array(
			'first_name'           =>Input::get('first_name'),
			'last_name'            =>Input::get('last_name'),
			'email'                =>Input::get('email'),
			'password'             =>Input::get('password'),
			'password_confirmation'=>Input::get('password_confirmation')
		);
		// Set Validation Rules
		$rules=array(
			'first_name'           =>'required|alpha',
			'last_name'            =>'required|alpha',
			'email'                =>'required|min:4|max:32|email',
			'password'             =>'required|min:6|alpha_dash|confirmed',
			'password_confirmation'=>'required'
		);
		//Run input validation
		$v=Validator::make($input, $rules);
		if($v->fails()) {
			// Validation has failed
			return Redirect::to('/register')->withErrors($v)->withInput();
		}
		else {
			try {
				//Attempt to register the user. 
				$user=Sentry::register(array(
					'first_name'=>$input['first_name'], 
					'last_name'=>$input['last_name'], 
					'email'=>$input['email'], 
					'password'=>$input['password']
				));
				//Get the activation code & prep data for email
				$data['activationCode']=$user->GetActivationCode();
				$data['email']=$input['email'];
				$data['userId']=$user->getId();
				
				$userGroup = Sentry::findGroupByName('users');
				
				// Assign the group to the user
				if($user->addGroup($userGroup)) {
					//send email with link to activate.
					Mail::send('emails.auth.welcome', $data, function ($m) use ($data) {
						$m->to($data['email'])->subject('Welcome to ASDI');
					});
					
					//success!
					Session::flash('success', 'Your profile has been created. Check your email for the confirmation link.');
				} else {
					Session::flash('error', 'Your profile has not been created. Please try again.');
				}
				
				return Redirect::to('/');
			}
			catch (Cartalyst\Sentry\Users\LoginRequiredException $e) {
				Session::flash('error', 'Login field required.');
				
				return Redirect::to('/register')->withErrors($v)->withInput();
			}
			catch (Cartalyst\Sentry\Users\UserExistsException $e) {
				Session::flash('error', 'User already exists.');
				
				return Redirect::to('/register')->withErrors($v)->withInput();
			}
		}
	}
	
	public function getAdminCreate()
	{
		
		return View::make('users.create_admin');
	}
	
	public function postAdminCreate()
	{
		// Gather Sanitized Input
		$input=Input::except(['_token']);
		// Set Validation Rules
		$rules=array(
			'first_name'           =>'required|alpha',
			'last_name'            =>'required|alpha',
			'email'                =>'required|min:4|max:32|email|unique:users',
			'gender'                =>'required',
			'birth_date'                =>'required|date',
			'password'             =>'required|min:6|alpha_dash|confirmed',
			'password_confirmation'=>'required'
		);
		//Run input validation
		$v=Validator::make($input, $rules);
		if($v->fails()) {
			// Validation has failed
			return Redirect::to('/admin/users/create')->withErrors($v)->withInput();
		}
		else {
			try {
				//Attempt to register the user. 
				$user=Sentry::register(array('first_name'=>$input['first_name'], 'last_name'=>$input['last_name'], 'email'=>$input['email'], 'password'=>$input['password'], 'gender'=>$input['gender'],'birth_date'=>$input['birth_date']));
				//Get the activation code & prep data for email
				$data['activationCode']=$user->GetActivationCode();
				$data['email']=$input['email'];
				$data['userId']=$user->getId();
				
				$adminGroup = Sentry::findGroupByName('Admins');
				if($user->addGroup($adminGroup)) {
					//send email with link to activate.
					Mail::send('emails.auth.welcome', $data, function ($m) use ($data) {
						$m->to($data['email'])->subject('Welcome to ASDI');
					});
				}
				
				
				
				//success!
				Session::flash('success', 'The profile has been created. An email has been sent with the confirmation link.');
				
				return Redirect::to('/admin/users');
			}
			catch (Cartalyst\Sentry\Users\UserExistsException $e) {
				Session::flash('error', 'User already exists.');
				
				return Redirect::to('/admin/users/create')->withErrors($v)->withInput();
			}
		}
	}
	
	/**
	 * Activate a new User
	 */
	public function getActivate($userId=null, $activationCode=null)
	{
		try {
			// Find the user
			$user=Sentry::findUserById($userId);
			// Attempt user activation
			if($user->attemptActivation($activationCode)) {
				// User activation passed
				//Add this person to the user group. 
				$userGroup=Sentry::getGroupProvider()->findById(1);
				$user->addGroup($userGroup);
				Session::flash('success', 'Your account has been activated. <a href="/login">Click here</a> to log in.');
				
				return Redirect::to('/');
			}
			else {
				// User activation failed
				Session::flash('error', 'There was a problem activating this account. Please contact the system administrator.');
				
				return Redirect::to('/');
			}
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
			Session::flash('error', 'User does not exist.');
			
			return Redirect::to('/');
		}
		catch (Cartalyst\SEntry\Users\UserAlreadyActivatedException $e) {
			Session::flash('error', 'You have already activated this account.');
			
			return Redirect::to('/');
		}
	}
	
	/**
	 * Login
	 * @return Response
	 */
	public function getLogin()
	{
		// Show the register form
		return View::make('users.login');
	}
	
	public function postLogin()
	{
		// Gather Sanitized Input
		$input=array(
			'email'     =>Input::get('email'),
			'password'  =>Input::get('password'),
			'rememberMe'=>Input::get('rememberMe')
		);
		// Set Validation Rules
		$rules=array(
			'email'   =>'required|min:4|max:32|email',
			'password'=>'required|min:6'
		);
		//Run input validation
		$v=Validator::make($input, $rules);
		if($v->fails()) {
			// Validation has failed
			return Redirect::to('/login')->withErrors($v)->withInput();
		}
		else {
			try {
				//Check for suspension or banned status
				//$user = Sentry::findUserByLogin($input['email']);
				$throttle=Sentry::findThrottlerByUserLogin($input['email']);
				$throttle->check();
				// Set login credentials
				$credentials=array(
					'email'   =>$input['email'],
					'password'=>$input['password']
				);
				// Try to authenticate the user
				$user=Sentry::authenticate($credentials, true);
				
				if($user->hasAccess('admin')) {
					return Redirect::to('/admin');
				}
				else {
					$redirect = Session::get('loginRedirect', '/portal');
					Session::forget('loginRedirect');
					
					return Redirect::to($redirect);
				}
			}
			catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
				// Sometimes a user is found, however hashed credentials do
				// not match. Therefore a user technically doesn't exist
				// by those credentials. Check the error message returned
				// for more information.
				Session::flash('error', 'Invalid username or password.');
				
				return Redirect::to('/login')->withErrors($v)->withInput();
			}
			catch (Cartalyst\Sentry\Users\UserNotActivatedException $e) {
				echo 'User not activated.';
				Session::flash('error', 'You have not yet activated this account. <a href="/users/resend">Resend activation?</a>');
				
				return Redirect::to('/login')->withErrors($v)->withInput();
			}
				// The following is only required if throttle is enabled
			catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e) {
				$time=$throttle->getSuspensionTime();
				Session::flash('error', "Your account has been suspended for $time minutes.");
				
				return Redirect::to('/login')->withErrors($v)->withInput();
			}
			catch (Cartalyst\Sentry\Throttling\UserBannedException $e) {
				Session::flash('error', 'You have been banned.');
				
				return Redirect::to('/login')->withErrors($v)->withInput();
			}
			
			
		}
	}
	
	/**
	 * Logout
	 */
	public function getLogout()
	{
		Sentry::logout();
		
		return Redirect::to('/');
	}
	
	/**
	 * Forgot Password / Reset
	 */
	public function getResetpassword()
	{
		// Show the change password
		return View::make('users.reset');
	}
	
	public function postResetpassword()
	{
		// Gather Sanitized Input
		$input=array(
			'email'=>Input::get('email')
		);
		// Set Validation Rules
		$rules=array(
			'email'=>'required|min:4|max:32|email'
		);
		//Run input validation
		$v=Validator::make($input, $rules);
		if($v->fails()) {
			// Validation has failed
			return Redirect::to('/reset-password')->withErrors($v)->withInput();
		}
		else {
			try {
				$user = Sentry::findUserByCredentials(['email' => $input['email']]);
				
				$data['resetCode']=$user->getResetPasswordCode();
				$data['userId']=$user->getId();
				$data['email']=$input['email'];
				
				// Email the reset code to the user
				Mail::send('emails.auth.reset', $data, function ($m) use ($data) {
					$m->to($data['email'])->subject('Password Reset Confirmation | Australian Skills Development Institute');
				});
				Session::flash('success', 'Check your email for password reset information.');
				
				return Redirect::to('/');
			}
			catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
				Session::flash('error', 'That Email Address does not exist on our system.');
				
				return Redirect::to('/reset-password');
			}
		}
	}
	
	
	
	/**
	 * Reset User's password
	 */
	public function getReset($userId=null, $resetCode=null)
	{
		try {
			// Find the user
			$user=Sentry::findUserById($userId);
			$newPassword=$this->_generatePassword(8, 8);
			// Attempt to reset the user password
			if($user->attemptResetPassword($resetCode, $newPassword)) {
				// Password reset passed
				// 
				// Email the reset code to the user
				//Prepare New Password body
				$data['newPassword']=$newPassword;
				$data['email']=$user->getLogin();
				Mail::send('emails.auth.newpassword', $data, function ($m) use ($data) {
					$m->to($data['email'])->subject('New Password Information | Australian Skills Development Institute');
				});
				Session::flash('success', 'Your password has been changed. Check your email for the new password.');
				
				return Redirect::to('/');
			}
			else {
				// Password reset failed
				Session::flash('error', 'There was a problem.  Please contact the system administrator.');
				
				return Redirect::to('/reset-password');
			}
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
			echo 'User does not exist.';
		}
	}
	
	public function getClearreset($userId=null)
	{
		try {
			// Find the user
			$user=Sentry::findUserById($userId);
			// Clear the password reset code
			$user->clearResetPassword();
			
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
			echo 'User does not exist';
		}
	}
	
	/**
	 *  Edit / Update User Profile
	 */
	public function getEdit($id)
	{
		try {
			//Get the current user's id.
			//Sentry::check();
			$currentUser=Sentry::getUser();
			//Do they have admin access?
			if($currentUser->hasAccess('admin')) {
				$data['myUser']=Sentry::findUserById($id);
				$data['userGroups']=$data['myUser']->getGroups();
				$data['allGroups']=Sentry::findAllGroups();
				
				return View::make('users.edit')->with($data);
			}
			elseif($currentUser->getId() == $id) {
				//They are not an admin, but they are viewing their own profile.
				$data['myUser']=Sentry::findUserById($id);
				$data['userGroups']=$data['myUser']->getGroups();
				
				return View::make('users.edit')->with($data);
			}
			else {
				Session::flash('error', 'You don\'t have access to that user.');
				
				return Redirect::to('/');
			}
		}
		catch (Cartalyst\Sentry\UserNotFoundException $e) {
			Session::flash('error', 'There was a problem accessing your account.');
			
			return Redirect::to('/');
		}
	}
	
	public function postEdit($id)
	{
		// Gather Sanitized Input
		$input=Input::except(['_token']);
		// Set Validation Rules
		$rules=array(
			'first_name'=>'required',
			'last_name' =>'required',
		);
		//Run input validation
		$v=Validator::make($input, $rules);
		if($v->fails()) {
			// Validation has failed
			return Redirect::to('/admin/users/edit/' . $id)->withErrors($v)->withInput();
		}
		else {
			try {
				//Get the current user's id.
				$currentUser=Sentry::getUser();
				//Do they have admin access?
				if($currentUser->hasAccess('admin') || $currentUser->getId() == $id) {
					// Either they are an admin, or they are changing their own password. 
					// Find the user using the user id
					$user=Sentry::findUserById($id);
					// Update the user details
					$user->first_name=$input['first_name'];
					$user->last_name=$input['last_name'];
					// Update the user
					if($user->save()) {
						
						// User information was updated
						Session::flash('success', 'Profile updated.');
						
						return Redirect::to('/admin/users');
					}
					else {
						// User information was not updated
						Session::flash('error', 'Profile could not be updated.');
						
						return Redirect::to('/admin/users/edit/' . $id);
					}
				}
				else {
					Session::flash('error', 'You don\'t have access to that user.');
					
					return Redirect::to('/');
				}
			}
			catch (Cartalyst\Sentry\Users\UserExistsException $e) {
				Session::flash('error', 'User already exists.');
				
				return Redirect::to('/admin/users');
			}
			catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
				Session::flash('error', 'User was not found.');
				
				return Redirect::to('/admin/users');
			}
		}
	}
	

	
	/**
	 * Process changepassword form.
	 *
	 * @param  [type] $id [description]
	 *
	 * @return [type]     [description]
	 */
	public function postChangepassword($id)
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
			return Redirect::to('/portal/profile/edit/' . $id)->withErrors($v)->withInput();
		}
		else {
			try {
				//Get the current user's id.
				Sentry::check();
				$user=Sentry::getUser();
				//Do they have admin access?
				if($user->getId() == $id) {
					
	
					if($user->checkPassword($input['oldPassword'])) {
						//The oldPassword matches the current password in the DB. Proceed.
						$code = $user->getResetPasswordCode();
						if($user->attemptResetPassword($code, $input['newPassword'])) {
							// Password reset passed
							Session::flash('success', 'Your password has been changed.');
							
							return Redirect::to('/portal/profile/' . $id);
						}
						else {
							// User not saved
							Session::flash('error', 'Your password could not be changed.');
							
							return Redirect::to('/portal/profile/edit/' . $id);
						}
					}
					else {
						// The oldPassword did not match the password in the database. Abort. 
						Session::flash('error', 'You did not provide the correct password.');
						
						return Redirect::to('/portal/profile/edit/' . $id);
					}
				}
				else {
					Session::flash('error', 'You don\'t have access to that user.');
					
					return Redirect::to('/');
				}
			}
			
			catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
				Session::flash('error', 'User was not found.');
				
				return Redirect::to('/portal/profile/' . $id);
			}
		}
	}
	
	/**
	 * Process changes to user's group memberships
	 *
	 * @param  int $id The affected user's id
	 *
	 * @return [type]     [description]
	 */
	public function postUpdatememberships($id)
	{
		try {
			//Get the current user's id.
			//Do they have admin access?
			if(Sentry::getUser()->hasAccess('admin')) {
				$user=Sentry::findUserById($id);
				$allGroups=Sentry::findAllGroups();
				$permissions=Input::get('permissions');
				$statusMessage='';
				foreach($allGroups as $group) {
					if(isset($permissions[$group->id])) {
						//The user should be added to this group
						if($user->addGroup($group)) {
							$statusMessage.="Added to " . $group->name . "<br />";
						}
						else {
							$statusMessage.="Could not be added to " . $group->name . "<br />";
						}
					}
					else {
						// The user should be removed from this group
						if($user->removeGroup($group)) {
							$statusMessage.="Removed from " . $group->name . "<br />";
						}
						else {
							$statusMessage.="Could not be removed from " . $group->name . "<br />";
						}
					}
				}
				
				
				Session::flash('info', $statusMessage);
				
				return Redirect::to('/admin/users');
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
		catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e) {
			Session::flash('error', 'Trying to access unidentified Groups.');
			
			return Redirect::to('/admin/users/edit/' . $id);
		}
	}
	
	/**
	 * Prepare the "Ban User" form
	 *
	 * @param  int $id The user id
	 *
	 * @return View     The "Ban Form" view
	 */
	public function getSuspend($id)
	{
		try {
			//Get the current user's id.
			$currentUser=Sentry::getUser();
			//Do they have admin access?
			if($currentUser->hasAccess('admin')) {
				$data['myUser']=Sentry::findUserById($id);
				
				return View::make('users.suspend')->with($data);
			}
			else {
				Session::flash('error', 'You are not allowed to do that.');
				
				return Redirect::to('/');
			}
		}
		catch (Cartalyst\Sentry\UserNotFoundException $e) {
			Session::flash('error', 'There was a problem accessing that user\s account.');
			
			return Redirect::to('/admin/users');
		}
	}
	
	public function postSuspend($id)
	{
		// Gather Sanitized Input
		$input=array(
			'suspendTime'=>Input::get('suspendTime')
		);
		// Set Validation Rules
		$rules=array(
			'suspendTime'=>'required|numeric'
		);
		//Run input validation
		$v=Validator::make($input, $rules);
		if($v->fails()) {
			// Validation has failed
			return Redirect::to('/admin/users/suspend/' . $id)->withErrors($v)->withInput();
		}
		else {
			try {
				//Prep for suspension
				$throttle=Sentry::getThrottleProvider()->findByUserId($id);
				//Set suspension time
				$throttle->setSuspensionTime($input['suspendTime']);
				// Suspend the user
				$throttle->suspend();
				
				
				//Done.  Return to users page.
				Session::flash('success', "User has been suspended for " . $input['suspendTime'] . " minutes.");
				
				return Redirect::to('/admin/users');
			}
			catch (Cartalyst\Sentry\UserNotFoundException $e) {
				Session::flash('error', 'There was a problem accessing that user\s account.');
				
				return Redirect::to('/admin/users');
			}
		}
	}
	
	public function getDelete($id)
	{
		try {
			// Find the user using the user id
			$user=Sentry::findUserById($id);
			// Delete the user
			if($user->delete()) {
				
				
				// User was successfully deleted
				Session::flash('success', 'That user has been deleted.');
				
				return Redirect::to('/admin/users');
			}
			else {
				// There was a problem deleting the user
				Session::flash('error', 'There was a problem deleting that user.');
				
				return Redirect::to('/admin/users');
			}
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
			Session::flash('error', 'There was a problem accessing that user\s account.');
			
			return Redirect::to('/admin/users');
		}
	}
	
	/**
	 * Generate password - helper function
	 * From http://www.phpscribble.com/i4xzZu/Generate-random-passwords-of-given-length-and-strength
	 
	 */
	private function _generatePassword($length=9, $strength=4)
	{
		$vowels='aeiouy';
		$consonants='bcdfghjklmnpqrstvwxz';
		if($strength & 1) {
			$consonants.='BCDFGHJKLMNPQRSTVWXZ';
		}
		if($strength & 2) {
			$vowels.="AEIOUY";
		}
		if($strength & 4) {
			$consonants.='23456789';
		}
		if($strength & 8) {
			$consonants.='@#$%';
		}
		$password='';
		$alt=time()%2;
		for($i=0; $i < $length; $i++) {
			if($alt == 1) {
				$password.=$consonants[(rand()%strlen($consonants))];
				$alt=0;
			}
			else {
				$password.=$vowels[(rand()%strlen($vowels))];
				$alt=1;
			}
		}
		
		return $password;
	}

}
