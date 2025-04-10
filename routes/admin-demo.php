<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware(['auth:web', 'admin'])->group(function() {
    Route::get('/static-demo', function() {
        return view('admin.static-dashboard-v2');
    })->name('admin.static-demo');
});
