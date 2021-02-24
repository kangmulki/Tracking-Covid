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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('admin', function () {
//     return view('index');
// });


Route::get('admin', function() {
    return view('utama');
});
use App\Http\Controllers\ProvinsiController;
Route::resource('admin/provinsi', ProvinsiController::class);

use App\Http\Controllers\KotaController;
Route::resource('admin/kota', KotaController::class);

use App\Http\Controllers\KecamatanController;
Route::resource('admin/kecamatan', KecamatanController::class);

use App\Http\Controllers\KelurahanController;
Route::resource('admin/kelurahan', KelurahanController::class);

use App\Http\Controllers\RwController;
Route::resource('admin/rw', RwController::class);

use App\Http\Controllers\KasusController;
Route::resource('admin/kasus', KasusController::class); 

use App\Http\Controllers\ReportController;
Route::resource('/', ReportController::class); 



Route::view('states-city','livewire.home');














Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
