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



Route::resource('/', 'IndexController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/driver/licensecar', 'LicenseCarController');

Route::resource('/driver', 'DriverController');

Route::get('/event-up','TravelController@Getdata');

Route::get('/event_down','TravelController@Getdatadown');

Route::get('/travel/{id}','TravelController@selectedtravel');

Route::get('/accept/{id}','TravelController@accept');    

Route::get('/getdata', 'TravelController@Getdata');

