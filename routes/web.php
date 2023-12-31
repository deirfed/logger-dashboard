<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeviceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::controller(LoginController::class)->group(function () {
    Route::get('/', 'login')->name('login.index');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/management-user', 'index')->name('management-user.index');
    Route::get('/management-user-create', 'create')->name('management-user.create');
});

Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')->name('dashboard.index');
});

Route::controller(DeviceController::class)->group(function () {
    Route::get('/device', 'index')->name('device.index');
    Route::get('/add-device', 'create')->name('device.create');
});

Route::controller(TransactionController::class)->group(function () {
    Route::get('/transaction', 'index')->name('transaction.index');
});

