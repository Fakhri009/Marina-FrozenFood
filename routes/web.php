<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\kategoricontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');





//Route Artikel
Route::controller(ArtikelController::class)->prefix('artikel')->group(function () {
    Route::get('', 'index')->name('artikel');
    Route::get('create', 'create')->name('artikel.create');
    Route::post('create', 'simpan')->name('artikel.create.simpan');
    Route::get('edit/{id}', 'edit')->name('artikel.edit');
    Route::post('edit/{id}', 'update')->name('artikel.tambah.update');
    Route::get('hapus/{id}', 'hapus')->name('artikel.hapus');
}); 


//Route Kategori
Route::controller(kategoricontroller::class)->prefix('kategori')->group(function () {
    Route::get('', 'index')->name('kategori');
    Route::get('tambah', 'tambah')->name('kategori.tambah');
    Route::post('tambah', 'simpan')->name('kategori.tambah.simpan');
    Route::get('edit/{id}', 'edit')->name('kategori.edit');
    Route::post('edit/{id}', 'update')->name('kategori.tambah.update');
    Route::get('hapus/{id}', 'hapus')->name('kategori.hapus');
}); 