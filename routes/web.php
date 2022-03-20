<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',                 'TampilanController@index');
Route::get('/index',            'TampilanController@index');

// KLIEN
Route::get('/user/klien',               'UserController@index_klien');
Route::get('/user/klien_add/{id}',      'UserController@create_klien');
Route::post('/user/klien_create/{id}',  'UserController@add_klien');
Route::get('/user/klien_view/{id}',     'UserController@view_klien');
Route::get('/user/klien_delete/{id}',   'UserController@delete_klien');

Route::get('/login', function(){
    return view('auth.login');
});
