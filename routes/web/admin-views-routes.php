<?php

use App\Http\Controllers\AdminViewController;

Route::get('/sarisari/dashboard', [AdminViewController::class, 'showAdminDashboard']);