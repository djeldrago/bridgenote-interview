<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;

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

Route::get('/users', [UserController::class, 'index']);
Route::post('/user/store', [UserController::class, 'store']);
Route::get('/user/{id}', [UserController::class, 'show']);
Route::patch('/user/{id}/update', [UserController::class, 'update']);
Route::delete('/user/{id}/delete', [UserController::class, 'destroy']);