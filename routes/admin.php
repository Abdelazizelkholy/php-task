<?php

use Illuminate\Support\Facades\Route;


Route::post('login', 'AdminController@login');

Route::group(['middleware' => 'auth:admins'], function () {
    /**
     *  Profile
     */
    Route::resource('users', 'UserController');
});




