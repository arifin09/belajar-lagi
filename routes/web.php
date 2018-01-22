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

Route::get('/sekolah', function () {
    return view('sekolah.index');
})->name('sekolah.index');

Route::get('/sekolah/home', function () {
    return view('sekolah.home');
})->name('route_home');

Route::get('/sekolah/profil', function () {
    return view('sekolah.profil');
})->name('route_profil');

Route::get('/sekolah/about', function () {
    return view('sekolah.about');
})->name('route_about');

Route::get('/sekolah/contact', function () {
    return view('sekolah.contact');
})->name('route_contact');


	Route::get('/sekolah/data','SekolahController@index')->name('data.index');
	Route::get('/sekolah/data/create','SekolahController@create')->name('data.create');
	Route::post('/sekolah/data/store','SekolahController@store')->name('data.store');
	Route::get('/sekolah/data/edit/{id}','SekolahController@edit')->name('data.edit');
	Route::post('/sekolah/data/edit/{id}','SekolahController@update')->name('data.update');
	Route::get('/sekolah/data/destroy/{id}','SekolahController@destroy')->name('data.destroy');

	Route::get('/sekolah/murid','MuridController@index')->name('murid.index');
	Route::get('/sekolah/murid/create','MuridController@create')->name('murid.create');
	Route::post('/sekolah/murid/store','MuridController@store')->name('murid.store');
	Route::get('/sekolah/murid/edit/{id}','MuridController@edit')->name('murid.edit');
	Route::post('/sekolah/murid/edit/{id}','MuridController@update')->name('murid.update');
	Route::get('/sekolah/murid/destroy/{id}','MuridController@destroy')->name('murid.destroy');

	Route::get('/sekolah/kelas','KelasController@index')->name('kelas.index');
	Route::get('/sekolah/kelas/create','KelasController@create')->name('kelas.create');
	Route::post('/sekolah/kelas/store','KelasController@store')->name('kelas.store');
	Route::get('/sekolah/kelas/edit/{id}','KelasController@edit')->name('kelas.edit');
	Route::post('/sekolah/kelas/edit/{id}','KelasController@update')->name('kelas.update');
	Route::get('/sekolah/kelas/destroy{id}','KelasController@destroy')->name('kelas.destroy');