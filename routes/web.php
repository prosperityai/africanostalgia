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

//Route::get('/', 'SuperTravelController@index');
/* Route::get('/', function () {
    return view('admin/dashboard');
}); */
Route::resource('supertravel', 'SuperTravelController');

Route::resource('country', 'CountryController');


Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/search', 'SuperTravelController@search');

Route::get('/', 'FrontendController@index');

Route::resource('tour', 'FrontendController');

Route::resource('countryTour', 'FrontendCountryController');