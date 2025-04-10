<?php

// Include auth routes
require __DIR__.'/auth-routes.php';

// Static admin demo route
Route::get('/admin/static-dashboard', function() {
    return view('admin.static-dashboard');
});

// Include fixed admin routes 
require __DIR__.'/admin-fixed.php';

// Include other admin routes
require __DIR__.'/admin-new.php';

// Route yang sudah ada sebelumnya
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotographyController;

Route::get('/dashboard', function () {
    return view('admin.contents.index-tailwind');
})->middleware(['auth'])->name('dashboard');
Route::get('/', [PhotographyController::class, 'index'])->name('home');
Route::get('/photography', [PhotographyController::class, 'photography'])->name('photography');
Route::get('/photo/{id}', [PhotographyController::class, 'show'])->name('photo.show');
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::view('/about', 'pages.about')->name('about');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/project-7', 'pages.project-7')->name('project-7');

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
// Auth Routes
Route::controller(App\Http\Controllers\Auth\NewLoginController::class)->group(function() {
    Route::get('/login', function() {
        return view('auth.simple-login');
    })->name('login');
    Route::post('/login', 'authenticate');
});

// Authentication Routes
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::get('/corporate', function () {
    // You would create a corporate.blade.php view for this
    return view('pages.corporate');
})->name('corporate');

Route::get('/architecture', function () {
    // You would create an architecture.blade.php view for this
    return view('pages.architecture');
})->name('architecture');

Route::get('/creative', function () {
    // You would create a creative.blade.php view for this
    return view('pages.creative');
})->name('creative');

Route::get('/freelancer', function () {
    // You would create a freelancer.blade.php view for this
    return view('pages.freelancer');
})->name('freelancer');

Route::get('/personal', function () {
    // You would create a personal.blade.php view for this
    return view('pages.personal');
})->name('personal');


// Portfolio routes
Route::get('/work', function () {
    // You would create a work.blade.php view for this
    return view('pages.work');
})->name('work');

Route::get('/work-2', function () {
    // You would create a work-2.blade.php view for this
    return view('pages.work-2');
})->name('work-2');

Route::get('/work-3', function () {
    // You would create a work-3.blade.php view for this
    return view('pages.work-3');
})->name('work-3');

Route::get('/work-4', function () {
    // You would create a work-4.blade.php view for this
    return view('pages.work-4');
})->name('work-4');

Route::get('/work-5', function () {
    // You would create a work-5.blade.php view for this
    return view('pages.work-5');
})->name('work-5');

Route::get('/work-hover', function () {
    // You would create a work-hover.blade.php view for this
    return view('pages.work-hover');
})->name('work-hover');

Route::get('/work-horizontal-scroll', function () {
    // You would create a work-horizontal-scroll.blade.php view for this
    return view('pages.work-horizontal-scroll');
})->name('work-horizontal-scroll');

// Project routes
Route::get('/project-1', function () {
    // You would create a project-1.blade.php view for this
    return view('pages.project-1');
})->name('project-1');

Route::get('/project-2', function () {
    // You would create a project-2.blade.php view for this
    return view('pages.project-2');
})->name('project-2');

Route::get('/project-3', function () {
    // You would create a project-3.blade.php view for this
    return view('pages.project-3');
})->name('project-3');

Route::get('/project-4', function () {
    // You would create a project-4.blade.php view for this
    return view('pages.project-4');
})->name('project-4');

Route::get('/project-5', function () {
    // You would create a project-5.blade.php view for this
    return view('pages.project-5');
})->name('project-5');

Route::get('/project-6', function () {
    // You would create a project-6.blade.php view for this
    return view('pages.project-6');
})->name('project-6');

Route::get('/photo', function () {
    // You would create a project-6.blade.php view for this
    return view('pages.photo');
})->name('photo');



Route::get('/admin/dashboard1', function () {
    return view('admin.dashboard');
});