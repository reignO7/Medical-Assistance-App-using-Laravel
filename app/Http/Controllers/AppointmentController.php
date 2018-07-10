<?php

namespace App\Http\Controllers;

use App\Appointment;

class AppointmentController extends Controller
{
    public function __contruct()
    {
    	$this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {

    }

    public function show()
    {

    }

    public function create()
    {
    	return view('appointments.create');
    }

    public function store()
    {
    	$this
    }
}
