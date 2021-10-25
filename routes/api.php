<?php

use App\Http\Controllers\Api\EntryController;
use App\Http\Controllers\Api\ExitController;
use App\Http\Controllers\Api\ParkingFloorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassportAuthController;
use App\Http\Controllers\Api\PostController;

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

Route::post('register', [PassportAuthController::class, 'register']);
Route::post('login', [PassportAuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::post('entry', [EntryController::class, 'index']);
    Route::post('exit', [ExitController::class, 'index']);
    Route::post('create_floor', [ParkingFloorController::class, 'store']);
    Route::get('parking_floors', [ParkingFloorController::class, 'index']);
    Route::post('parking_floor', [ParkingFloorController::class, 'show']);
    Route::get('logout', [PassportAuthController::class, 'logout']);
});