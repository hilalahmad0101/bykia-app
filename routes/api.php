<?php

use App\Http\Controllers\Api\User\AuthController;
use App\Http\Controllers\Api\User\JobController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Route::controller(controller: AuthController::class)->group(callback: function () {
//     Route::post(uri: '/user/register', action: 'register');
// });

Route::post('/user/register', [AuthController::class, 'register']);
Route::post('/user/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user/job/list', [JobController::class, 'job_list']);
    Route::post('/user/job/create', [JobController::class, 'store']);
});
