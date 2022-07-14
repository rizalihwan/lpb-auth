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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// API
Route::namespace('Api')->group(function () {
    // Auth Endpoint
    Route::prefix('auth')->group(function () {
        Route::post('/signin', 'AuthController@login');
        Route::post('/logout', 'AuthController@logout');
    });

    Route::get('/biaya-list', 'AuthController@getBiayaList');
});
