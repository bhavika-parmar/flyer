<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => 'web'], function () {
    Route::auth();
   // Route::get('login', 'Auth\AuthController@login');
   // Route::post('register', 'Auth\AuthController@register');
    //Route::get('logout', 'Auth\AuthController@logout');

    Route::get('/', 'DemoController@home');
    Route::get('create','DemoController@create');
    //  Route::get('home','DemoController@home');
    //Route::get('demo','DemoController@index');
    //  Route::get('create','DemoController@create');
    Route::post('store','DemoController@store');
    //Route::resource('home','DemoController');
    Route::get('{zip}/{street}','DemoController@show');
    Route::post('{zip}/{street}/photos','DemoController@addPhoto');
    //Route::resource('flyers','DemoController');
    Route::get('demo/{id}','DemoController@show');
    Route::delete('photos/{id}','DemoController@destroy');
});
