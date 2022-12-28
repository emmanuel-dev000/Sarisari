<?php

namespace App\Services;

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

}