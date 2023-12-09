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
    return view('welcome');
});


Route::get('olidz', function () {
    //bisa diisi program apa saja
    return "Ini olid ges" ;
});

Route::get('olid', function () {
    return "<h1>Ini olid ges</h1>" ;
});

Route::get('blog', function () {
    return view('blog') ;
});

Route::get('tugasLinktree', function () {
    return view('tugasLinktree') ;
});

Route::get('materi1', function () {
    return view('materi1') ;
});

Route::get('materi2', function () {
    return view('materi2') ;
});

Route::get('materi3', function () {
    return view('materi3') ;
});

Route::get('materi4', function () {
    return view('materi4') ;
});

Route::get('materi5', function () {
    return view('materi5') ;
});

Route::get('tugasKelompok', function () {
    return view('tugasKelompok') ;
});

Route::get('tugasLayout', function () {
    return view('tugasLayout') ;
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showtime');

Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');

Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog2', function () {
    return view('home');
});

Route::get('/blog2/tentang', function () {
    return view('tentang');
});

Route::get('/blog2/kontak', function () {
    return view('kontak');
});

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');


Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');


Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');


//latsol eas
Route::get('/nilaikuliah','App\Http\Controllers\NilaiController@index');
Route::get('/nilaikuliah/tambah','App\Http\Controllers\NilaiController@tambah');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiController@store');

//latsol eas 2
Route::get('/masker','App\Http\Controllers\MaskerController@index');
Route::get('/masker/tambah','App\Http\Controllers\MaskerController@tambah');
Route::post('/masker/store','App\Http\Controllers\MaskerController@store');
Route::get('/masker/edit/{id}','App\Http\Controllers\MaskerController@edit');
Route::post('/masker/update','App\Http\Controllers\MaskerController@update');
Route::get('/masker/hapus/{id}','App\Http\Controllers\MaskerController@hapus');
Route::get('/masker/cari','App\Http\Controllers\maskercontroller@cari');
Route::get('/masker/view/{id}','App\Http\Controllers\maskercontroller@view');

//latsol kelas cewek
Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@index');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangController@hapus');
