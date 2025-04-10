<?php

use App\Http\Controllers\Auth\LoginControllerFixed;
use Illuminate\Support\Facades\Route;

Route::post('/login', [LoginControllerFixed::class, 'authenticate']);
