<?php

use App\Http\Controllers\AsetController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AfdellingController;
use App\Http\Controllers\AsetJenisController;
use App\Http\Controllers\AsetKodeController;
use App\Http\Controllers\HakAksesController;
use App\Http\Controllers\StatusPosisiController;
use App\Http\Controllers\SubUnitController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AsetTipeController;
use App\Http\Controllers\AsetKondisiController;
use Facade\FlareClient\Stacktrace\File;
use Faker\Provider\File as ProviderFile;
use Illuminate\Http\File as HttpFile;

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

// Route::apiResource('aset', AsetController::class);
Route::apiResource('afdelling', [AfdellingController::class]);
Route::apiResource('aset-jenis', [AsetJenisController::class]);
Route::apiResource('aset-kode', [AsetKodeController::class]);
Route::apiResource('hak-akses', [HakAksesController::class]);
Route::apiResource('status-posisi', [StatusPosisiController::class]);
Route::apiResource('sub-unit', [SubUnitController::class]);
Route::apiResource('unit', [UnitController::class]);
Route::apiResource('users', [UserController::class]);
Route::apiResource('aset-tipe', [AsetTipeController::class]);
Route::apiResource('aset-kondisi', [AsetKondisiController::class]);

Route::post('aset/edit', [AsetController::class, 'update']);
Route::get('aset/{id}', [AsetController::class, 'show']);
Route::get('aset/', [AsetController::class, 'index']);
Route::get('aset/kirim-data', [AsetController::class, 'kirimDataAset']);

