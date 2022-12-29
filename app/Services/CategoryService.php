<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{

    public static function getAllProducts()
    {
        return Category::all();
    }

    public static function getProductById($id)
    {
        return Category::find($id);
    }
    
    public static function addNewCategory($category)
    {
        $category->save();
    }

}