<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::name('api.')->namespace('Api')->group(function () {

    // api/auth/
    Route::prefix('auth')->name('auth.')->namespace('AuthManager')->group(function () {
        Route::post('login', 'LoginController')->name('login');
        Route::post('register', 'RegisterController')->name('register');
        Route::post('username-availability', 'UsernameAvailabilityController')->name('username-availability');
        Route::post('email-availability', 'EmailAvailabilityController')->name('email-availability');
        

        Route::middleware('auth:sanctum')->group(function () {
            Route::get('logout', 'LogoutController')->name('logout');
        });
    });

    // api/
    Route::middleware('auth:sanctum')->group(function () {

        Route::namespace('UserManager')->group(function () {
            Route::get('user/current', 'GetCurrentController')->name('user.current');
            Route::resource('user', 'UserController');
        });

        Route::namespace('JotManager')->group(function () {
            Route::resource('jot', 'JotController');
        });
    });

});
