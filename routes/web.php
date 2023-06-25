<?php

use App\Http\Controllers\kategoricontroller;
use App\Http\Controllers\produkcontroller;
use Illuminate\Support\Facades\Route;

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

Route::controller(kategoricontroller::class)->prefix('kategori')->group(function () {
    Route::get('', 'index')->name('kategori');
    Route::get('tambah', 'tambah')->name('kategori.tambah');
    Route::post('tambah', 'simpan')->name('kategori.tambah.simpan');
    Route::get('edit/{id}', 'edit')->name('kategori.edit');
    Route::post('edit/{id}', 'update')->name('kategori.tambah.update');
    Route::get('hapus/{id}', 'hapus')->name('kategori.hapus');
}); 

Route::controller(produkcontroller::class)->prefix('produk')->group(function () {
    Route::get('', 'index')->name('produk');
    Route::get('tambah', 'tambah')->name('produk.tambah');
    Route::post('tambah', 'simpan')->name('produk.tambah.simpan');
    Route::get('edit/{id}', 'edit')->name('produk.edit');
    Route::post('edit/{id}', 'update')->name('produk.tambah.update');
    Route::get('hapus/{id}', 'hapus')->name('produk.hapus');
}); 

Route::controller(uploadcontroller::class)->prefix('upload')->group(function () {
Route::get('/upload', 'uploadcontroller@upload');
Route::post('/upload/proses', 'uploadcontroller@proses_upload');
});