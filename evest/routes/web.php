<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/index', 'App\Http\Controllers\IController@display_index');
// Route for register user
Route::post('sign-submit', 'App\Http\Controllers\IController@sign_submit');

// Routes for login and logout
Route::get('/login', 'App\Http\Controllers\IController@display_login');
Route::post('/login-submit', 'App\Http\Controllers\IController@login_submit');
Route::get('/logout-user', 'App\Http\Controllers\IController@logout');

// Route for Contact us Page
Route::get('/contactus', 'App\Http\Controllers\IController@display_contact');

// Route for Displaying categories wise products
Route::get('/dishwasher/{id}', 'App\Http\Controllers\IController@display_dishwasher');

// Route for Contact us page
Route::post('/contact-submit', 'App\Http\Controllers\IController@contact_submit');
Route::get('/addproduct', 'App\Http\Controllers\IController@addproduct');

// route for buynow
Route::get('/buynow/{id}', 'App\Http\Controllers\IController@buynow');

// route for displaying all products
Route::get('/allproducts', 'App\Http\Controllers\IController@display_allproducts');

// route for add product in cart
Route::post('add-submit', 'App\Http\Controllers\IController@addtocart');

// route for displaying how much products in cart
Route::get('/checkout', 'App\Http\Controllers\IController@checkout');
Route::get('/delete-cart/{id}', 'App\Http\Controllers\IController@delete_cart');
