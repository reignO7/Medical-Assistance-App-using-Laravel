<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function login()
    {

    }

    public function destroy()
    {
    	auth()->logout();

    	return redirect('/Homepage');
    }
}
