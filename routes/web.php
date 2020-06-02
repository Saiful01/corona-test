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
    return view('frontend.index');
});
Route::get('/form', function () {
    return view('frontend.form');
});
Route::get('/answer', function () {
    return view('frontend.answer');
});


Route::get('/login', 'AuthController@login');
Route::post('/login/check', 'AuthController@loginCheck');


Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/dashboard', 'DashboardController@dashboard');



    Route::get('/dashboard', 'DashboardController@dashboard');



});

Route::group(['middleware' => 'admin'], function () {

    Route::get('/logout', 'DashboardController@logout');

});


Route::get('/test', function () {
    return view('test');
});


Route::get('/down', function () {
    $exitCode = Artisan::call('down');
});

Route::get('/up', function () {
    $exitCode = Artisan::call('up');
});


