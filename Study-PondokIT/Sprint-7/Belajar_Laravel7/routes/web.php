<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('artikel');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('beranda');

// Route::middleware('auth:api')->get('/artikel', function ($request)
// {
//     return $request->artikel();
// });
Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/beranda', function () {
    return view('beranda');
});


Route::get('/artikel', function () {
    return view('layouts.artikel');
});


Route::get('/artikel', 'ArtikelController@index');
Route::get('/tambah', 'ArtikelController@create');
Route::post('/create', 'ArtikelController@store');
Route::get('/{artikel}/edit', 'ArtikelController@edit');
Route::post('/update/{artikel}', 'ArtikelController@update');
Route::delete('/{artikel}/delete', 'ArtikelController@destroy');

