<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something grea
|
*/

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\AnalisisController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\PesananController;

use App\Http\Controllers\DataPesananController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProfilTokoController;
use App\Http\Controllers\AlamatController;
use App\Http\Controllers\AkunController;


use App\Http\Controllers\AsikController;
Route::get('/asik', [AsikController::class, 'index']);


Route::get('/', [DashboardController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/toko', [TokoController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/add_kategori', [KategoriController::class, 'add_kategori']);
Route::post('/PostAddKategori', [KategoriController::class, 'PostAddKategori']);
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/add_produk', [ProdukController::class, 'add_produk']);
Route::post('/PostAddProduk', [ProdukController::class, 'PostAddProduk']);
Route::get('/tampilkan_produk/{id}', [ProdukController::class, 'tampilkan_produk']);

Route::get('/pelanggan', [PelangganController::class, 'index']);
Route::get('/analisis', [AnalisisController::class, 'index']);
Route::get('/pengaturan', [PengaturanController::class, 'index']);
Route::get('/pesanan', [PesananController::class, 'index']);

// Route::get('/datapesanan', function () {
//     return view('datapesanan');
// });

Route::get('/datapesanan', 'App\Http\Controllers\PesananController@DataPesanan');

// Route::get('/datapesanan', [DataPesananController::class, 'index']);
Route::get('/penilaian', [PenilaianController::class, 'index']);
// Route::get('/kategori', [KategoriController::class, 'index']);

// Route::get('/addkategori', 'App\Http\Controllers\AddKategoriController@index');
// Route::post('/PostAddKategori', 'App\Http\Controllers\AddKategoriController@PostAddKategori');

Route::get('/profilToko', [ProfilTokoController::class, 'index']);
Route::get('/alamat', [AlamatController::class, 'index']);
Route::get('/akun', [AkunController::class, 'index']);
// Add more routes for other menu items
