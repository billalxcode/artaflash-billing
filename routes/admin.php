<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RouterController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'role:admin']], function() {
    Route::get('', [DashboardController::class, 'index'])->name('dashboard');

    Route::group(['prefix' => 'router', 'as' => 'router.'], function() {
        Route::get('', [RouterController::class, 'index'])->name('table');
    });
});