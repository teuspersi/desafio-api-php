<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovieController;
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

// ================ Movies Routes ============================
Route::group(['middleware' => ['auth:sanctum']], function () {
    // Create movie
    Route::post('movies', [MovieController::class, 'store']);

    //Update Movie
    Route::put('movies/{id}', [MovieController::class, 'update']);

    //Remove movie
    Route::delete('movies/{id}', [MovieController::class, 'destroy']);
});

// Get all movies
Route::get('movies', [MovieController::class, 'show']);

// Get specific movie
Route::get('movies/{id}', [MovieController::class, 'showById']);


// ================== Actors routes =========================
Route::group(['middleware' => ['auth:sanctum']], function () {
    // Create actor
    Route::post('actors', [ActorController::class, 'store']);

    //Update actor
    Route::put('actors/{id}', [ActorController::class, 'update']);

    //Remove actor
    Route::delete('actors/{id}', [ActorController::class, 'destroy']);
});

// Get all actors
Route::get('actors', [ActorController::class, 'show']);

// Get specific actor
Route::get('actors/{id}', [ActorController::class, 'showById']);



// ================= User routes =============================

Route::group(['middleware' => ['auth:sanctum']], function () {
    // Logout user
    Route::post('logout', [AuthController::class, 'logout']);

    //Update user password
    Route::post('password/update', [AuthController::class, 'updatePassword']);
});

// Register new user
Route::post('register', [AuthController::class, 'register']);

//Login
Route::post('login', [AuthController::class, 'login']);
