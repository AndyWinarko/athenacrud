<?php

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
