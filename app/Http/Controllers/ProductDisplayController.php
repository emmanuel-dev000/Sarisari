<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\ProductService;

class ProductDisplayController extends Controller
{

    private function showAllProductsByName($name)
    {
        $products = ProductService::getAllProductsByName($name);
        return view('sarisari.app.user.product.show-product')
                ->with('$products', $products);
    }
    
    public function showProductById($id)
    {
        $product = ProductService::getProductById($id);
        return view('sarisari.app.user.product.show-product')
                ->with('product', $product);
    }

}
