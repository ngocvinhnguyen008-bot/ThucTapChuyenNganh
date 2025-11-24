@extends('layout/admin')
@section('body')
    <div class="px-4 py-4">
        <h1 class="h3 mb-4 text-gray-800">🔗 Nối 2 Bảng: Categories & Products</h1>
        
        <!-- Statistics -->
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="text-primary text-uppercase mb-1"><small>Tổng Khóa Học</small></div>
                        <div class="h3 mb-0 font-weight-bold text-gray-800">{{ $categoriesCount }}</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="text-success text-uppercase mb-1"><small>Tổng Bài Học</small></div>
                        <div class="h3 mb-0 font-weight-bold text-gray-800">{{ $productsCount }}</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="text-info text-uppercase mb-1"><small>Mối Quan Hệ</small></div>
                        <div class="h3 mb-0 font-weight-bold text-gray-800">1-to-M</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- LEFT JOIN Result -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 bg-primary">
                <h6 class="m-0 font-weight-bold text-white">📊 LEFT JOIN: Tất Cả Khóa Học & Bài Học</h6>
            </div>
            <div class="card-body">
                <p class="text-muted"><small>Hiển thị tất cả khóa học (categories) và bài học liên quan (products). Nếu khóa học không có bài học, các cột product sẽ trống.</small></p>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead class="table-primary">
                            <tr>
                                <th>Khóa Học</th>
                                <th>Mã Khóa</th>
                                <th>Cấp Độ</th>
                                <th>Giá Khóa</th>
                                <th>Giáo Viên (Khóa)</th>
                                <th>Bài Học</th>
                                <th>Mã Bài</th>
                                <th>Giá Bài</th>
                                <th>Giáo Viên (Bài)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($joinedData as $row)
                                <tr style="background-color: {{ $loop->iteration % 2 == 0 ? '#f9f9f9' : 'white' }};">
                                    <td>
                                        <strong>{{ $row->category_name }}</strong>
                                        <br>
                                        <small class="text-muted">{{ $row->category_description }}</small>
                                    </td>
                                    <td><code>{{ $row->category_id }}</code></td>
                                    <td><span class="badge badge-success">{{ $row->level }}</span></td>
                                    <td>{{ number_format($row->category_price, 0, ',', '.') }} VNĐ</td>
                                    <td>{{ $row->category_teacher ?? '-' }}</td>
                                    <td>
                                        @if($row->product_id)
                                            <strong>{{ $row->product_name }}</strong>
                                            <br>
                                            <small class="text-muted">{{ $row->product_description }}</small>
                                        @else
                                            <span class="text-danger">❌ Chưa có bài học</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($row->product_id)
                                            <code>{{ $row->product_id }}</code>
                                        @else
                                            <span class="text-muted">-</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($row->product_price)
                                            {{ number_format($row->product_price, 0, ',', '.') }} VNĐ
                                        @else
                                            <span class="text-muted">-</span>
                                        @endif
                                    </td>
                                    <td>{{ $row->product_teacher ?? '-' }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center text-muted">Không có dữ liệu</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- INNER JOIN Result -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 bg-success">
                <h6 class="m-0 font-weight-bold text-white">📈 INNER JOIN: Khóa Học Có Bài Học</h6>
            </div>
            <div class="card-body">
                <p class="text-muted"><small>Hiển thị chỉ những khóa học có bài học, cùng với danh sách bài học và số lượng bài học.</small></p>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead class="table-success">
                            <tr>
                                <th>Khóa Học</th>
                                <th>Mã Khóa</th>
                                <th>Cấp Độ</th>
                                <th>Số Bài Học</th>
                                <th>Danh Sách Bài Học</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($innerJoinData as $row)
                                <tr style="background-color: {{ $loop->iteration % 2 == 0 ? '#f9f9f9' : 'white' }};">
                                    <td><strong>{{ $row->category_name }}</strong></td>
                                    <td><code>{{ $row->category_id }}</code></td>
                                    <td><span class="badge badge-success">{{ $row->level }}</span></td>
                                    <td><span class="badge badge-primary">{{ $row->product_count }}</span></td>
                                    <td>
                                        @if($row->product_names)
                                            @foreach(explode(', ', $row->product_names) as $product)
                                                <div class="badge badge-light mb-2">{{ $product }}</div>
                                            @endforeach
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted">Không có khóa học nào có bài học</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- SQL Queries -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 bg-dark">
                <h6 class="m-0 font-weight-bold text-white">📝 Câu Lệnh SQL</h6>
            </div>
            <div class="card-body">
                <p><strong>1. LEFT JOIN (Tất cả categories + products liên quan):</strong></p>
                <pre style="background: #f5f5f5; padding: 15px; border-radius: 5px; overflow-x: auto;"><code>SELECT 
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
ORDER BY c.id, p.id;</code></pre>

                <p class="mt-4"><strong>2. INNER JOIN (Chỉ categories có products):</strong></p>
                <pre style="background: #f5f5f5; padding: 15px; border-radius: 5px; overflow-x: auto;"><code>SELECT 
    c.id as category_id, 
    c.name as category_name, 
    c.level, 
    COUNT(p.id) as product_count,
    GROUP_CONCAT(p.name SEPARATOR ', ') as product_names
FROM categories c 
INNER JOIN products p ON c.id = p.category_id 
GROUP BY c.id, c.name, c.level;</code></pre>

                <p class="mt-4"><strong>3. Kiểm Tra Foreign Key Constraint:</strong></p>
                <pre style="background: #f5f5f5; padding: 15px; border-radius: 5px; overflow-x: auto;"><code>SELECT CONSTRAINT_NAME, TABLE_NAME, COLUMN_NAME, 
       REFERENCED_TABLE_NAME, REFERENCED_COLUMN_NAME
FROM INFORMATION_SCHEMA.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = 'web_hoc_tieng_anh' 
  AND REFERENCED_TABLE_NAME = 'categories';</code></pre>
            </div>
        </div>

        <!-- Legend & Info -->
        <div class="alert alert-info" role="alert">
            <h5 class="alert-heading">💡 Giải Thích Các Loại JOIN:</h5>
            <ul class="mb-0">
                <li><strong>LEFT JOIN:</strong> Lấy tất cả bản ghi từ bảng trái (categories) và các bản ghi phù hợp từ bảng phải (products)</li>
                <li><strong>INNER JOIN:</strong> Chỉ lấy bản ghi có tương ứng trong cả hai bảng</li>
                <li><strong>Foreign Key (category_id):</strong> Cột liên kết giữa hai bảng, đảm bảo tính toàn vẹn dữ liệu</li>
                <li><strong>Mối Quan Hệ:</strong> 1 Category → Many Products (1-to-Many Relationship)</li>
            </ul>
        </div>
    </div>
@endsection
