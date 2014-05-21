<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('test', function()
{
	return 'test view';
});


Route::resource('users', 'UsersController');
//Route::resource('questions', 'QuestionsController');
//Route::resource('users.questions', 'QuestionsController');
				///////////////// nested resources
Route::resource('posts', 'PostsController');
/*

CRUD	Request
Create => POST
Read => GET
Update => PUT/Patch
Delete => Delete

*/