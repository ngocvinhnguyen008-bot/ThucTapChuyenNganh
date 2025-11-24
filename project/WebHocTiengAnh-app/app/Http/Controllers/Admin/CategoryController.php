<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('created_at', 'desc')->get();
        return view('admin.category.category-list', compact('categories'));
    }

    public function create()
    {
        return view('admin.product.product-add');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'nullable|string|max:100',
            'price' => 'nullable|numeric',
            'teacher' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'status' => 'nullable|string',
        ]);

        // Normalize status and slug
        $data['status'] = $request->has('status') ? 'active' : ($data['status'] ?? 'draft');
        $data['slug'] = isset($data['name']) ? Str::slug($data['name']) : null;

        Category::create($data);

        return redirect()->route('admin.categories')->with('success', 'Thêm khóa học thành công!');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.category-edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'nullable|string|max:100',
            'price' => 'nullable|numeric',
            'teacher' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'status' => 'nullable|string',
        ]);

        $data['status'] = $request->has('status') ? 'active' : ($data['status'] ?? 'draft');
        $data['slug'] = isset($data['name']) ? Str::slug($data['name']) : $category->slug;

        $category->update($data);

        return redirect()->route('admin.categories')->with('success', 'Cập nhật khóa học thành công!');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('admin.categories')->with('success', 'Xóa khóa học thành công!');
    }
}
