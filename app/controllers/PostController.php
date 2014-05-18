<?php

class PostController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index()
    {
        // get all the posts
        $posts = Post::all();

        // load the view and pass the authors
        return View::make('posts.index')->with('posts', $posts);
    }


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
    public function create()
    {
        $authors = Author::lists('name', 'id');
        
        $tags = Tag::all();

        $postTags = [];
        
        // load the create form (app/views/posts/create.blade.php)
        return View::make('posts.create', compact('authors', 'tags', 'postTags'));
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
            'title'     => 'required|max:100',
            'content'   => 'required',
            'date'      => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('posts/create')->withErrors($validator);
        } else {
            // store
            $post = new Post;
            $post->title = Input::get('title');
            $post->slug = Input::get('slug');
            $post->img = Input::get('img');
            $post->content_short = Input::get('content_short');
            $post->content = Input::get('content');
            $post->date = Input::get('date');
            $post->author_id = Input::get('author_id');
            $post->save();

            foreach (Input::get('tag_id') as $tag) 
			{
				$post->tags()->attach($tag);
			}
            
            // Redirect
            Session::flash('message', 'Successfully created Post!');
            return Redirect::to('posts');
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
        // get the post
        $post = Post::find($id);

        $authors = Author::lists('name', 'id');
        
        $tags = Tag::All();
        
        //Get Tags
        if ($id)
        {
            $postTags = $post->tags->modelKeys();
        }

        // show the edit form and pass the post
        return View::make('posts.edit', compact('post', 'authors', 'tags', 'postTags'));
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
            'title'     => 'required|max:100',
            'content'   => 'required',
            'date'      => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('posts/'. $id .'/edit')->withErrors($validator);
        } else {
            // store
            $post = Post::find($id);
            $post->title = Input::get('title');
            $post->slug = Input::get('slug');
            $post->img = Input::get('img');
            $post->content_short = Input::get('content_short');
            $post->content = Input::get('content');
            $post->date = Input::get('date');
            $post->author_id = Input::get('author_id');
            $post->save();

            if ($tags = $post->tags)
            {
                $post->tags()->detach($tags->modelKeys());


                foreach (Input::get('tag_id') as $tag) 
                {
                    $post->tags()->attach($tag);
                }
            }

            // Redirect
            Session::flash('message', 'Successfully created Post!');
            return Redirect::to('posts');
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
        // Delete
        $post = Post::find($id);
        $post->delete();

        // Redirect
        Session::flash('message', 'Successfully deleted the post!');
        return Redirect::to('posts');
    }
}
