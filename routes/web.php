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


#first in '' display in url
Route::view('/', 'welcome');
Route::view('contact-us', 'contact');
Route::view('about', 'about');

Route::post('customers', 'CustomerController@store');
#pass data
Route::get('customers', 'CustomerController@list');

/*
 * same way with above
Route::get('/', function () {
    return view('welcome');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('about', function () {
    return view('about');
});
*/
