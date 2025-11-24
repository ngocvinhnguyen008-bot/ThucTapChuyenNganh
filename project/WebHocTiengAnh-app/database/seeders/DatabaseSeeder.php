<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed admin user first
        $this->call(AdminSeeder::class);

        // (users table/migrations not present in this project skeleton)
        // Skip creating users here. Seed only categories and products for testing.

        // Seed categories (used as courses)
        $categoriesData = [
            [
                'name' => 'Tiếng Anh Giao Tiếp',
                'slug' => 'tieng-anh-giao-tiep',
                'description' => 'Khóa học tiếng Anh giao tiếp hàng ngày',
                'level' => 'Beginner',
                'price' => 1500000,
                'teacher' => 'Cô Hoa',
                'status' => 'active',
            ],
            [
                'name' => 'Tiếng Anh Thương Mại',
                'slug' => 'tieng-anh-thuong-mai',
                'description' => 'Tiếng Anh chuyên dụng cho kinh doanh',
                'level' => 'Intermediate',
                'price' => 2000000,
                'teacher' => 'Thầy Minh',
                'status' => 'active',
            ],
            [
                'name' => 'Luyện Thi IELTS',
                'slug' => 'luyen-thi-ielts',
                'description' => 'Chuẩn bị cho kỳ thi IELTS',
                'level' => 'Advanced',
                'price' => 3000000,
                'teacher' => 'Thầy Tuấn',
                'status' => 'active',
            ],
        ];

        foreach ($categoriesData as $cat) {
            Category::firstOrCreate(['slug' => $cat['slug']], $cat);
        }

        // Seed sample products (lessons or child items) linked to categories
        $productsData = [
            [
                'category_id' => 1,
                'name' => 'Giới Thiệu Tiếng Anh Cơ Bản',
                'description' => 'Bài mở đầu cho khóa giao tiếp cơ bản',
                'price' => 0,
                'teacher' => 'Cô Hoa',
                'status' => 'active',
            ],
            [
                'category_id' => 1,
                'name' => 'Các Chủ Đề Giao Tiếp Hàng Ngày',
                'description' => 'Các chủ đề thông dụng trong giao tiếp',
                'price' => 0,
                'teacher' => 'Cô Hoa',
                'status' => 'active',
            ],
            [
                'category_id' => 2,
                'name' => 'Tiếng Anh Thương Mại - Module 1',
                'description' => 'Kiến thức cơ bản cho thương mại',
                'price' => 0,
                'teacher' => 'Thầy Minh',
                'status' => 'active',
            ],
        ];

        foreach ($productsData as $p) {
            Product::firstOrCreate(
                ['category_id' => $p['category_id'], 'name' => $p['name']],
                $p
            );
        }
    }
}
