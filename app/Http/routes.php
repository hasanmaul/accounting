<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'DashboardController@index');

Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@logout');
Route::get('/laporan', 'HomeController@laporan');
Route::get('penerimaan', 'DashboardController@penerimaan');
Route::get('penerimaan/edit/{id}', 'DashboardController@penerimaanedit');
Route::get('penerimaan/report', 'DashboardController@penerimaanreport');
Route::post('penerimaan/save', 'DashboardController@penerimaansave');
Route::get('laporan/history/penerimaan/edit/{id}', 'DashboardController@penerimaanedit');
Route::get('laporanperusahaan', 'DashboardController@laporanperusahaan');
Route::get('pengeluaran/edit/{id}', 'DashboardController@pengeluaranedit');
Route::post('pengeluaran/save', 'DashboardController@pengeluaransave');
Route::get('pengeluaran/report', 'DashboardController@pengeluaranreport');
Route::get('laporan/history/pengeluaran/edit/{id}', 'DashboardController@pengeluaranedit');
Route::get('pengeluaran/delete/{id}', 'DashboardController@deletee');
Route::get('laporan/pengeluaran', 'DashboardController@laporanpengeluaran');
Route::get('pengeluaran', 'DashboardController@pengeluaran');
Route::get('/aa', 'DashboardController@bindex');
Route::get('penerimaan/delete/{id}', 'DashboardController@delete');
// Route::post('');

Route::get('laporan/penerimaan/report', 'DashboardController@penerimaanreportpdf');
Route::get('laporan/pengeluaran/report', 'DashboardController@pengeluaranreportpdf');