<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
    	return view('application.home');
    }

    public function doctors()
    {
    	return view('application.doctors');
    }
}
