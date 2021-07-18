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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//route makul
Route::get('makul', 'MakulControllers@index')->name('makul');
Route::get('tambah-makul', 'MakulControllers@create')->name('tambah.makul');
Route::post('simpan-makul', 'MakulControllers@store')->name('simpan.makul');

Route::get('edit-makul/{id}', 'MakulControllers@edit')->name('edit.makul');
Route::post('update-makul/{id}', 'MakulControllers@update')->name('update.makul');
Route::get('hapus-makul/{id}', 'MakulControllers@destroy')->name('hapus.makul');

//route mahasiswa
Route::get('mahasiswa', 'MahasiswaControllers@index')->name('mahasiswa');
Route::get('tambah-mahasiswa', 'MahasiswaControllers@create')->name('tambah.mahasiswa');
Route::post('simpan-mahasiswa', 'MahasiswaControllers@store')->name('simpan.mahasiswa');

Route::get('edit-mahasiswa/{id}', 'MahasiswaControllers@edit')->name('edit.mahasiswa');
Route::post('update-mahasiswa/{id}', 'MahasiswaControllers@update')->name('update.mahasiswa');
Route::get('hapus-mahasiswa/{id}', 'MahasiswaControllers@destroy')->name('hapus.mahasiswa');

//routing nilai
Route::get('nilai', 'NilaiControllers@index')->name('nilai');
Route::get('tambah-nilai', 'NilaiControllers@create')->name('tambah.nilai');
Route::post('simpan-nilai', 'NilaiControllers@store')->name('simpan.nilai');

Route::get('edit-nilai/{id}', 'NilaiControllers@edit')->name('edit.nilai');
Route::post('update-nilai/{id}', 'NilaiControllers@update')->name('update.nilai');
Route::get('hapus-nilai/{id}', 'NilaiControllers@destroy')->name('hapus.nilai');