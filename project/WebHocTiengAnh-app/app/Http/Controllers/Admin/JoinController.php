<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class JoinController extends Controller
{
    public function index()
    {
        // LEFT JOIN: Tất cả categories và products liên quan
        $joinedData = DB::select(
            "SELECT 
                c.id as category_id, 
                c.name as category_name, 
                c.level, 
                c.price as category_price, 
                c.teacher as category_teacher,
                c.description as category_description,
                p.id as product_id, 
                p.name as product_name, 
                p.description as product_description,
                p.price as product_price,
                p.teacher as product_teacher
            FROM categories c 
            LEFT JOIN products p ON c.id = p.category_id 
            ORDER BY c.id, p.id"
        );

        // INNER JOIN: Chỉ categories có products
        $innerJoinData = DB::select(
            "SELECT 
                c.id as category_id, 
                c.name as category_name, 
                c.level, 
                COUNT(p.id) as product_count,
                GROUP_CONCAT(p.name SEPARATOR ', ') as product_names
            FROM categories c 
            INNER JOIN products p ON c.id = p.category_id 
            GROUP BY c.id, c.name, c.level"
        );

        // Get raw categories and products count
        $categoriesCount = DB::table('categories')->count();
        $productsCount = DB::table('products')->count();

        return view('admin.join-tables', [
            'joinedData' => $joinedData,
            'innerJoinData' => $innerJoinData,
            'categoriesCount' => $categoriesCount,
            'productsCount' => $productsCount,
        ]);
    }
}
