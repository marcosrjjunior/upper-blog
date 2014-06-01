<?php

class FrontendController extends \BaseController {

    public function index()
    {
        // get all the posts
        $posts = Post::orderBy('created_at', 'desc')->paginate(3);

        // load the view and pass the posts
        return View::make('posts', compact('posts'));
    }
    
    public function showPost($slug)
    {
        // get post by slug
        $post = Post::whereSlug($slug)->first();
        
        // load the view and pass the post
        return View::make('post-show', compact('post'));
    }
}