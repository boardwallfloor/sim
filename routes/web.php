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
