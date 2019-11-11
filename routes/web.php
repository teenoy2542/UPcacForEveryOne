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

Auth::routes();

Route::get('/driver/date', 'TravelsController@datatavels');

Route::get('/driver/del/{id}', 'TravelsController@deletedata');

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/','TravelController@Getdata');
Route::resource('/', 'WelcomeController');

Route::get('/inform/travel','InformTravelController@show');


Route::resource('/inform', 'InformController');

Route::get('/event-up','TravelController@Getdata');

Route::get('/travel/{id}','TravelController@selectedtravel');

Route::get('/accept/{id}','TravelController@accept');

Route::get('/accept/{id}/see','TravelController@clsa');

Route::get('/getdata', 'TravelController@Getdata');

Route::resource('/driver/licensecar', 'LicenseCarController');

Route::resource('/driver/travel', 'TravelsController');
