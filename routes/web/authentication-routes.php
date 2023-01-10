<?php

use App\Http\Controllers\ViewController;
use App\Http\Controllers\AdminViewController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [ViewController::class, 'showIndex']);
    })->name('/sarisari');