<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    
    public function showIndex()
    {
        return view('sarisari.app.index');
    }

    public function showAbout()
    {
        return view('sarisari.app.about');
    }

    public function showContacts()
    {
        return view('sarisari.app.contacts');
    }

}
