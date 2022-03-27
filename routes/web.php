<?php

use App\Http\Controllers\UserLoginController;
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
Route::get('/index',            'TampilanController@index')->name('dashboard');
Route::get('/user',             'TampilanController@userIndex')->name('user.dashboard');

//Auth
    Route::get('/register',         'RegisterController@create')->name('index.register');
    Route::post('register/store',   'RegisterController@store');
    Route::get('/login',            'UserLoginController@index')->name('login');
    Route::post('login',            'UserLoginController@login');
    Route::get('/logout',           'UserLoginController@destroy')->name('logout');

Route::group( [
        'middleware' => 'is_user'
    ] , function ( ) {

        // KLIEN
            Route::get('/user/klien',               'UserController@index_klien');
            Route::get('/user/klien_add/{id}',      'UserController@create_klien');
            Route::post('/user/klien_create/{id}',  'UserController@add_klien');
            Route::get('/user/klien_view/{id}',     'UserController@view_klien');
            Route::get('/user/klien_delete/{id}',   'UserController@delete_klien');

        // JENIS DOKUMEN
            Route::get('/user/jenis_dokumen',               'UserController@index_jenis_dokumen');
            Route::get('/user/jenis_dokumen_add/{id}',      'UserController@create_jenis_dokumen');
            Route::post('/user/jenis_dokumen_create/{id}',  'UserController@add_jenis_dokumen');
            Route::get('/user/jenis_dokumen_view/{id}',     'UserController@view_jenis_dokumen');
            Route::get('/user/jenis_dokumen_delete/{id}',   'UserController@delete_jenis_dokumen');

        // DOKUMEN
            // SURAT
                Route::get('/user/dokumen_surat',               'UserController@index_surat');
                Route::get('/user/dokumen_surat_add/{id}',      'UserController@create_surat');
                Route::post('/user/dokumen_surat_create/{id}',  'UserController@add_surat');
                Route::get('/user/dokumen_surat_delete/{id}',   'UserController@delete_surat');
                Route::get('/user/download_dokumen/{nm}',       'UserController@getDownload');

            // KEUANGAN
                Route::get('/user/dokumen_keuangan',               'UserController@index_keuangan');
                Route::get('/user/dokumen_keuangan_add/{id}',      'UserController@create_keuangan');
                Route::post('/user/dokumen_keuangan_create/{id}',  'UserController@add_keuangan');
                Route::get('/user/dokumen_keuangan_delete/{id}',   'UserController@delete_keuangan');
                Route::get('/user/download_dokumen_keuangan/{nm}',       'UserController@getDownload_keuangan');

            // ASET
                Route::get('/user/dokumen_aset',               'UserController@index_aset');
                Route::get('/user/dokumen_aset_add/{id}',      'UserController@create_aset');
                Route::post('/user/dokumen_aset_create/{id}',  'UserController@add_aset');
                Route::get('/user/dokumen_aset_delete/{id}',   'UserController@delete_aset');

            // DOKUMEN LAIN
                Route::get('/user/dokumen_lain',               'UserController@index_lain');
                Route::get('/user/dokumen_lain_add/{id}',      'UserController@create_lain');
                Route::post('/user/dokumen_lain_create/{id}',  'UserController@add_lain');
                Route::get('/user/dokumen_lain_delete/{id}',   'UserController@delete_lain');
                Route::get('/user/download_dokumen_lain/{fdr}/{nm}',        'UserController@getDownload_lain');

    });


