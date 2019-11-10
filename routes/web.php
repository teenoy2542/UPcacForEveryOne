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



Route::resource('/', 'WelcomeController');

Route::get('/show', 'TravelController@Getdata');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/driver/licensecar', 'LicenseCarController');

Route::resource('/driver/travel', 'TravelsController');

Route::get('/event-up','TravelController@Getdata');

Route::get('/travel/{id}','TravelController@selectedtravel');

Route::get('/accept/{id}','TravelController@accept');

Route::get('/accept/{id}/see','TravelController@clsa');

Route::get('/getdata', 'TravelController@Getdata');

