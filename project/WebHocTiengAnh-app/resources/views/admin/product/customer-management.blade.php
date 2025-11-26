@extends('layout/admin')
@section('body')
    <div class="container py-4">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-4">
                    <i class="fa-solid fa-users me-2"></i> Quản Lý Người Dùng
                </h2>
            </div>
        </div>

        <!-- Tabs Navigation -->
        <div class="row mb-4">
            <div class="col-12">
                <ul class="nav nav-tabs" id="userTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="students-tab" data-bs-toggle="tab" data-bs-target="#students" type="button">
                            <i class="fa-solid fa-graduation-cap me-2"></i> Quản Lý Học Viên
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="teachers-tab" data-bs-toggle="tab" data-bs-target="#teachers" type="button">
                            <i class="fa-solid fa-chalkboard-user me-2"></i> Quản Lý Giáo Viên
                        </button>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Tab Content -->
        <div class="tab-content" id="userTabContent">
            <!-- Students Tab -->
            <div class="tab-pane fade show active" id="students" role="tabpanel">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header bg-gradient text-white rounded-top-4" style="background: linear-gradient(90deg, #1e90ff, #00bcd4);">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="mb-0 fw-bold">
                                    <i class="fa-solid fa-graduation-cap me-2"></i> Danh Sách Học Viên
                                </h4>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('students.create') }}" class="btn btn-light btn-sm">
                                    <i class="fa-solid fa-plus me-2"></i> Thêm Học Viên
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped align-middle mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Mã Học Viên</th>
                                        <th>Họ và Tên</th>
                                        <th>Email</th>
                                        <th>Số Điện Thoại</th>
                                        <th>Trạng Thái</th>
                                        <th>Ngày Đăng Ký</th>
                                        <th>Hành Động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($students as $key => $student)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><span class="badge bg-primary">{{ $student->student_code }}</span></td>
                                        <td>{{ $student->user->name }}</td>
                                        <td>{{ $student->user->email }}</td>
                                        <td>{{ $student->user->phone ?? 'N/A' }}</td>
                                        <td>
                                            @if($student->status === 'active')
                                                <span class="badge bg-success">Hoạt động</span>
                                            @elseif($student->status === 'inactive')
                                                <span class="badge bg-danger">Không hoạt động</span>
                                            @else
                                                <span class="badge bg-warning">Tạm Dừng</span>
                                            @endif
                                        </td>
                                        <td>{{ $student->created_at->format('d/m/Y') }}</td>
                                        <td>
                                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-outline-warning" title="Chỉnh sửa"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger" title="Xóa" onclick="return confirm('Bạn chắc chắn muốn xóa?')"><i class="fa-solid fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="8" class="text-center text-muted py-4">Không có học viên nào</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Teachers Tab -->
            <div class="tab-pane fade" id="teachers" role="tabpanel">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header bg-gradient text-white rounded-top-4" style="background: linear-gradient(90deg, #51cf66, #37b24d);">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="mb-0 fw-bold">
                                    <i class="fa-solid fa-chalkboard-user me-2"></i> Danh Sách Giáo Viên
                                </h4>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('teachers.create') }}" class="btn btn-light btn-sm">
                                    <i class="fa-solid fa-plus me-2"></i> Thêm Giáo Viên
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped align-middle mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Mã Giáo Viên</th>
                                        <th>Họ và Tên</th>
                                        <th>Email</th>
                                        <th>Chuyên Ngành</th>
                                        <th>Trạng Thái</th>
                                        <th>Đánh Giá</th>
                                        <th>Hành Động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($teachers as $key => $teacher)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><span class="badge bg-success">{{ $teacher->employee_code }}</span></td>
                                        <td>{{ $teacher->user->name }}</td>
                                        <td>{{ $teacher->user->email }}</td>
                                        <td>{{ $teacher->specialization }}</td>
                                        <td>
                                            @if($teacher->status === 'active')
                                                <span class="badge bg-success">Hoạt động</span>
                                            @elseif($teacher->status === 'inactive')
                                                <span class="badge bg-danger">Không hoạt động</span>
                                            @else
                                                <span class="badge bg-info">Tạm Nghỉ</span>
                                            @endif
                                        </td>
                                        <td><i class="fa-solid fa-star text-warning"></i> {{ round($teacher->rating, 1) }}/5</td>
                                        <td>
                                            <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-sm btn-outline-warning" title="Chỉnh sửa"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger" title="Xóa" onclick="return confirm('Bạn chắc chắn muốn xóa?')"><i class="fa-solid fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="8" class="text-center text-muted py-4">Không có giáo viên nào</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistics Section -->
    <div class="row mt-5 mb-4">
        <div class="col-md-3">
            <div class="card shadow-sm border-0 rounded-3 bg-light">
                <div class="card-body text-center">
                    <h5 class="text-muted">Tổng Học Viên</h5>
                    <h2 class="text-primary fw-bold">{{ $totalStudents }}</h2>
                    <p class="text-success">✓ {{ $activeStudents }} người hoạt động</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-0 rounded-3 bg-light">
                <div class="card-body text-center">
                    <h5 class="text-muted">Tổng Giáo Viên</h5>
                    <h2 class="text-success fw-bold">{{ $totalTeachers }}</h2>
                    <p class="text-success">✓ {{ $activeTeachers }} người hoạt động</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-0 rounded-3 bg-light">
                <div class="card-body text-center">
                    <h5 class="text-muted">Tỷ Lệ Hoạt Động</h5>
                    <h2 class="text-info fw-bold">{{ $totalStudents > 0 ? round(($activeStudents / $totalStudents) * 100) : 0 }}%</h2>
                    <p class="text-muted">Học viên</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-0 rounded-3 bg-light">
                <div class="card-body text-center">
                    <h5 class="text-muted">Tỷ Lệ Hoạt Động</h5>
                    <h2 class="text-warning fw-bold">{{ $totalTeachers > 0 ? round(($activeTeachers / $totalTeachers) * 100) : 0 }}%</h2>
                    <p class="text-muted">Giáo viên</p>
                </div>
            </div>
        </div>
    </div>

    <style>
        .nav-tabs .nav-link {
            color: #666;
            border: none;
            border-bottom: 3px solid transparent;
            font-weight: 500;
            transition: 0.3s;
        }

        .nav-tabs .nav-link:hover {
            color: #1e90ff;
            border-bottom-color: #1e90ff;
        }

        .nav-tabs .nav-link.active {
            color: #1e90ff;
            border-bottom-color: #1e90ff;
            background: none;
        }

        .table-hover tbody tr:hover {
            background-color: #f0faff;
        }

        .btn-outline-info:hover,
        .btn-outline-warning:hover,
        .btn-outline-danger:hover {
            transform: scale(1.1);
        }
    </style>
@endsection
