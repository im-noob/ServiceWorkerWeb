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

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/signup', function() {
    return view('signUp');
});

Route::get('/signupForm', function() {
    return view('signupForm');
});
Route::get('/hire/{id}', 'hireController@hirePage' );
