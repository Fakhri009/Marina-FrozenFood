<?php

use App\Models\Artikel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\promocontroller;
use App\Http\Controllers\produkcontroller;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\kategoricontroller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\dashboardcontrollers;
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


Route::get('/', [ArtikelController::class, 'show']);

Route::get('/products', [produkcontroller::class, 'show']);

Route::get('/about', function () {
    return view('about', [
        'title' => 'Hello',
        'second_title' => 'About Us',
        'body' => 'Terima kasih sudah menjadi pelanggan setia kami. Kami sangat menghargai upaya anda dalam menyampaikan keluhan/kritik & saran terhadap produk dan layanan kami. Untuk keluhan/kritik & saran bisa disampaikan melalui Email atau Direct Message ke Instagram kami'
    ]);
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/detail', function () {
    return view('detail', [
        'title' => 'Detail',
        'artikel' => Artikel::first()
    ]);
});

Route::get('/dashboard', function () {
   return view('dashboard');
})->name('dashboard')->middleware('auth');



    Route::controller(kategoricontroller::class)->prefix('kategori')->group(function () {
    Route::get('', 'index')->name('kategori');
    Route::get('tambah', 'tambah')->name('kategori.tambah');
    Route::post('tambah', 'simpan')->name('kategori.tambah.simpan');
    Route::get('edit/{id}', 'edit')->name('kategori.edit');
    Route::post('edit/{id}', 'update')->name('kategori.tambah.update');
    Route::get('hapus/{id}', 'hapus')->name('kategori.hapus');
})->middleware('auth'); 

Route::controller(produkcontroller::class)->prefix('produk')->group(function () {
    Route::get('', 'index')->name('produk');
    Route::get('tambah', 'tambah')->name('produk.tambah');
    Route::post('tambah', 'simpan')->name('produk.tambah.simpan');
    Route::get('edit/{id}', 'edit')->name('produk.edit');
    Route::post('edit/{id}', 'update')->name('produk.tambah.update');
    Route::get('hapus/{id}', 'hapus')->name('produk.hapus');
})->middleware('auth'); 

Route::controller(promocontroller::class)->prefix('promo')->group(function () {
    Route::get('', 'index')->name('promo');
    Route::get('tambah', 'tambah')->name('promo.tambah');
    Route::post('tambah', 'simpan')->name('promo.tambah.simpan');
    Route::get('edit/{id}', 'edit')->name('promo.edit');
    Route::post('edit/{id}', 'update')->name('promo.tambah.update');
    Route::get('hapus/{id}', 'hapus')->name('promo.hapus');
})->middleware('auth'); 

Route::controller(uploadcontroller::class)->prefix('upload')->group(function () {
Route::get('/upload', 'uploadcontroller@upload');
Route::post('/upload/proses', 'uploadcontroller@proses_upload');
})->middleware('auth');

Route::controller(ArtikelController::class)->prefix('artikel')->group(function () {
    Route::get('', 'index')->name('artikel');
    Route::get('create', 'create')->name('artikel.create');
    Route::post('create', 'simpan')->name('artikel.create.simpan');
    Route::get('edit/{id}', 'edit')->name('artikel.edit');
    Route::post('edit/{id}', 'update')->name('artikel.create.update');
    Route::get('destroy/{id}', 'destroy')->name('artikel.destroy');
})->middleware('auth'); 

Route::get('/login', [LoginController::class, 'showLoginForm']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Auth::routes();

//Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::controller(TransaksiController::class)->prefix('transaksi')->group(function () {
    Route::get('', 'index')->name('transaksi');
    Route::get('tambah', 'tambah')->name('transaksi.tambah');
    Route::post('tambah', 'simpan')->name('transaksi.tambah.simpan');
    Route::get('edit/{id}', 'edit')->name('transaksi.edit');
    Route::post('edit/{id}', 'update')->name('transaksi.tambah.update');
    Route::get('hapus/{id}', 'hapus')->name('transaksi.hapus');
})->middleware('auth'); 
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');