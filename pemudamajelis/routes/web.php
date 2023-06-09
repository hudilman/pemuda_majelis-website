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

Route::get('detail/{artikel_id}','Beranda_controller@detail');

Route::post('komentar/{artikel_id}','Beranda_controller@komentar');

Route::get('artikel/kategori/{kategori_id}','Beranda_controller@artikel_kategori');

Route::group(['middleware'=>'auth'],function(){
	Route::get('admin','Admin\Beranda_controller@index');

	// Manage Kategori
	Route::get('admin/kategori','Admin\Kategori_controller@index');
	Route::get('admin/kategori/add','Admin\Kategori_controller@add');
	Route::post('admin/kategori/add','Admin\Kategori_controller@store');
	Route::get('admin/kategori/{id}','Admin\Kategori_controller@edit');
	Route::put('admin/kategori/{id}','Admin\Kategori_controller@update');
	Route::delete('admin/kategori/{id}','Admin\Kategori_controller@delete');

	// Manage Artikel
	Route::get('admin/artikel','Admin\Artikel_controller@index');
	Route::get('admin/artikel/add','Admin\Artikel_controller@add');
	Route::post('admin/artikel/add','Admin\Artikel_controller@store');
	Route::get('admin/artikel/{id_artikel}','Admin\Artikel_controller@edit');
	Route::put('admin/artikel/{id_artikel}','Admin\Artikel_controller@update');
	Route::delete('admin/artikel/{id_artikel}','Admin\Artikel_controller@delete');

	// Manage komentar
	Route::get('admin/komentar','Admin\Komentar_controller@index');
	Route::get('hapus/komentar/{id}','Admin\Komentar_controller@delete');

	// Manage iklan
	Route::get('admin/iklan','Admin\Iklan_controller@index');
	Route::post('admin/iklan','Admin\Iklan_controller@store');

	// Manage logo Header
	Route::get('admin/logo','Admin\LogoController@index');
	// Route::get('admin/logo/add','Admin\LogoController@add');
	// Route::post('admin/logo/add','Admin\LogoController@store');
	Route::get('admin/logo/{id}','Admin\LogoController@edit');
	Route::put('admin/logo/{id}','Admin\LogoController@update');
});

Auth::routes();

Route::get('/home', function(){
	return redirect('admin');
});

Route::get('keluar',function(){
	\Auth::logout();

	return redirect('login');
});
