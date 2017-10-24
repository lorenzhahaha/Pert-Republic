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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* CART FUNCTIONS */
Route::get('/show', 'CartController@showCart');
Route::post('/add', 'CartController@addToCart');
Route::post('/remove', 'CartController@removeToCart');
Route::post('/update', 'CartController@updateQuantity');

/* USER FUNCTIONS */
Route::get('/verifyEmailFirst', 'Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');
Route::get('/verify/{email}/{verifyToken}', 'Auth\RegisterController@sendEmailDone')->name('sendEmailDone');

/* PROFILE EDITING */
Route::get('/show-profile', 'UserController@showProfile');
Route::post('/update-avatar', 'UserController@updateAvatar');
Route::post('/update-password', 'UserController@updatePassword');

/* FACEBOOK LOGIN */
Route::get('/login/facebook', 'Auth\LoginController@redirectToFacebook');
Route::get('/login/facebook/callback', 'Auth\LoginController@handleFacebookCallback');

/* GOOGLE LOGIN */
Route::get('/login/google', 'Auth\LoginController@redirectToGoogle');
Route::get('/login/google/callback', 'Auth\LoginController@handleGoogleCallback');
