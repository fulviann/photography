<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotographyController;

// Route utama
Route::get('/', [PhotographyController::class, 'index'])->name('home');

// Route halaman statis
Route::view('/about', 'pages.about')->name('about');
Route::view('/contact', 'pages.contact')->name('contact');

// Route portfolio photography
Route::get('/photography', [PhotographyController::class, 'photography'])->name('photography');
Route::get('/photo/{id}', [PhotographyController::class, 'show'])->name('photo.show');

// Route project detail
Route::get('/project-7', function() {
    return view('pages.project-7');
})->name('project-7');

// Route yang sudah ada sebelumnya tetap dipertahankan
// ... [tambahkan route lain yang diperlukan]
