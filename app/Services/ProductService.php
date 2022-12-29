<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{

    public static function getAllProducts()
    {
        return Product::all();
    }

    public static function getProductById($id)
    {
        return Product::find($id);
    }
    
    public static function getProductByName($name)
    {
        return Product::all()
            ->where('name', '=', $name);
    }

}