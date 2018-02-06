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
    return redirect()->to('/home');
});

Route::get('/web/development', 'HomeController@getWebDevelopment');

Route::get('/home', 'HomeController@getHome');
Route::get('/about', 'HomeController@getAbout');
Route::get('/services', 'HomeController@getServices');
Route::get('/contact', 'HomeController@getContact');
Route::get('/projects', 'HomeController@getProjects');
Route::get('/resume', 'HomeController@getResume');

Route::post('/send/message', 'HomeController@postMessage');
