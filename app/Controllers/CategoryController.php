<?php
namespace App\Controllers;

use App\Models\Category;

class CategoryController
{
    public function categories()
    {
        $categories = Category::get();
        return view('categories', [
            'categories' => $categories
        ]);
    }
}