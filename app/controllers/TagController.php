<?php

class TagController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		 // get all the tags
	  	$tags = Tag::all();
        
        // load the view and pass the tags
        return View::make('tags.index')->with('tags', $tags);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		 return View::make('tags.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
            'name' => 'required'
        );
        
        $validator = Validator::make(Input::all(), $rules);
        
        // process the login
        if ($validator->fails()) {
            return Redirect::to('tags/create')->withErrors($validator);
        } else {
            // store
            $tag = new Tag;
            $tag->name = Input::get('name');
            $tag->save();
            
            // redirect
            Session::flash('message', 'Successfully created Tag!');
            return Redirect::to('tags');
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
		//
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
        $tag = Tag::find($id);

        // show the edit form and pass the author 
        return View::make('tags.edit')->with('tag', $tag);
    }


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
            'name'       => 'required',
       );
      
      $validator = Validator::make(Input::all(), $rules);

      // process the login
      if ($validator->fails()) {
            return Redirect::to('tags/'. $id .'/edit')->withErrors($validator);
      } else {
        // store
        $tag = Tag::find($id);
        $tag->name = Input::get('name');
        $tag->save();

        // redirect
        Session::flash('message', 'Successfully updated tag!');
        return Redirect::to('tags');
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
        $tag = Tag::find($id);
        $tag->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the tag!');
        return Redirect::to('tags');
    }
}
