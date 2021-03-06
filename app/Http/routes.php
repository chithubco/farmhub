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

Route::get('/','UserController@index');
Route::post('/register','UserController@register');

Route::get('/confirmation','UserController@confirmation');


Route::get('/capital','FinanceController@index');
Route::post('/capital','FinanceController@search');