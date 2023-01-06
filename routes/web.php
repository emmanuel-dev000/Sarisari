<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;


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
    Route::get('/dashboard', [ViewController::class, 'showIndex']);
    })->name('/sarisari');



Route::group([], __DIR__.'\web\views-routes.php');
Route::group([], __DIR__.'\web\products-display-routes.php');
Route::group([], __DIR__.'\web\admin-views-routes.php');