<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\restauranteApiController;

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

Route::get('/restaurante', [restauranteApiController::class, 'apiAll']);

Route::get('/restaurante/{restaurante}', [restauranteApiController::class, 'apiFind']);

Route::post('/restaurante', [restauranteApiController::class, 'apiStore']);

Route::put('/restaurante/{restaurante}', [restauranteApiController::class, 'apiUpdate']);

Route::delete('/restaurante/{restaurante}', [restauranteApiController::class, 'apiDelete']);
