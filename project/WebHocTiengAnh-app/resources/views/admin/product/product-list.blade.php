
@extends('layout/admin')
@section('body')
    <div class="container py-4 animate__animated animate__fadeInUp">
        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-header bg-gradient text-white rounded-top-4" style="background: linear-gradient(90deg, #ff6b6b, #ff8a50);">
                <h3 class="mb-0 fw-bold">
                    <i class="fa-solid fa-graduation-cap me-2"></i> Quản Lý Khóa Học
                </h3>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <a href="{{ route('admin.products.create') }}" class="btn btn-gradient shadow-sm">
                        <i class="fa-solid fa-plus me-2"></i> Thêm Khóa Học
                    </a>
                    <span class="text-muted">Quản lý các khóa học và nội dung đào tạo</span>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-striped align-middle shadow rounded-3 overflow-hidden">
                        <thead class="bg-gradient text-white" style="background: linear-gradient(90deg, #ff6b6b, #ff8a50);">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên Khóa Học</th>
                                <th scope="col">Cấp Độ</th>
                                <th scope="col">Giá (VNĐ)</th>
                                <th scope="col">Giảng Viên</th>
                                <th scope="col">Trạng Thái</th>
                                <th scope="col">Xem</th>
                                <th scope="col">Sửa</th>
                                <th scope="col">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($categories) && $categories->count())
                                @foreach($categories as $index => $category)
                                    <tr class="table-row-hover">
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td>{{ $category->name }}</td>
                                        <td><span class="badge bg-info">{{ $category->level ?? '-' }}</span></td>
                                        <td>{{ number_format($category->price, 0, ',', '.') }}</td>
                                        <td>{{ $category->teacher ?? '-' }}</td>
                                        <td><span class="badge {{ $category->status === 'active' ? 'bg-success' : 'bg-secondary' }}">{{ ucfirst($category->status) }}</span></td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-outline-info"><i class="fa-solid fa-eye"></i></a>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-sm btn-outline-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Bạn có chắc muốn xóa?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="9" class="text-center">Không có khóa học nào. Vui lòng thêm khóa học mới.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <style>
        .btn-gradient {
            background: linear-gradient(90deg, #ff6b6b, #ff8a50);
            color: #fff !important;
            border: none;
            border-radius: 30px;
            transition: 0.4s;
            padding: 8px 25px;
            font-weight: 500;
        }
        .btn-gradient:hover {
            background: linear-gradient(90deg, #ff8a50, #ff6b6b);
            transform: scale(1.05);
            box-shadow: 0 0 10px rgba(255, 107, 107, 0.6);
        }
        .card {
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }
        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 0 15px rgba(255, 107, 107, 0.2);
        }
        .table-row-hover {
            transition: all 0.3s ease-in-out;
        }
        .table-row-hover:hover {
            background-color: #fff5f5;
            transform: scale(1.01);
        }
        .badge {
            font-size: 0.95em;
            padding: 0.4em 0.8em;
            border-radius: 12px;
        }
        .animate__animated {
            animation-duration: 1s;
            animation-fill-mode: both;
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translate3d(0, 40px, 0);
            }
            to {
                opacity: 1;
                transform: none;
            }
        }
        .animate__fadeInUp {
            animation-name: fadeInUp;
        }
    </style>
@endsection
