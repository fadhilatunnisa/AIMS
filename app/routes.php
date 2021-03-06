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

Route::get('home', ['uses' => 'HomeController@showWelcome', 'before' => 'auth']);
/**
 *  Route resource untuk management users
 */
/**
 *  Route resource untuk management inventory
 */
Route::resource('inventory', 'InventoryController', ['before' => 'auth']);

Route::get('inventory/create', 'InventoryController@create');

Route::post('inventory/create', 'InventoryController@store');

Route::get('inventory/edit/{id}', 'InventoryController@edit');

Route::post('inventory/update/{id}', array('as' => 'inventory.update', 'uses' =>'InventoryController@update'));

Route::get('inventory/destroy/{id}', 'InventoryController@destroy');

Route::resource('users', 'UserController', ['before' => 'auth']);

Route::get('users/create','UserController@create');

Route::post('users/create','UserController@store');


