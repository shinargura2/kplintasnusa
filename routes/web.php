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

Route::get('/', function () {
    return view('layout.t_home');
});


//LOGIN USER
Route::view('/logout','layout.t_login');

Route::view('/gudang', 'layout.t_gudang');
Route::view('/supplier', 'layout.t_supplier');
Route::view('/barang', 'layout.t_barang');
Route::view('/transaksi', 'layout.t_transaksi');
Route::view('/satuan', 'layout.t_satuan');

// INI BUAT GUDANG
Route::resource('/gudang', 'GudangController');
Route::post('prosestambahgudang', 'GudangController@store');
Route::post('proseseditgudang', 'GudangController@update');
Route::get('/gudang/hapus/{id}', 'GudangController@destroy');
Route::get('/gudang/edit/{id}', 'GudangController@edit');
Route::get('/gudang/detail/{id}', 'GudangController@show');

//INI BUAT SATUAN
Route::resource('/satuan', 'SatuanController');
Route::post('prosestambahsatuan', 'SatuanController@store');
Route::post('proseseditsatuan', 'SatuanController@update');
Route::get('/satuan/hapus/{id}', 'SatuanController@destroy');
Route::get('/satuan/edit/{id}', 'SatuanController@edit');


// //INI BUAT PEMASOK
Route::resource('/supplier', 'PemasokController');
Route::post('prosestambahpemasok', 'PemasokController@store');
Route::post('proseseditpemasok', 'PemasokController@update');
Route::get('/supplier/hapus/{id}', 'PemasokController@destroy');
Route::get('/supplier/edit/{id}', 'PemasokController@edit');
Route::get('prosesprintsup', 'PemasokController@cetaklaporan');

// //INI BUAT BARANG
Route::resource('/barang', 'BarangController');
Route::post('prosestambahbarang', 'BarangController@store');
Route::post('proseseditbarang', 'BarangController@update');
Route::get('/barang/hapus/{id}', 'BarangController@destroy');
Route::get('/barang/edit/{id}', 'BarangController@edit');
Route::get('prosesprintbarang', 'BarangController@cetaklaporan');
// Route::get('/barang', 'BarangController@create');
// Route::get('dropdownbarang', 'BarangController@dropdownbarang');

//INI BUAT TRANSAKSI
Route::resource('/transaksi', 'TransaksiController');
Route::post('prosestambahtransaksi', 'TransaksiController@store');
Route::post('prosesedittransaksi', 'TransaksiController@update');
Route::get('/transaksi/hapus/{id}', 'TransaksiController@destroy');
Route::get('/transaksi/edit/{id}', 'TransaksiController@edit');
Route::get('prosesprinttransaksi', 'TransaksiController@cetaklaporan');
// Route::get('dropdownlist','TransaksiController@getBarang');


