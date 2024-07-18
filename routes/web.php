<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/auth/login');

Route::group(['prefix' => 'auth', 'as' => 'auth.', 'middleware' => 'guest'], function () {
    Route::get('login', [AuthController::class, 'index'])->name('login.home');
    Route::post('login', [AuthController::class, 'action'])->name('login.action');
});

require_once __DIR__ . '/admin.php';
require_once __DIR__ . '/teknisi.php';
require_once __DIR__ . '/pelanggan.php';