<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\PengarangController;
use App\Models\Pengarang;

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

Route::get('/index', function () {
    return view('index');
});

Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [AdminController::class, 'dashboard'])->name('home');

Route::get('/dashboard', [AdminController::class, 'dashboard']);
Route::get('/katalog', [AdminController::class, 'katalog']);
Route::get('/penerbit', [AdminController::class, 'penerbit']);
Route::get('/pengarang', [AdminController::class, 'pengarang']);
Route::get('/anggota', [AdminController::class, 'anggota']);

Route::prefix('data')->group(function () {
    Route::resource('/katalog', KatalogController::class);
    Route::resource('/penerbit', PenerbitController::class);
    Route::resource('/pengarang', PengarangController::class);
});
