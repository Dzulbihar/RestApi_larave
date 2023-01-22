<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

    Route::get('siswa', [App\Http\Controllers\SiswaController::class, 'index']);
    Route::post('siswa', [App\Http\Controllers\SiswaController::class, 'create']);
    Route::get('siswa/{id}', [App\Http\Controllers\SiswaController::class, 'detail']);
    Route::put('siswa/{id}', [App\Http\Controllers\SiswaController::class, 'update']);
    Route::delete('siswa/{id}', [App\Http\Controllers\SiswaController::class, 'delete']);