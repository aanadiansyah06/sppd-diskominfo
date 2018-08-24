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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'AkunController@masuk');
Route::get('/dashboard', 'DashboardController@index');
Route::get('/dashboard/anggaran', 'AnggaranController@index');
Route::get('/dashboard/pegawai', 'PegawaiController@index');
Route::get('/dashboard/bidang', 'BidangController@index');
Route::get('/dashboard/dinas', 'DinasController@index');
Route::get('/dashboard/seksi', 'SeksiController@index');
Route::get('/dashboard/user', 'UserController@index');
