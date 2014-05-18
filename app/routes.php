<?php
Route::resource('authors', 'AuthorController');
Route::get('authors/delete/{id}', 'AuthorController@destroy');

Route::resource('posts', 'PostController');
Route::get('posts/delete/{id}', 'PostController@destroy');

Route::resource('tags', 'TagController');
Route::get('tags/delete/{id}', 'TagController@destroy');

Route::get('/home', function()
{
	return View::make('posts');
});
