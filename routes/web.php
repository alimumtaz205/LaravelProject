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
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();
//Update Profile
Route::get('/profile','ProfileController@profile')->name('profile');
Route::post('/profileupdate','ProfileController@profileUpdate')->name('profileupdate');
//Change Password
Route::get('/changepassword','ProfileController@changePasswordForm')->name('changepassword');
Route::post('/changepassword','ProfileController@passwordChange')->name('changepassword');
//Picture Upload
Route::get('/profilepicture','ProfileController@getProfileAvatar')->name('profileavatar');
Route::post('/profilepicture','ProfileController@profilePictureUpload')->name('profileavatar');





