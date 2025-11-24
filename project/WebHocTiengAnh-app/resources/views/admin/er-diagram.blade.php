@extends('layout/admin')
@section('body')
    <div class="px-4 py-4">
        <h1 class="h3 mb-4 text-gray-800">📊 Biểu Đồ Mối Quan Hệ Database (ER Diagram)</h1>
        
        <!-- ER Diagram Visualization -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 bg-primary">
                <h6 class="m-0 font-weight-bold text-white">Liên Kết Cha-Con: Categories ← → Products</h6>
            </div>
            <div class="card-body">
                <svg width="100%" height="400" style="background: #f8f9fa; border-radius: 5px;">
                    <!-- Categories Table (Cha) -->
                    <g id="categories-box">
                        <!-- Box Header -->
                        <rect x="50" y="50" width="280" height="300" fill="#e3f2fd" stroke="#1976d2" stroke-width="2" rx="5"/>
                        
                        <!-- Title -->
                        <rect x="50" y="50" width="280" height="40" fill="#1976d2" rx="5"/>
                        <text x="190" y="75" font-size="18" font-weight="bold" fill="white" text-anchor="middle">CATEGORIES (Cha)</text>
                        
                        <!-- Fields -->
                        <text x="70" y="110" font-size="13" font-weight="bold" fill="#1976d2">🔑 id (PK)</text>
                        <text x="70" y="135" font-size="13" fill="#333">📝 name</text>
                        <text x="70" y="160" font-size="13" fill="#333">🔗 slug</text>
                        <text x="70" y="185" font-size="13" fill="#333">📊 level</text>
                        <text x="70" y="210" font-size="13" fill="#333">💰 price</text>
                        <text x="70" y="235" font-size="13" fill="#333">👨‍🏫 teacher</text>
                        <text x="70" y="260" font-size="13" fill="#333">📋 description</text>
                        <text x="70" y="285" font-size="13" fill="#333">✅ status</text>
                        <text x="70" y="310" font-size="12" fill="#999">⏰ timestamps</text>
                    </g>
                    
                    <!-- Products Table (Con) -->
                    <g id="products-box">
                        <!-- Box Header -->
                        <rect x="550" y="50" width="280" height="300" fill="#f3e5f5" stroke="#7b1fa2" stroke-width="2" rx="5"/>
                        
                        <!-- Title -->
                        <rect x="550" y="50" width="280" height="40" fill="#7b1fa2" rx="5"/>
                        <text x="690" y="75" font-size="18" font-weight="bold" fill="white" text-anchor="middle">PRODUCTS (Con)</text>
                        
                        <!-- Fields -->
                        <text x="570" y="110" font-size="13" font-weight="bold" fill="#7b1fa2">🔑 id (PK)</text>
                        <text x="570" y="135" font-size="13" font-weight="bold" fill="#d32f2f">🔗 category_id (FK)</text>
                        <text x="570" y="160" font-size="13" fill="#333">📝 name</text>
                        <text x="570" y="185" font-size="13" fill="#333">📋 description</text>
                        <text x="570" y="210" font-size="13" fill="#333">💰 price</text>
                        <text x="570" y="235" font-size="13" fill="#333">👨‍🏫 teacher</text>
                        <text x="570" y="260" font-size="13" fill="#333">✅ status</text>
                        <text x="570" y="285" font-size="13" fill="#333">⏰ timestamps</text>
                    </g>
                    
                    <!-- Relationship Line -->
                    <line x1="330" y1="200" x2="550" y2="200" stroke="#ff6f00" stroke-width="3" stroke-dasharray="5,5"/>
                    
                    <!-- Arrow (Many) -->
                    <polygon points="540,195 555,200 540,205" fill="#ff6f00"/>
                    
                    <!-- Relationship Label -->
                    <rect x="380" y="185" width="140" height="30" fill="white" stroke="#ff6f00" stroke-width="2" rx="3"/>
                    <text x="450" y="207" font-size="12" font-weight="bold" fill="#ff6f00" text-anchor="middle">1 to Many</text>
                </svg>
                
                <div class="alert alert-info mt-4" role="alert">
                    <strong>💡 Giải thích:</strong>
                    <ul class="mb-0">
                        <li><strong>CATEGORIES:</strong> Đây là bảng cha, lưu trữ thông tin các khóa học</li>
                        <li><strong>PRODUCTS:</strong> Đây là bảng con, lưu trữ thông tin các bài học trong khóa học</li>
                        <li><strong>category_id:</strong> Khóa ngoài (Foreign Key) liên kết mỗi bài học đến khóa học của nó</li>
                        <li><strong>1 to Many:</strong> Một khóa học có thể có nhiều bài học</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Foreign Key Details -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 bg-success">
                        <h6 class="m-0 font-weight-bold text-white">ℹ️ Thông Tin Khóa Ngoài</h6>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm">
                            <tr>
                                <td><strong>Tên Constraint:</strong></td>
                                <td><code>products_category_id_foreign</code></td>
                            </tr>
                            <tr>
                                <td><strong>Bảng Con:</strong></td>
                                <td><code>products</code></td>
                            </tr>
                            <tr>
                                <td><strong>Cột Khóa Ngoài:</strong></td>
                                <td><code>category_id</code></td>
                            </tr>
                            <tr>
                                <td><strong>Bảng Cha:</strong></td>
                                <td><code>categories</code></td>
                            </tr>
                            <tr>
                                <td><strong>Cột Tham Chiếu:</strong></td>
                                <td><code>id</code></td>
                            </tr>
                            <tr>
                                <td><strong>ON DELETE:</strong></td>
                                <td><span class="badge badge-danger">CASCADE</span></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 bg-warning">
                        <h6 class="m-0 font-weight-bold text-white">📈 Thống Kê Dữ Liệu</h6>
                    </div>
                    <div class="card-body">
                        <p><strong>Số Khóa Học (Categories):</strong> <span class="badge badge-primary">{{ $categoriesCount }}</span></p>
                        <p><strong>Số Bài Học (Products):</strong> <span class="badge badge-secondary">{{ $productsCount }}</span></p>
                        
                        <div class="mt-4">
                            <p><strong>Chi Tiết Khóa Học:</strong></p>
                            @foreach($categories as $category)
                                <div class="alert alert-light" role="alert">
                                    <strong>{{ $category->name }}</strong> 
                                    <span class="badge badge-info float-right">{{ $category->products->count() }} bài học</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Relationship Details -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 bg-info">
                <h6 class="m-0 font-weight-bold text-white">🔗 Chi Tiết Liên Kết</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th>Khóa Học (Category)</th>
                                <th>Mã Khóa</th>
                                <th>Cấp Độ</th>
                                <th>Số Bài Học</th>
                                <th>Bài Học (Products)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>
                                        <strong>{{ $category->name }}</strong>
                                        <br>
                                        <small class="text-muted">{{ $category->description }}</small>
                                    </td>
                                    <td><code>{{ $category->id }}</code></td>
                                    <td><span class="badge badge-success">{{ $category->level }}</span></td>
                                    <td><span class="badge badge-warning">{{ $category->products->count() }}</span></td>
                                    <td>
                                        @forelse($category->products as $product)
                                            <div class="badge badge-light">{{ $product->name }}</div>
                                        @empty
                                            <span class="text-muted">Chưa có bài học</span>
                                        @endforelse
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <!-- SQL Relationship Query -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 bg-dark">
                <h6 class="m-0 font-weight-bold text-white">📝 Câu Lệnh SQL</h6>
            </div>
            <div class="card-body">
                <p><strong>Xem Liên Kết Cha-Con:</strong></p>
                <pre style="background: #f5f5f5; padding: 10px; border-radius: 5px;"><code>SELECT 
  c.id, c.name AS category_name, 
  p.id, p.name AS product_name, p.category_id
FROM categories c
LEFT JOIN products p ON c.id = p.category_id
ORDER BY c.id, p.id;</code></pre>
                
                <p class="mt-4"><strong>Xem Thông Tin Khóa Ngoài:</strong></p>
                <pre style="background: #f5f5f5; padding: 10px; border-radius: 5px;"><code>SELECT * FROM INFORMATION_SCHEMA.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = 'web_hoc_tieng_anh' 
AND REFERENCED_TABLE_NAME = 'categories';</code></pre>
            </div>
        </div>
    </div>
@endsection
