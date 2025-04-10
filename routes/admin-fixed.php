<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ContentControllerFixed;

Route::prefix('admin')->middleware(['auth:web', \App\Http\Middleware\EnsureIsAdmin::class])->group(function() {
    Route::resource('contents', ContentControllerFixed::class)->names([
        'index' => 'admin.contents.index',
        'create' => 'admin.contents.create',
        'store' => 'admin.contents.store',
        'show' => 'admin.contents.show',
        'edit' => 'admin.contents.edit',
        'update' => 'admin.contents.update', 
        'destroy' => 'admin.contents.destroy'
    ]);
});
