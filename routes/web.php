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



Route::get('/', function () {
    return view('welcome');
});


Route::get('/details','itemdetailsController@details');

Route::get('/dashboard', 'dashboardController@providerView');



Route::get('/dashboard', 'dashboardController@providerView')->middleware('admin');


Route::get('/login', function () {
    return view('login');
});



Route::post('/login','loginController@login');

Route::get('/admin/logout','logoutController@adminLogout');
Route::get('/logout','logoutController@userLogout');


