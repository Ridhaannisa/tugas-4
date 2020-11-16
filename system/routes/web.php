<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ClientProdukController;
use App\Http\Controllers\UserController;

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

// Halaman Admin
Route::get('admin/beranda', [HomeController::class, 'showBeranda']);
Route::get('admin/kategori', [HomeController::class, 'showKategori']);
Route::get('admin/login', [AuthController::class, 'showLogin']);
Route::get( 'admin/registrasi', [AuthController::class, 'registrasi']);

// Halaman Admin Produk
Route::get('admin/produk', [ProdukController::class, 'index']);
Route::get('admin/produk/create', [ProdukController::class, 'create']);
Route::post('admin/produk', [ProdukController::class, 'store']);
Route::get('admin/produk/{produk}', [ProdukController::class, 'show']);
Route::get('admin/produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('admin/produk/{produk}', [ProdukController::class, 'update']);
Route::delete('admin/produk/{produk}', [ProdukController::class, 'destroy']);

// Halaman Admin Kategori
Route::get('admin/kategori', [KategoriController::class, 'index']);
Route::get('admin/kategori/create', [KategoriController::class, 'create']);
Route::post('admin/kategori', [KategoriController::class, 'store']);
Route::get('admin/kategori/{kategori}', [KategoriController::class, 'show']);
Route::get('admin/kategori/{kategori}/edit', [KategoriController::class, 'edit']);
Route::put('admin/kategori/{kategori}', [KategoriController::class, 'update']);
Route::delete('admin/kategori/{kategori}', [KategoriController::class, 'destroy']);

// Halaman Client
Route::get('index', [ClientProdukController::class, 'index']);
Route::get('/', [ClientProdukController::class, 'index']);
Route::get('/beli/{produk}', [ClientProdukController::class, 'create']);
Route::post('beli', [ClientProdukController::class, 'store']);
Route::get('pesanan', [ClientProdukController::class, 'lihat']);
Route::get('/detail/{produk}', [ClientProdukController::class, 'show']);
Route::get('pesanan/edit/{produk}', [ClientProdukController::class, 'edit']);
Route::put('pesanan/{produk}', [ClientProdukController::class, 'update']);
Route::delete('pesanan/{produk}', [ClientProdukController::class, 'destroy']);


// Halaman Login
Route::get('login', [AuthController::class, 'showLogin']);

// Halaman Registrasi
Route::get('registrasi', [AuthController::class, 'showRegistrasi']);