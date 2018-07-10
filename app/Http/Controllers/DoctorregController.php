<?php

namespace App\Http\Controllers;

use App\User;

class DoctorregController extends Controller
{
    public function create()
    {
    	return view('sessions.createdoc');
    }

    public function store()
    {
    	//validate the form
    	$this->validate(request(), [
    		'email' => 'required|email',
    		'password' => 'required',
    		'firstname' => 'required',
    		'middlename' => 'required',
    		'lastname' => 'required',
    		'expertise' => 'required'
    	]);
    	//create and save
    	$user = User::create(request(['email', 'password', 'firstname', 'middlename', 'lastname', 'expertise']));

    	//sign them in
    	auth()->login($user);

    	//redirect to homepage
    	return redirect('/DoctorHompage');

    }
}
