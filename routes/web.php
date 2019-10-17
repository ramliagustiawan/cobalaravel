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
//     return view('index');
// });

// Route::get('/about', function () {
//     $nama = 'Ramli Taliki';
//     return view('about', ['nama' => $nama]);
// });

Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');


Route::get('/mahasiswa', 'MahasiswaController@index');

// route tim
// Route::get('/tim', 'TimsController@index');
// Route::get('/tim/create', 'TimsController@create');
// Route::get('/tim/{tim}', 'TimsController@show');

// // delete
// Route::post('/tim', 'TimsController@store');
// Route::delete('/tim/{tim}', 'TimsController@destroy');

// // edit
// Route::get('/tim/{tim}/edit', 'TimsController@edit');
// Route::patch('/tim/{tim}', 'TimsController@update');

// baris route di atas bisa diganti apabila dalam satu resources is MAGIC MAN hanya dgn satu baris

Route::resource('tim', 'TimsController');
