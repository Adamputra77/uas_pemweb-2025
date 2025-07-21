<?php

use App\Http\Controllers\InformasiKendaraanController;
use Illuminate\Support\Facades\Route;

Route::prefix('informasi-kendaraan')->middleware('apikey')->group(function () {
    Route::get('/', [InformasiKendaraanController::class, 'index']);
    Route::post('/', [InformasiKendaraanController::class, 'store']);
    Route::get('{id}', [InformasiKendaraanController::class, 'show']);
    Route::put('{id}', [InformasiKendaraanController::class, 'update']);
    Route::delete('{id}', [InformasiKendaraanController::class, 'destroy']);
});
