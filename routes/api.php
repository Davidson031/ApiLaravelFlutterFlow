<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


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


Route::get('clients', [\App\Http\Controllers\ApiController::class, 'getAllClients']);


Route::post('client', [\App\Http\Controllers\ApiController::class, 'getClient']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
