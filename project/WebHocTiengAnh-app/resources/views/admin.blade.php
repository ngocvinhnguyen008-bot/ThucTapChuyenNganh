@extends('layout/admin')
@section('body')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4 px-4 pt-4">
        <h1 class="h3 mb-0 text-gray-800">Bảng Điều Khiển</h1>
        <a href="{{ route('admin.products.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> Thêm Khóa Học Mới
        </a>
    </div>

    <div class="px-4">
        <!-- Content Row -->
        <div class="row">

            <!-- Earnings Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="text-primary text-uppercase mb-1">
                            <small>Khóa Học Mới Tháng Này</small>
                        </div>
                        <div class="h3 mb-0 font-weight-bold text-gray-800">24</div>
                    </div>
                </div>
            </div>

            <!-- Earnings Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="text-success text-uppercase mb-1">
                            <small>Tổng Số Học Viên</small>
                        </div>
                        <div class="h3 mb-0 font-weight-bold text-gray-800">2,150</div>
                    </div>
                </div>
            </div>

            <!-- Earnings Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="text-info text-uppercase mb-1">
                            <small>Tiến Độ Học Tập</small>
                        </div>
                        <div class="h3 mb-0 font-weight-bold text-gray-800">50%</div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="text-warning text-uppercase mb-1">
                            <small>Yêu Cầu Chờ Duyệt</small>
                        </div>
                        <div class="h3 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-8">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Khóa học nổi bật</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <h6 class="small font-weight-bold">Tiếng Anh Giao Tiếp <span class="float-right">80%</span></h6>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h6 class="small font-weight-bold">Tiếng Anh Thương Mại <span class="float-right">60%</span></h6>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h6 class="small font-weight-bold">IELTS Preparation <span class="float-right">40%</span></h6>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h6 class="small font-weight-bold">Luyện Thi Toeic <span class="float-right">20%</span></h6>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-lg-4">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Thống kê học viên</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <small>Đang học</small>
                            <div class="small mb-2">
                                <a href="{{ route('admin.categories') }}">Xem Danh Sách Khóa Học</a>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-4">
                            <small>Chưa bắt đầu</small>
                            <div class="small mb-2">
                                <a href="{{ route('admin.products.create') }}">Thêm Khóa Học Mới</a>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <small>Hoàn thành</small>
                            <div class="small">
                                <a href="{{ route('admin.users') }}">Quản Lý Người Dùng</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
