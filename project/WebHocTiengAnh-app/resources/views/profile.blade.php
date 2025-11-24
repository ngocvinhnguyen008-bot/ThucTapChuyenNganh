@extends('layout/user')
@section('body')
    <div class="colorlib-product">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-3">
                    <div class="card shadow-sm border-0 rounded-3">
                        <div class="card-body text-center">
                            <div style="width: 80px; height: 80px; margin: 0 auto 20px; background: linear-gradient(90deg, #1e90ff, #00bcd4); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <i class="icon-user" style="color: white; font-size: 40px;"></i>
                            </div>
                            <h5>{{ Auth::user()->name }}</h5>
                            <p class="text-muted">{{ Auth::user()->email }}</p>
                            <button class="btn btn-primary btn-sm w-100 mb-2">Chỉnh Sửa Hồ Sơ</button>
                            <button class="btn btn-outline-primary btn-sm w-100">Đổi Mật Khẩu</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card shadow-sm border-0 rounded-3">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">Thông Tin Cá Nhân</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Họ và Tên</label>
                                    <p>{{ Auth::user()->name }}</p>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Email</label>
                                    <p>{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Số Điện Thoại</label>
                                    <p>Chưa cập nhật</p>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Ngày Sinh</label>
                                    <p>Chưa cập nhật</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
