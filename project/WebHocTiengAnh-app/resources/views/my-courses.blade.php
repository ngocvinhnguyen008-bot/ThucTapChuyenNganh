@extends('layout/user')
@section('body')
    <div class="colorlib-product">
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="mb-4">
                        <i class="icon-book-open me-2"></i> Khóa Học Của Tôi
                    </h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-0 rounded-3 h-100">
                        <div style="height: 200px; background: linear-gradient(90deg, #1e90ff, #00bcd4); border-radius: 12px 12px 0 0; display: flex; align-items: center; justify-content: center;">
                            <i class="icon-book" style="color: white; font-size: 60px;"></i>
                        </div>
                        <div class="card-body">
                            <h5>Tiếng Anh Giao Tiếp Cơ Bản</h5>
                            <p class="text-muted">Beginner</p>
                            <div class="progress mb-3" style="height: 20px;">
                                <div class="progress-bar" style="width: 45%; background: linear-gradient(90deg, #1e90ff, #00bcd4);">45%</div>
                            </div>
                            <button class="btn btn-primary btn-sm w-100">Tiếp Tục Học</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-0 rounded-3 h-100">
                        <div style="height: 200px; background: linear-gradient(90deg, #ff6b6b, #ee5a6f); border-radius: 12px 12px 0 0; display: flex; align-items: center; justify-content: center;">
                            <i class="icon-book" style="color: white; font-size: 60px;"></i>
                        </div>
                        <div class="card-body">
                            <h5>Tiếng Anh Thương Mại</h5>
                            <p class="text-muted">Intermediate</p>
                            <div class="progress mb-3" style="height: 20px;">
                                <div class="progress-bar" style="width: 60%; background: linear-gradient(90deg, #ff6b6b, #ee5a6f);">60%</div>
                            </div>
                            <button class="btn btn-primary btn-sm w-100">Tiếp Tục Học</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-0 rounded-3 h-100">
                        <div style="height: 200px; background: linear-gradient(90deg, #51cf66, #37b24d); border-radius: 12px 12px 0 0; display: flex; align-items: center; justify-content: center;">
                            <i class="icon-book" style="color: white; font-size: 60px;"></i>
                        </div>
                        <div class="card-body">
                            <h5>Luyện Thi IELTS</h5>
                            <p class="text-muted">Advanced</p>
                            <div class="progress mb-3" style="height: 20px;">
                                <div class="progress-bar" style="width: 25%; background: linear-gradient(90deg, #51cf66, #37b24d);">25%</div>
                            </div>
                            <button class="btn btn-primary btn-sm w-100">Tiếp Tục Học</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <div class="card shadow-sm border-0 rounded-3">
                        <div class="card-header bg-light">
                            <h5 class="mb-0">Thống Kê Học Tập</h5>
                        </div>
                        <div class="card-body">
                            <div class="row text-center">
                                <div class="col-md-3">
                                    <h3 style="color: #1e90ff;">3</h3>
                                    <p>Khóa Học Đang Học</p>
                                </div>
                                <div class="col-md-3">
                                    <h3 style="color: #00bcd4;">45</h3>
                                    <p>Giờ Học Tập</p>
                                </div>
                                <div class="col-md-3">
                                    <h3 style="color: #51cf66;">12</h3>
                                    <p>Bài Tập Hoàn Thành</p>
                                </div>
                                <div class="col-md-3">
                                    <h3 style="color: #ffa94d;">95%</h3>
                                    <p>Điểm Trung Bình</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
