<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\MasyarakatController;

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
    return view('guest.index');
})->middleware('guest');


Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::resource('/home', HomeController::class)->middleware('auth');


Route::get('/dashboard', [AdminController::class, 'index'])->middleware('admin');
Route::resource('masyarakat', MasyarakatController::class)->middleware('admin');
Route::resource('/petugas', PetugasController::class)->middleware('admin');

Route::get('/pengaduan', [AdminController::class, 'pengaduan']);
Route::get('/pengaduan/{id}/edit', [AdminController::class, 'edit_pengaduan']);

Route::post('/pengaduan/{id}', [AdminController::class, 'update_pengaduan']);


Route::get('/downloadpdf', [DownloadController::class, 'index']);

