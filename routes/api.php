<?php

use App\Models\Kasus;
use App\Models\Provinsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProvinsiController;
use App\Http\Controllers\Api\ApiController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// // api provinsi
// Route::get('provinsi',[ProvinsiController::class, 'index']);
// Route::post('provinsi',[ProvinsiController::class, 'store']);
// Route::get('provinsi/{id}',[ProvinsiController::class, 'show']);
// Route::delete('provinsi/{id}',[ProvinsiController::class, 'destroy']);

// API KASUS
Route::get('global',[ApiController::class, 'global']);
Route::get('indonesia',[ApiController::class, 'indonesia']);
Route::get('indonesia/provinsi',[ApiController::class, 'provinsi']);
Route::get('indonesia/provinsi/kota',[ApiController::class, 'kota']);
Route::get('indonesia/provinsi/kota/kecamatan',[ApiController::class, 'kecamatan']);
Route::get('indonesia/provinsi/kota/kecamatan/kelurahan',[ApiController::class, 'kelurahan']);
// Route::get('indonesia/provinsi/{id}',[ApiController::class, 'provinsi2']);
    