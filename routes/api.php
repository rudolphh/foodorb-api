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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1'], function(){

    Route::post('register', 'AuthController@register');
    Route::post('login', 'Auth\LoginController@login');
    Route::get('forgotpassword', 'AuthController@forgotpassword');

    Route::get('users', 'UserController@index');
    Route::get('users/{user}', 'UserController@show');

    Route::get('friends', 'UserController@index');

    Route::get('listings', 'ListingController@index');
    Route::get('listings/{listing}', 'ListingController@show');
    Route::post('listings', 'ListingController@store');
    Route::put('listings/{listing}', 'ListingController@update');
    Route::delete('listings/{listing}', 'ListingController@delete');

    Route::get('orders', 'OrderController@index');
    Route::get('orders/{order}', 'OrderController@show');
    Route::get('orders/{order}/status', 'OrderController@status');
    Route::post('orders', 'OrderController@store');
    Route::put('orders/{order}', 'OrderController@update');
    Route::delete('orders/{order}', 'OrderController@delete');

    Route::get('settings', 'SettingController@index');
    Route::get('settings/{setting}', 'SettingController@show');
    Route::post('settings', 'SettingController@store');
    Route::put('settings/{setting}', 'SettingController@update');
    Route::delete('settings/{setting}', 'SettingController@delete');

    Route::get('feed', 'ListingController@index');
});
