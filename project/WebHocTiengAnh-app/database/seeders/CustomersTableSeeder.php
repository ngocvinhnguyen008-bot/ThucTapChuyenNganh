<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

        DB::table('customers')->insert([
            [
                'name' => 'Nguyễn Văn A',
                'email' => 'nguyenvana@example.com',
                'phone' => '0912345678',
                'address' => 'Hà Nội',
                'note' => 'Khách hàng VIP',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Trần Thị B',
                'email' => 'tranthib@example.com',
                'phone' => '0987654321',
                'address' => 'Hồ Chí Minh',
                'note' => 'Quan tâm khóa IELTS',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Lê Văn C',
                'email' => 'levanc@example.com',
                'phone' => '0901122334',
                'address' => 'Đà Nẵng',
                'note' => 'Cần hỗ trợ về lịch học',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
