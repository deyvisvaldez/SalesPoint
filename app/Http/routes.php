<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Authentication routes...
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::group(['middleware' => 'auth'], function () {

    Route::get('admin', 'Auth\AuthController@getAdmin');

    Route::group(['prefix' => 'admin'], function () {
        Route::post('users', 'UsersController@store');
        Route::get('users/create', 'UsersController@create');
        Route::put('users/{id}', 'UsersController@update');
        
        Route::get('users', 'UsersController@index');
        Route::get('users/{id}', 'UsersController@edit');

        Route::delete('users/{id}', 'UsersController@destroy');
    });

    
});


// Admin
