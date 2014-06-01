<?php

//User allowed
Route::get('insert/user', function()
{
    DB::table('users')->insert(array(
                 'email' => 'email@gmail.com',
                 'password' => Hash::make('123')
         ));
});

Route::group(array('before' => 'auth'), function()
{
    Route::resource('authors', 'AuthorController');
    Route::get('authors/delete/{id}', 'AuthorController@destroy');

    Route::resource('posts', 'PostController');
    Route::get('posts/delete/{id}', 'PostController@destroy');

    Route::resource('tags', 'TagController');
    Route::get('Cotags/delete/{id}', 'TagController@destroy');
});

Route::get('/', 'FrontendController@index');
Route::get('/show/{slug}/', 'FrontendController@showPost');

Route::get('login', function()
{
  	return View::make('login');
});

Route::post('login', 'LoginController@postLogin');
