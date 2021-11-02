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





Route::get('/dashboard', 'dashboardController@providerView');

Route::get('/dashboard', 'dashboardController@orderView'); 

Route::get('/orderdetails', 'orderdetailsController@orderdetailsView');


Route::get('/details','itemdetailsController@details');










Route::get('/login', function () {
    return view('login');
});
Route::get('/cart', function () {
    return view('order.cart');
});





// Route::get('/additem', function () {
//     return view('additem');
// });


Route::get('/dashboard/add','productController@showForm')->middleware('admin');
Route::get('/dashboard/{id}','productController@deleteProduct');

 Route::post('/dashboard/add','productController@addProduct');


Route::get('/itemList/{cat}', 'productController@fetchProduct');
Route::post('/login','loginController@login');
Route::get('/admin/logout','logoutController@adminLogout');
Route::get('/logout','logoutController@userLogout');






