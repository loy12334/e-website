<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use app\Register;

class RegisterController extends Controller
{
    //

    public function store(){

    	$data=Input::expect(array('_token'));

    	//var_dump($data);

    	$rule=array
    	(

    		'username'=> 'required',
    		'email'=> 'required',
    		'password'=> 'required',
    		'ConfirmPassword'=> 'required',
    	);

    	$message=array
    	(
    		'ConfirmPassword.required'=> 'The confirm password is required',
    		'ConfirmPassword.min'=> 'The confimr password must be at least 6 characters',
    		'ConfirmPassword.same'=> 'The confimr password and password must be same',
    	);

    	$validator=Validator::make($data,$rule,$message);

    	if ($validator->fails()) 
    	{
    		return Redirect::to('register')->withErrors($validator);
    	}
    	else
    	{
    		Register::formstore(Input::expect(array('_token','ConfirmPassword')));
    	}

    }
}
