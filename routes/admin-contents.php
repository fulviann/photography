<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ContentControllerNew;

Route::prefix('admin')->middleware(['auth:web', 'admin'])->group(function() {
    Route::resource('contents', ContentControllerNew::class)->names([
        'create' => 'admin.contents.create',
        'store' => 'admin.contents.store'
    ]);
});
