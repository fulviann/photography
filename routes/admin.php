<?php

use App\Http\Controllers\Admin\NewDashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'admin'])->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    
    // Tambahkan route admin lainnya di sini
});
