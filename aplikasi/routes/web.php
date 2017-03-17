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

Auth::routes();

Route::get('/', 'AplikasiController@index');
// Kategori
Route::get('kategori', 'AplikasiController@index_kategori');
Route::post('kategori', 'AplikasiController@store_kategori');
Route::get('kategori/{id_kategori}', 'AplikasiController@edit_kategori');
Route::put('kategori/{id_kategori}', 'AplikasiController@update_kategori');
Route::delete('kategori/{id_kategori}', 'AplikasiController@hapus_kategori');
// SubKategori
Route::get('subkategori', 'AplikasiController@index_subkategori');
Route::post('subkategori', 'AplikasiController@store_subkategori');
Route::get('subkategori/{id_subkategori}', 'AplikasiController@edit_subkategori');
Route::put('subkategori/{id_subkategori}', 'AplikasiController@update_subkategori');
Route::delete('subkategori/{id_subkategori}', 'AplikasiController@hapus_subkategori');
// SubSubKategori
Route::get('sub_subkategori', 'AplikasiController@index_sub_subkategori');
Route::post('sub_subkategori', 'AplikasiController@store_sub_subkategori');
Route::get('sub_subkategori/{id_sub_subkategori}', 'AplikasiController@edit_sub_subkategori');
Route::put('sub_subkategori/{id_sub_subkategori}', 'AplikasiController@update_sub_subkategori');
Route::delete('sub_subkategori/{id_sub_subkategori}', 'AplikasiController@hapus_sub_subkategori');
// Barang
Route::get('barang', 'AplikasiController@index_barang');
Route::post('barang', 'AplikasiController@store_barang');
Route::get('barang/{id_barang}', 'AplikasiController@edit_barang');
Route::put('barang/{id_barang}', 'AplikasiController@update_barang');
Route::delete('barang/{id_barang}', 'AplikasiController@hapus_barang');
// Unit
Route::get('unit', 'AplikasiController@index_unit');
Route::post('unit', 'AplikasiController@store_unit');
Route::get('unit/{id_unit}', 'AplikasiController@edit_unit');
Route::put('unit/{id_unit}', 'AplikasiController@update_unit');
Route::delete('unit/{id_unit}', 'AplikasiController@hapus_unit');
