<?php

use App\Http\Controllers\ProductDisplayController;

Route::get('/sarisari/products/', [ProductDisplayController::class, 'showAllProducts']);
Route::get('/sarisari/products/{id}', [ProductDisplayController::class, 'showProductById']);