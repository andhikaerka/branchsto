<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// load controllers
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\StableController;
use App\Http\Controllers\Api\ClubController;
use App\Http\Controllers\Api\HorseController;

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

// User API
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

// Stable API
Route::post('stable', [StableController::class, 'store']);
Route::put('stable/{stable}', [StableController::class, 'update']);
Route::delete('stable/{stable}', [StableController::class, 'destroy']);

// Club API
Route::post('club', [ClubController::class, 'store']);
Route::put('club/{club}', [ClubController::class, 'update']);
Route::delete('club/{club}', [ClubController::class, 'destroy']);

// Horse API
Route::post('horse', [HorseController::class, 'store']);
Route::put('horse/{horse}', [HorseController::class, 'update']);
Route::delete('horse/{horse}', [HorseController::class, 'destroy']);
