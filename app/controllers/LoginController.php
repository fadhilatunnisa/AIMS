<?php

class LoginController extends BaseController {

	public function postUser()
	{

		$userdata = array(
			'email' => Input::get('email'),
			'password' => Input::get('password')
			);

		if(Auth::attemp($userdata))
		{
			return "User logged correctly.";
		}
		else
		{
			return "Error invalid data.";
		}
	}
}