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
Route::get('/detail-karyawan', function () {
    return view('detail-karyawan');
});
Route::get('/tambah-karyawan', function () {
    return view('tambah-karyawan');
});
Route::get('/edit-karyawan', function () {
    return view('edit-karyawan');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
