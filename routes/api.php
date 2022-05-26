<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
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
Route::group([
    'prefix' => 'courses',
    'middleware' => 'auth',
    'role' => 'admin'
], function ($router) {
    Route::get('', [CourseController::class, 'index']);
    Route::get('{id}', [CourseController::class, 'show']);
    Route::post('', [CourseController::class, 'store']);
    Route::delete('{course}', [CourseController::class, 'destroy']);
    Route::put('{course}', [CourseController::class, 'update']);
    Route::put('addUsers/{course}', [CourseController::class, 'addUsers']);
});

Route::group([
    'prefix' => 'users',
    'middleware' => 'auth'
], function ($router) {
    Route::post('registration', [UserController::class, 'store']);
    Route::put('{user}', [UserController::class, 'update']);
});

Route::group([
    'prefix' => 'auth',
    'middleware' => 'api'
], function ($router) {
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
});




