<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ReportController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

route::middleware('json.response')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::post('login', 'login');
    });

    Route::middleware('auth:api')->group(function () {
        Route::controller(ReportController::class)->prefix('reports')->group(function () {
            Route::get('views', 'viewsReport');
            Route::get('search', 'searchReport');
        });
    });
});
