<?php

use Illuminate\Support\Facades\Route;

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

Route::group([], __DIR__.'\web\authentication-routes.php');
Route::group([], __DIR__.'\web\views-routes.php');
Route::group([], __DIR__.'\web\products-display-routes.php');
Route::group([], __DIR__.'\web\admin-views-routes.php');