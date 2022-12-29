<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\ProductService;

class ProductDisplayController extends Controller
{

    public function showAllProducts()
    {
        $products = ProductService::getAllProducts();
        return view('sarisari.app.user.product.show-all-products')
                    ->with('products', $products);
    }
    
    public function showProductById($id)
    {
        $products = ProductService::getProductById($id);
        return view('sarisari.app.user.product.show-product')
                ->with('product', $product);
    }

    private function FunctionName(Type $var = null)
    {
        # code...
    }

}
