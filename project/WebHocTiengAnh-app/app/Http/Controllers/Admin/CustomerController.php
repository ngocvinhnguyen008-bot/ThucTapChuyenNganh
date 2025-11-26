<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class CustomerController extends Controller
{
    public function index()
    {
        // Lấy tất cả dữ liệu từ bảng customers
        $customers = \DB::table('customers')->orderBy('created_at', 'desc')->get();
        return view('admin.customer.category-list', [
            'customers' => $customers,
        ]);

        
    }
}