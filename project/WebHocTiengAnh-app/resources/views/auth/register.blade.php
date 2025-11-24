@extends('layout/user')
@section('body')
    <div class="colorlib-product">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="card shadow-lg border-0 rounded-4">
                        <div class="card-header bg-gradient text-white rounded-top-4" style="background: linear-gradient(90deg, #1e90ff, #00bcd4);">
                            <h3 class="mb-0 fw-bold text-center">
                                <i class="icon-user-plus me-2"></i> Đăng Ký
                            </h3>
                        </div>
                        <div class="card-body p-4">
                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Lỗi!</strong>
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            @endif

                            <form action="{{ route('register.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name" class="form-label fw-bold">Họ và Tên</label>
                                        <input type="text" class="form-control shadow-sm @error('name') is-invalid @enderror" 
                                               id="name" name="name" value="{{ old('name') }}" placeholder="Nhập họ và tên" required>
                                        @error('name')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label fw-bold">Email</label>
                                        <input type="email" class="form-control shadow-sm @error('email') is-invalid @enderror" 
                                               id="email" name="email" value="{{ old('email') }}" placeholder="Nhập email" required>
                                        @error('email')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="phone" class="form-label fw-bold">Số Điện Thoại</label>
                                        <input type="tel" class="form-control shadow-sm" 
                                               id="phone" name="phone" value="{{ old('phone') }}" placeholder="Nhập số điện thoại">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="date_of_birth" class="form-label fw-bold">Ngày Sinh</label>
                                        <input type="date" class="form-control shadow-sm" 
                                               id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label fw-bold">Mật Khẩu</label>
                                    <input type="password" class="form-control shadow-sm @error('password') is-invalid @enderror" 
                                           id="password" name="password" placeholder="Nhập mật khẩu (tối thiểu 8 ký tự)" required>
                                    @error('password')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    <small class="form-text text-muted">Mật khẩu phải có ít nhất 8 ký tự.</small>
                                </div>

                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label fw-bold">Xác Nhận Mật Khẩu</label>
                                    <input type="password" class="form-control shadow-sm @error('password_confirmation') is-invalid @enderror" 
                                           id="password_confirmation" name="password_confirmation" placeholder="Nhập lại mật khẩu" required>
                                    @error('password_confirmation')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input @error('terms') is-invalid @enderror" 
                                           id="terms" name="terms" value="1" {{ old('terms') ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="terms">
                                        Tôi đồng ý với <a href="#" class="text-primary">Điều khoản sử dụng</a> và <a href="#" class="text-primary">Chính sách bảo mật</a> <span class="text-danger">*</span>
                                    </label>
                                    @error('terms')
                                        <div class="invalid-feedback" style="display: block;">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="d-grid gap-2 mb-3">
                                    <button type="submit" class="btn btn-gradient" style="background: linear-gradient(90deg, #00b4db, #0083b0); color: #fff; border: none; border-radius: 30px; padding: 10px; font-weight: 500;">
                                        <i class="icon-check me-2"></i> Đăng Ký
                                    </button>
                                </div>

                                <div class="text-center">
                                    <p>
                                        Đã có tài khoản? 
                                        <a href="{{ route('login') }}" class="text-primary text-decoration-none fw-bold">Đăng nhập</a>
                                    </p>
                                </div>
                            </form>

                            <hr class="my-4">

                            <div class="text-center">
                                <p class="mb-3 text-muted">Hoặc đăng ký với</p>
                                <div class="d-flex gap-2 justify-content-center">
                                    <button class="btn btn-outline-primary btn-sm" style="border-radius: 50%; width: 40px; height: 40px;">
                                        <i class="icon-social-facebook"></i>
                                    </button>
                                    <button class="btn btn-outline-info btn-sm" style="border-radius: 50%; width: 40px; height: 40px;">
                                        <i class="icon-social-twitter"></i>
                                    </button>
                                    <button class="btn btn-outline-danger btn-sm" style="border-radius: 50%; width: 40px; height: 40px;">
                                        <i class="icon-social-google"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .btn-gradient {
            transition: 0.4s;
        }

        .btn-gradient:hover {
            transform: scale(1.05);
            box-shadow: 0 0 10px rgba(0, 132, 255, 0.6);
        }

        .card {
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 132, 255, 0.15);
        }

        .form-control:focus {
            border-color: #00bcd4;
            box-shadow: 0 0 0 0.2rem rgba(0, 188, 212, 0.25);
        }

        .is-invalid {
            border-color: #dc3545;
        }

        .invalid-feedback {
            display: block;
            color: #dc3545;
            font-size: 0.875em;
            margin-top: 0.25rem;
        }
    </style>
@endsection
