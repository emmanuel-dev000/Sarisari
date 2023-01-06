<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminViewController extends Controller
{
    
    public function showAdminDashboard()
    {
        return view('sarisari.app.admin.dashboard.views.index');
    }

}
