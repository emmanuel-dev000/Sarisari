<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\ProductService;
use App\Services\CategoryService;

class ViewController extends Controller
{
    
    public function showIndex()
    {
        $products = ProductService::getAllProducts();
        return view('sarisari.app.views.index')
            ->with('products', $products);
    }
    
    public function showProducts()
    {
        $products = ProductService::getAllProducts();
        $categories = CategoryService::getAllCategories();
        return view('sarisari.app.views.products')
            ->with('products', $products)
            ->with('categories', $categories);
    }
    
    public function showAbout()
    {
        return view('sarisari.app.views.about');
    }

    public function showContacts()
    {
        return view('sarisari.app.views.contacts');
    }
    
    public function showProfile()
    {
        return view('sarisari.app.views.profile');
    }

}
