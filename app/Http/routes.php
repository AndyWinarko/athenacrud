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
    return view('auth.login');
});

Route::get('/create', function() {
    return view('items.create');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('items', 'ItemController');
Route::get('/print', 'PrintReportController@index');
Route::get('/print/table', 'PrintReportController@printtable');

Route::resource('admin', 'AdminController');
