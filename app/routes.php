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
	return View::make('login');
});

Route::get('leave', function()
{
	Auth::logout();
	return Redirect::to('/');
});

Route::post('login', 'LoginController@postUser');

Route::get('dashboard/users', function(){
	return View::make('users.index');

});

Route::resource('inventories', 'InventoriesController');



