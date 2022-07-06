<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\ArtikelController;

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


Auth::routes();
//home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/ukm', [HomeController::class, 'ukm'])->name('ukm');
Route::get('/tentang', [HomeController::class, 'tentang'])->name('tentang');

//email
Route::post('/email', [EmailController::class, 'store'])->name('email.store');
Route::get('/success', [EmailController::class, 'index'])->name('email.index');



//mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');

Route::get('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'show'])->name('mahasiswa.show')->middleware('auth');

Route::get('/mahasiswa/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');

Route::put('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');

Route::delete('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');




//mata Kuliah
Route::get('/matakuliah', [MatakuliahController::class, 'index'])->name('matakuliah');


//artikel
Route::resource('artikels', ArtikelController::class);
