<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\ProductDisplayController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

# Views
    Route::get('/sarisari', [ViewController::class, 'showIndex']);
    Route::get('/sarisari/about', [ViewController::class, 'showAbout']);
    Route::get('/sarisari/contacts', [ViewController::class, 'showContacts']);
    Route::get('/sarisari/products-summary', [ViewController::class, 'showProductsSummary']);

# Products Display
    Route::get('/sarisari/products/', [ProductDisplayController::class, 'showAllProducts']);