<?php

use App\Http\Controllers\Installer\InstallerController;
use Illuminate\Support\Facades\Route;

Route::get('/install', [InstallerController::class, 'index'])->name('installer.index');
