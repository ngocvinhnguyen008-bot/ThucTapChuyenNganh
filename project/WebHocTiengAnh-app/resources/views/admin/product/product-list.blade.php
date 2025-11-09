
@extends('layout/admin')
@section('body')

<div class="container py-4 animate__animated animate__fadeInUp">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header bg-gradient text-white rounded-top-4" 
             style="background: linear-gradient(90deg, #1e90ff, #00bcd4);">
            <h4 class="mb-0">
                <i class="fa-solid fa-plus-circle me-2"></i> Thêm khóa học tiếng Anh mới
            </h4>
        </div>
        <div class="card-body">
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="course_name" class="form-label fw-bold">Tên khóa học</label>
                        <input type="text" id="course_name" name="course_name" class="form-control shadow-sm" placeholder="Ví dụ: Tiếng Anh Giao Tiếp Cơ Bản" required>
                    </div>

                    <div class="col-md-6">
                        <label for="level" class="form-label fw-bold">Cấp độ</label>
                        <select id="level" name="level" class="form-select shadow-sm">
                            <option value="Beginner">Beginner - Cơ bản</option>
                            <option value="Intermediate">Intermediate - Trung cấp</option>
                            <option value="Advanced">Advanced - Nâng cao</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="price" class="form-label fw-bold">Học phí</label>
                        <input type="number" id="price" name="price" class="form-control shadow-sm" placeholder="Nhập giá khóa học (VNĐ)">
                    </div>

                    <div class="col-md-6">
                        <label for="duration" class="form-label fw-bold">Thời lượng</label>
                        <input type="text" id="duration" name="duration" class="form-control shadow-sm" placeholder="Ví dụ: 3 tháng, 40 giờ học">
                    </div>

                    <div class="col-md-6">
                        <label for="teacher" class="form-label fw-bold">Giảng viên</label>
                        <input type="text" id="teacher" name="teacher" class="form-control shadow-sm" placeholder="Tên giảng viên phụ trách">
                    </div>

                    <div class="col-md-6">
                        <label for="image" class="form-label fw-bold">Ảnh minh họa</label>
                        <input type="file" id="image" name="image" class="form-control shadow-sm" accept="image/*">
                    </div>

                    <div class="col-12">
                        <label for="description" class="form-label fw-bold">Mô tả khóa học</label>
                        <textarea id="description" name="description" rows="5" class="form-control shadow-sm" placeholder="Giới thiệu ngắn gọn về nội dung, phương pháp học, và lợi ích..."></textarea>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-gradient me-2">
                        <i class="fa-solid fa-check me-1"></i> Lưu khóa học
                    </button>
                    <a href="{{ url('admin/product') }}" class="btn btn-outline-secondary">
                        <i class="fa-solid fa-arrow-left me-1"></i> Quay lại
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Hiệu ứng CSS nội tuyến --}}
<style>
    .btn-gradient {
        background: linear-gradient(90deg, #00b4db, #0083b0);
        color: #fff !important;
        border: none;
        border-radius: 30px;
        transition: 0.4s;
        padding: 8px 25px;
        font-weight: 500;
    }

    .btn-gradient:hover {
        background: linear-gradient(90deg, #0083b0, #00b4db);
        transform: scale(1.05);
        box-shadow: 0 0 10px rgba(0, 132, 255, 0.6);
    }

    .card {
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .card:hover {
        transform: translateY(-3px);
        box-shadow: 0 0 15px rgba(0, 132, 255, 0.2);
    }

    .form-control:focus, .form-select:focus {
        border-color: #00bcd4;
        box-shadow: 0 0 0 0.2rem rgba(0, 188, 212, 0.25);
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
