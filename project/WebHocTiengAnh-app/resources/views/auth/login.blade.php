@extends('layout/user')
@section('body')
    <div class="colorlib-product">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow-lg border-0 rounded-4">
                        <div class="card-header bg-gradient text-white rounded-top-4" style="background: linear-gradient(90deg, #1e90ff, #00bcd4);">
                            <h3 class="mb-0 fw-bold text-center">
                                <i class="icon-user me-2"></i> Đăng Nhập
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

                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            @endif

                            <form action="{{ route('login.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label fw-bold">Email</label>
                                    <input type="email" class="form-control shadow-sm @error('email') is-invalid @enderror" 
                                           id="email" name="email" value="{{ old('email') }}" placeholder="Nhập email của bạn" required autofocus>
                                    @error('email')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label fw-bold">Mật Khẩu</label>
                                    <input type="password" class="form-control shadow-sm @error('password') is-invalid @enderror" 
                                           id="password" name="password" placeholder="Nhập mật khẩu" required>
                                    @error('password')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                    <label class="form-check-label" for="remember">Ghi nhớ đăng nhập</label>
                                </div>

                                <div class="d-grid gap-2 mb-3">
                                    <button type="submit" class="btn btn-gradient" style="background: linear-gradient(90deg, #00b4db, #0083b0); color: #fff; border: none; border-radius: 30px; padding: 10px; font-weight: 500;">
                                        <i class="icon-sign-in me-2"></i> Đăng Nhập
                                    </button>
                                </div>

                                <div class="text-center">
                                    <p class="mb-2">
                                        <a href="#" class="text-primary text-decoration-none">Quên mật khẩu?</a>
                                    </p>
                                    <p>
                                        Chưa có tài khoản? 
                                        <a href="{{ route('register') }}" class="text-primary text-decoration-none fw-bold">Đăng ký ngay</a>
                                    </p>
                                </div>
                            </form>

                            <hr class="my-4">

                            <div class="text-center">
                                <p class="mb-3 text-muted">Hoặc đăng nhập với</p>
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
    </style>
@endsection
