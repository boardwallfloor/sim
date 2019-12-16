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

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

// Route::get('/test/show',['as' => 'data','uses' => 'MahasiswaController@show']);
// Route::post('/test/store','MahasiswaController@store');
// Route::get('/test/','MahasiswaController@create');

Route::resource('mahasiswa','MahasiswaController');
Route::view('datagedung','/datagedung');

Route::resource('mahasiswa','MahasiswaController');
Route::view('tambahgedung','/tambahgedung');

Route::resource('mahasiswa','MahasiswaController');
Route::view('datakelas','/datakelas');

Route::resource('mahasiswa','MahasiswaController');
Route::view('tambahkelas','/tambahkelas');

Route::resource('mahasiswa','MahasiswaController');
Route::view('dataruang','/dataruang');

Route::resource('mahasiswa','MahasiswaController');
Route::view('tambahruang','/tambahruang');

Route::resource('mahasiswa','MahasiswaController');
Route::view('datamatakuliah','/datamatakuliah');

Route::resource('mahasiswa','MahasiswaController');
Route::view('tambahmatakuliah','/tambahmatakuliah');

Route::resource('mahasiswa','MahasiswaController');
Route::view('datamahasiswa','/datamahasiswa');

Route::resource('mahasiswa','MahasiswaController');
Route::view('tambahmahasiswa','/tambahmahasiswa');

Route::resource('mahasiswa','MahasiswaController');
Route::view('datakelasmahasiswa','/datakelasmahasiswa');

Route::resource('mahasiswa','MahasiswaController');
Route::view('tambahkelasmahasiswa','/tambahkelasmahasiswa');

Route::resource('mahasiswa','MahasiswaController');
Route::view('datasks','/datasks');

Route::resource('mahasiswa','MahasiswaController');
Route::view('tambahsks','/tambahsks');

Route::resource('mahasiswa','MahasiswaController');
Route::view('datatahunajaran','/datatahunajaran');

Route::resource('mahasiswa','MahasiswaController');
Route::view('tambahtahunajaran','/tambahtahunajaran');

Route::resource('mahasiswa','MahasiswaController');
Route::view('datasesi','/datasesi');

Route::resource('mahasiswa','MahasiswaController');
Route::view('tambahsesi','/tambahsesi');
