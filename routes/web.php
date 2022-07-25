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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route siswa
use App\Http\Controllers\SiswaController;
Route::resource('siswa', SiswaController::class);

// route jurusan
use App\Http\Controllers\JurusanController;
Route::resource('jurusan', JurusanController::class);

// route nilai
use App\Http\Controllers\NilaiController;
Route::resource('nilai', NilaiController::class);

// route admin
Route::get('/test-admin', function(){
    return view('layouts.admin');
});

Route::get('/hello', function () {
    return view('hello');
});

// route nilai
use App\Http\Controllers\WaliController;
Route::resource('wali', WaliController::class);