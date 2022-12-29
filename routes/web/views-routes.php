<?php

use App\Http\Controllers\ViewController;

Route::get('/sarisari', [ViewController::class, 'showIndex']);
Route::get('/sarisari/about', [ViewController::class, 'showAbout']);
Route::get('/sarisari/contacts', [ViewController::class, 'showContacts']);
Route::get('/sarisari/products-summary', [ViewController::class, 'showProductsSummary']);