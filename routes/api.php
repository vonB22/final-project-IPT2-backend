<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Public routes (registration & login)
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Protected routes (requires authentication via Sanctum)
Route::middleware('auth:sanctum')->group(function () {
    // Route to get the authenticated user's info
    Route::get('/user', [AuthController::class, 'user']);

    // Route to log the user out (invalidate the Sanctum token)
    Route::post('/logout', [AuthController::class, 'logout']);
});
