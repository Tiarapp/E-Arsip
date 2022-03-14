<?php

use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');

Route::get('/jenis-dokumen', 'CategoryController@index')->name('jenis-dokumen');
Route::get('/jenis-dokumen/create', 'CategoryController@create')->name('category.create');
Route::post('/jenis-dokumen/store', 'CategoryController@store')->name('category.store');
Route::get('/jenis-dokumen/edit/{id}', 'CategoryController@edit')->name('category.edit');

require __DIR__.'/auth.php';
