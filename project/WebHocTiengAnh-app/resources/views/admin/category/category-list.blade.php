@extends('layout/admin')
@section('body')
    <div class="card-footer small text mutter">
        <div class="table-responsive">
            <h3 class="text-primary fw-bold mb-3">
                <i class="fa-solid fa-book-open text-info me-2"></i> Danh mục khóa học tiếng Anh
            </h3>
            <a href="#" class="btn btn-gradient mb-3 shadow-sm">
                <i class="fa-solid fa-plus me-2"></i>  category
            </a>

            <table class="table table-hover table-striped align-middle shadow-lg rounded-3 overflow-hidden animate__animated animate__fadeInUp">
                <thead class="bg-gradient text-white" style="background: linear-gradient(90deg, #1e90ff, #00bcd4);">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên khóa học</th>
                        <th scope="col">Cấp độ</th>
                        <th scope="col">Mã học viên</th>
                        <th scope="col">Xem chi tiết</th>
                        <th scope="col">Chỉnh sửa</th>
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-row-hover">
                        <th scope="row">1</th>
                        <td>Tiếng Anh Giao Tiếp Cơ Bản</td>
                        <td>Beginner</td>
                        <td>@learn01</td>
                        <td><i class="fa-solid fa-eye text-info icon-hover"></i></td>
                        <td><i class="fa-solid fa-pen-to-square text-warning icon-hover"></i></td>
                        <td><i class="fa-solid fa-trash text-danger icon-hover"></i></td>
                    </tr>
                    <tr class="table-row-hover">
                        <th scope="row">2</th>
                        <td>Tiếng Anh Thương Mại</td>
                        <td>Intermediate</td>
                        <td>@bizeng</td>
                        <td><i class="fa-solid fa-eye text-info icon-hover"></i></td>
                        <td><i class="fa-solid fa-pen-to-square text-warning icon-hover"></i></td>
                        <td><i class="fa-solid fa-trash text-danger icon-hover"></i></td>
                    </tr>
                    <tr class="table-row-hover">
                        <th scope="row">3</th>
                        <td>Luyện Thi IELTS</td>
                        <td>Advanced</td>
                        <td>@ieltspro</td>
                        <td><i class="fa-solid fa-eye text-info icon-hover"></i></td>
                        <td><i class="fa-solid fa-pen-to-square text-warning icon-hover"></i></td>
                        <td><i class="fa-solid fa-trash text-danger icon-hover"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- Hiệu ứng CSS nội tuyến --}}
    <style>
        .btn-gradient {
            background: linear-gradient(90deg, #00b4db, #0083b0);
            color: #fff !important;
            border: none;
            transition: 0.4s;
            border-radius: 30px;
        }

        .btn-gradient:hover {
            background: linear-gradient(90deg, #0083b0, #00b4db);
            transform: scale(1.05);
            box-shadow: 0 0 10px rgba(0, 132, 255, 0.6);
        }

        .table-row-hover {
            transition: all 0.3s ease-in-out;
        }

        .table-row-hover:hover {
            background-color: #f0faff;
            transform: scale(1.01);
        }

        .icon-hover {
            transition: transform 0.3s, color 0.3s;
            cursor: pointer;
        }

        .icon-hover:hover {
            transform: scale(1.3) rotate(10deg);
            color: #007bff !important;
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
