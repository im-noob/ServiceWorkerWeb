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
Route::get('/', 'homeController@homeView');


Route::get('/selectSub', 'homeController@getSubcategory');

Route::get('/profile', 'authController@authenticate');

Route::post('/profile/submit', 'authController@profileSubmit');


Route::get('/signup','authController@signUp');
  
Route::get('/logout', 'authController@logout');

Route::get('/generateOtp','authController@sendOtp');

Route::get('/sendOtp','authController@SenOTPToUser');

Route::post('/SP/submitProfile','authController@SubmitServiceProfile');

Route::post('/signupForm', 'authController@cnfrmOTPofUser');

Route::get('/hire/address', 'hireController@SetAddresss');

Route::get('/hire/cnfrmotp', 'hireController@conformOTP');

Route::get('/hire/submit', 'hireController@hireSubmit');

Route::get('/hire/{id}', 'hireController@hirePage');

Route::get('/addToCart','hireController@addToCart');

Route::get('/shop_salun','salonController@selectSalon');

Route::get('/shop_details/{id}','salonController@SalonDetails');
