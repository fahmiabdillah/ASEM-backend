<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AfdellingController;
use App\Http\Controllers\AsetKodeController;
use App\Http\Controllers\AsetJenisController;
use App\Http\Controllers\AsetController;
use App\Http\Controllers\HakAksesController;
use App\Http\Controllers\StatusPosisiController;
use App\Http\Controllers\SubUnitController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('/home', [AsetKodeController::class, 'index']);

Route::apiResource('afdeling', AfdellingController::class);
Route::apiResource('aset_kode', AsetKodeController::class);
Route::apiResource('aset_jenis', AsetJenisController::class);
Route::apiResource('data_aset', AsetController::class);
Route::apiResource('hak_akses', HakAksesController::class);
Route::apiResource('status_posisi', StatusPosisiController::class);
Route::apiResource('sub_unit', SubUnitController::class);
Route::apiResource('unit', UnitController::class);
Route::apiResource('users', UserController::class);
