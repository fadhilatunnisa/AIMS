<?php

class LoginController extends BaseController {

	public function postUser()
	{

		$userdata = array(
			'email' => Input::get('email'),
			'password' => Input::get('password')
			);

		if(Auth::attempt($userdata))
		{
			return Redirect::intended('home');
		}
		else
		{
			return Redirect::to('/');
		}
	}
}