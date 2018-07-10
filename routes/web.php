<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/Homepage', 'ApplicationController@index')->name('home');


Route::get('/DoctorHompage', 'DoctorController@index');

Route::get('/doctors/create', 'DoctorController@create');

Route::post('/doctos', 'DoctorController@store');

Route::get('/doctors/{doctor}', 'DoctorController@show');


Route::post('/doctors/{doctor}/appointments', 'AppointmentController@store');


Route::get('/registerDoctor', 'DoctorregController@create');

Route::post('/registerDoctor', 'DoctorregController@store');


Route::get('/login', 'SessionsController@create');

Route::post('/logout', 'SessionsController@destroy');