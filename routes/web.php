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

Route::get('/corona', function () {
    return view('frontend.index');
});


Route::get('/', 'Controller@home');
Route::get('/corona-test', function () {
    return view('common.test.index');
});
Route::any('/corona-test/result', 'Controller@testSave');
Route::get('/answer', function () {
    return view('common.test.answer');
});


Route::get('/form', 'Controller@coronaTest');


Route::get('/login', 'AuthController@login');
Route::post('/login/check', 'AuthController@loginCheck');


Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/dashboard', 'DashboardController@dashboard');
    Route::get('/patient/show', 'DashboardController@patientShow');
    Route::get('/patient/details/{id}', 'DashboardController@patientDetails');
    Route::get('/patient/create', 'DashboardController@patientCreate');
    Route::post('/patient/save', 'DashboardController@patientSave');
    Route::get('/password/edit', 'DashboardController@passwordchange');
    Route::post('/password/update', 'DashboardController@passwordUpdate');

/*
    Route::get('/dashboard', 'DashboardController@dashboard');*/


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


