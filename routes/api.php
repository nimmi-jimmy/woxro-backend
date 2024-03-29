<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\BlogController;

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

Route::post("register",[UserController::class,'register']);

Route::post("career",[CareerController::class,'career']);

Route::post("blog",[BlogController::class,'blog']);

Route::post("login",[UserController::class,'login']);

Route::get("careers",[CareerController::class,'careers']);

Route::get("blogs",[BlogController::class,'blogs']);


