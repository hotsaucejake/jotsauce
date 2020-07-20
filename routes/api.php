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

Route::name('api.')->group(function () {
    Route::prefix('auth')->name('auth.')->namespace('Auth')->group(function () {
        Route::post('login', 'AuthController@login')->name('login');
        Route::post('register', 'AuthController@register')->name('register');

        Route::middleware('auth:sanctum')->group(function () {
            Route::get('logout', 'AuthController@logout')->name('logout');
            Route::get('user', 'AuthController@user')->name('user');
        });
    });
});
