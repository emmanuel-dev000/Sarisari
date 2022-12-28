<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    
    public function showIndex()
    {
        return view('sarisari.app.views.index');
    }

    public function showAbout()
    {
        return view('sarisari.app.views.about');
    }

    public function showContacts()
    {
        return view('sarisari.app.views.contacts');
    }

    public function showProducts()
    {
        return view('');
    }

}
