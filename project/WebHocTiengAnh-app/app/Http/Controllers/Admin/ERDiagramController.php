<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class ERDiagramController extends Controller
{
    public function index()
    {
        $categories = Category::with('products')->get();
        $categoriesCount = Category::count();
        $productsCount = Product::count();

        return view('admin.er-diagram', [
            'categories' => $categories,
            'categoriesCount' => $categoriesCount,
            'productsCount' => $productsCount,
        ]);
    }
}
