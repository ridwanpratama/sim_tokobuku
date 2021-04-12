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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth', 'akses:Manager'])->group(function () {
    Route::resource('/user', 'Manager\UserController');
});

Route::middleware(['auth', 'akses:Admin'])->group(function () {
    Route::resource('/buku', 'Admin\BukuController');
});

Route::middleware(['auth', 'akses:Kasir'])->group(function () {
    Route::get('/kasir', function () {
        echo "kasir";
    });
});