<?php

use App\Http\Controllers\Api\AuthController;

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

// Rutas de autentificación

Route::post('/login', [AuthController::class, 'login']);
Route::post("/signup", [AuthController::class, "signup"]);
// Route::get("/user", [AuthController::class, "getUser"]);




//TODO: RUTAS PROTEGIDAS POR SANCTUM
Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::post("/logout", [AuthController::class, "logout"]);
});
