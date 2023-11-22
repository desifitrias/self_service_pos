<?php

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

 
// Route::get('/about', function () {
//     return 'Halaman About';
// });

// Route::get('/about{search}', function () {
//     $data = [
//         'pageTitle' => 'Tentang Kami',
//         'content' => 'Ini adalah halaman tentang kami.'
//     ];
//     return view('about', $data);
// });

// route::get('/produk','App\Http\Controllers\ProdukController@index');

// route::get('/produk/tambah_produk','ProdukController@tambah');
// route::post('/produk/simpan_produk','produkController@simpan');
// route::get('/produk/ubah_produk/{id}','ProdukController@ubah');
// route::post('/produk/update_produk/{id}','ProdukController@update');

// routes/web.php
// use App\Http\Controllers\UserController;

// Route::get('/user', [UserController::class, 'index'])->name('user.index');
// Route::get('/user/tambah_user', [UserController::class, 'tambah'])->name('user.tambah');
// Route::post('/user/simpan_user', [UserController::class, 'simpan'])->name('user.simpan');
// Route::get('/user/ubah_user/{id}', [UserController::class, 'ubah'])->name('user.ubah');
// Route::post('/user/update_user/{id}', [UserController::class, 'update'])->name('user.update');

use App\Http\Controllers\UserController;

Route::resource('user', UserController::class);





