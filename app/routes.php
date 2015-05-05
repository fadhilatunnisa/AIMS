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
});

Route::controller('check', 'login');

Route::get('register', function()
{
	$user = new User;
	$user->email = "admin@gmail.com";
	$user->name = "admin";
	$user->password = hash::make('adminrahasia');

	$user->save();
	return "pengguna di tambahkan".;
});