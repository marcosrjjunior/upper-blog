<?php

class AuthorController extends \BaseController {
    
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index()
    {
        // get all the authors
	  	$authors = Author::all();
        
        // load the view and pass the authors
        return View::make('authors.index')->with('authors', $authors);
    }
    
    
    /**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
    public function create()
    {
        // load the create form (app/views/authors/create.blade.php)
        return View::make('authors.create');
    }
    
    
    /**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
    public function store()
    {
        // Validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name' => 'required'
        );
        
        $validator = Validator::make(Input::all(), $rules);
        
        // process the login
        if ($validator->fails()) {
            return Redirect::to('authors/create')->withErrors($validator);
        } else {
            // store
            $author = new Author;
            $author->name = Input::get('name');
            $author->save();
            
            // redirect
            Session::flash('message', 'Successfully created Author!');
            return Redirect::to('authors');
        }
    }
    
    
    /**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function show($id)
    {
        
    }
    
    
    /**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function edit($id)
    {
            // get the author
	        $author = Author::find($id);
 
		    // show the edit form and pass the author 
	   	  return View::make('authors.edit')->with('author', $author);
    }
    
    
    /**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function update($id)
    {
      // validate
      // read more on validation at http://laravel.com/docs/validation
      $rules = array(
        'name'       => 'required',
      );
      
      $validator = Validator::make(Input::all(), $rules);

      // process the login
      if ($validator->fails()) {
            return Redirect::to('authors/'. $id .'/edit')->withErrors($validator);
      } else {
        // store
        $author = Author::find($id);
        $author->name = Input::get('name');
        $author->save();

        // redirect
        Session::flash('message', 'Successfully updated author!');
        return Redirect::to('authors');
      }
    }
    
    
    /**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function destroy($id)
    {
       // delete
		 $author = Author::find($id);
	  	 $author->delete();

      // redirect
      Session::flash('message', 'Successfully deleted the author!');
      return Redirect::to('authors');
    }
}
