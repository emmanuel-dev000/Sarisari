<?php

use App\Http\Controllers\ViewController;

Route::get('/sarisari', [ViewController::class, 'showIndex']);
Route::get('/sarisari/categories', [ViewController::class, 'showCategories']);
Route::get('/sarisari/about', [ViewController::class, 'showAbout']);
Route::get('/sarisari/contacts', [ViewController::class, 'showContacts']);