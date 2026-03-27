<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ServerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/servers', [ServerController::class, 'index'])->name('servers.index');
Route::get('/servers/{slug}', [ServerController::class, 'show'])->name('servers.show');

Route::middleware(['auth'])->group(function (): void {
    Route::get('/submit-server/rules', [ServerController::class, 'rules'])->name('servers.rules');
    Route::get('/submit-server', [ServerController::class, 'create'])->name('servers.create');
});

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function (): void {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});
