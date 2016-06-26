<?php

class PortalController extends BaseController {

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
         $data['user'] = Sentry::getUser();
         $user = User::find(Sentry::getUser()->id);
         $data['documents'] = $user->documents;
        return View::make('portal.dashboard',['categories'=> $categories],$data);
    }

    public function getProfileEdit() {
        try {

            //They are not an admin, but they are viewing their own profile.
            $data['user'] = Sentry::getUser();
            //$data['userGroups'] = $data['user']->getGroups();

            return View::make('portal.profile')->with($data);
        } catch (Cartalyst\Sentry\UserNotFoundException $e) {
            Session::flash('error', 'There was a problem accessing your account.');

            return Redirect::to('/');
        }
    }

    public function postProfileEdit() {
        // Gather Sanitized Input
        $input = Input::except(['_token']);
        // Set Validation Rules
        $rules = array(
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
        );
        //Run input validation
        $v = Validator::make($input, $rules);
        if ($v->fails()) {
            // Validation has failed
            return Redirect::to('/portal/profile')->withErrors($v)->withInput();
        } else {
            try {
                $user = User::find(Sentry::getUser()->id);

                // Update the user
                if ($user->update($input)) {

                    // User information was updated
                    Session::flash('success', 'Profile updated.');

                    return Redirect::to('/portal/profile');
                } else {
                    // User information was not updated
                    Session::flash('error', 'Profile was not updated.');

                    return Redirect::to('/portal/profile/')->withInput();
                }
            } catch (Cartalyst\Sentry\Users\LoginRequiredException $e) {
                Session::flash('error', 'You are not logged in!');

                return Redirect::to('/login');
            } catch (Cartalyst\Sentry\Users\UserNotActivatedException $e) {
                Session::flash('error', 'User not activated');

                return Redirect::to('/login');
            } catch (Cartalyst\Sentry\Throttling\UserBannedException $e) {
                Session::flash('error', 'User is banned!');

                return Redirect::to('/login');
            }
        }
    }

    public function getCourses() {

        $user = User::find(Sentry::getUser()->id);
        $data['courses'] = $user->courses;

        return View::make('portal.courses.index', $data);
    }

    public function getDocuments() {

        $user = User::find(Sentry::getUser()->id);
        $data['documents'] = $user->documents;

        return View::make('portal.documents.index', $data);
    }

    public function postDocuments() {
        $input = Input::all();
        $validation = Validator::make($input, Document::$rules);

        if ($validation->passes()) {

            $user_id = Sentry::getUser()->id;
            $upload = UploadHelper::uploadFile('fileUpload', $user_id);

            $doc = new Document();
            $doc->name = Input::get('name');
            $doc->filename = $upload['name'];
            $path_id = $user_id;
            $doc->path = 'uploads/' . $path_id;
            $doc->size = $upload['size'];
            $doc->extension = $upload['extension'];
            $doc->mimetype = $upload['mime'];
            $doc->user_id = $user_id;
            $doc->save();

            Session::flash('success', 'Your document was uploaded!');
            return Redirect::to('/portal/documents');
        } else {
            Session::flash('error', 'Your document was not uploaded!');
            return View::make('portal.documents.index')->withErrors($validation);
        }
    }

}
