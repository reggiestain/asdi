<?php

class CategoryController extends Controller {

    protected $categories;

    public function __construct() {
        $countries = Country::orderBy('name')->lists('name', 'id');
        
        
        View::share([
            'countries' => $countries
        ]);
    }
   
    public function getIndex() {
        
        $categories = Category::orderBy('name')->lists('name','id');
        return View::make('categories.index', ['categories' => $categories]);
    }

    public function create() {
        return View::make('categories.create');
    }

    public function postCreate() {
        $input = Input::except(['_token']);

        $validator = Validator::make($input, Category::$rules);

        if ($validator->fails()) {
            Session::flash('error', 'Please check your input!');
            return Redirect::to('/admin/categories/create')->withErrors($validator)->withInput();
        } else {
            if ($category = Category::create($input)) {
                Session::flash('success', 'Category created!');
                return Redirect::to('/admin/categories');
            } else {
                Session::flash('error', 'Category could not be created!');
                return Redirect::to('/admin/categories/create')->withInput();
            }
        }
    }

    public function edit($id) {
        $category = Category::find($id);
        return View::make('categories.edit', ['category' => $category]);
    }

    public function postEdit($id) {
        $input = Input::except(['_token']);

        $validator = Validator::make($input, Category::$rules);

        if ($validator->fails()) {
            Session::flash('error', 'Please check your input!');

            return Redirect::to('/admin/categories/edit/' . $id)->withErrors($validator)->withInput();
        } else {
            $category = Category::find($id);
            if ($category->update($input)) {
                Session::flash('success', 'Category updated!');

                return Redirect::to('/admin/categories');
            } else {
                Session::flash('error', 'Category could not be updated!');

                return Redirect::to('/admin/categories/edit/' . $id)->withInput();
            }
        }
    }

}
