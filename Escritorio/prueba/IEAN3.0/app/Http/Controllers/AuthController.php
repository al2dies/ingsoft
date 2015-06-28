<?php namespace App\Http\Controllers;

class AuthController extends Controller 
{

public function login()
	 {

		$data = Input::all();

		$credentials = ['email'=>$data['email'], 'password'=>$data['password']];


		if (Auth::attempt($credentials)){
			return Redirect::back();

		}
		return Redirect::back()->with('login_error',1);

	  }

	

}

