<?php

use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\BorrowController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::apiResource('books', BookController::class);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/me', [AuthController::class, 'me']);
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::post('/borrow', [BorrowController::class, 'borrow']);
    Route::post('/return', [BorrowController::class, 'returnBook']);
    Route::get('/my-borrows', [BorrowController::class, 'myBorrows']);
    

});
