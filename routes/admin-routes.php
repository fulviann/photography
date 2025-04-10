<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware(['auth:web', config('middleware.admin')])->group(function() {
    // Route resource untuk CRUD
    Route::resource('', AdminController::class)->names([
        'index' => 'admin.dashboard',
        'create' => 'admin.create',
        'store' => 'admin.store', 
        'show' => 'admin.show',
        'edit' => 'admin.edit',
        'update' => 'admin.update',
        'destroy' => 'admin.destroy'
    ])->parameters([
        '' => 'id'
    ]);

    // Route khusus lainnya
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});
