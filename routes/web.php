<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get("/admin/dashboard", [DashboardController::class, 'index'])->name('admin.dashboard');

Route::get('/', [AuthController::class, 'index'])->name('admin.login');
Route::post('/login', [AuthController::class, 'login'])->name('admin.make.login');
Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');


Route::get('/admin/user/list', [UserController::class, 'index'])->name('admin.user.list');
Route::get('/admin/user/delete/{id}', [UserController::class, 'delete'])->name('admin.user.delete');


Route::get('/location/list', [LocationController::class, 'index'])->name('admin.location.list');
Route::get('/location/create', [LocationController::class, 'create'])->name('admin.location.create');
Route::post('/location/store', [LocationController::class, 'store'])->name('admin.location.store');
Route::post('/location/update/{id}', [LocationController::class, 'update'])->name('admin.location.update');
Route::get('/location/edit/{id}', [LocationController::class, 'edit'])->name('admin.location.edit');
Route::get('/location/delete/{id}', [LocationController::class, 'delete'])->name('admin.location.delete');


Route::get('/job/list', [JobController::class, 'index'])->name('admin.job.list');
Route::get('/job/approved/{id}', [JobController::class, 'approved'])->name('admin.job.approved');
Route::post('/job/store/approved/{id}', [JobController::class, 'store_approved_job'])->name('admin.job.store_approved_job');
Route::get('/job/delete/{id}', [JobController::class, 'delete'])->name('admin.job.delete');