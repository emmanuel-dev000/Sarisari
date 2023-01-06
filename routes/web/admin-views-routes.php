<?php

use App\Http\Controllers\AdminViewController;

Route::get('/sarisari/{userName}/dashboard', [AdminViewController::class, 'showAdminDashboard']);