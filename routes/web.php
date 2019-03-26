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

Route::get('/', [
    'uses' => 'PagesController@transact'
]);

// processing form to transact
Route::post('/', [
    'uses' => 'PsspController@transact'
]);

Route::get('/add', function () {
    return view('add');
});

Route::get('/findEmail', 'PagesController@findEmail');




// processing form to add account
Route::post('/add', [
    'uses' => 'PsspController@store'
]);

Route::get('/check', function () {
    return view('check');
});

Route::get('/list', function () {
    return view('list');
});

