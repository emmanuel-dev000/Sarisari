<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{

    public static function getAllCategories()
    {
        return Category::all();
    }

    public static function getCategoryById($id)
    {
        return Category::find($id);
    }
    
    public static function addNewCategory($category)
    {
        $category->save();
    }

}