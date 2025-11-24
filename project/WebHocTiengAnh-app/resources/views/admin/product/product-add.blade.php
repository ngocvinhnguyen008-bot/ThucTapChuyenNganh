@extends('layout/admin')
@section('body')
    <div class="container py-4 animate__animated animate__fadeInUp">
        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-header bg-gradient text-white rounded-top-4" style="background: linear-gradient(90deg, #ff6b6b, #ff8a50);">
                <h3 class="mb-0 fw-bold">
                    <i class="fa-solid fa-plus-circle me-2"></i> Thêm Khóa Học
                </h3>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.products.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Tên Khóa Học</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Cấp Độ</label>
                            <input type="text" name="level" class="form-control" value="{{ old('level') }}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Giá (VNĐ)</label>
                            <input type="number" name="price" class="form-control" value="{{ old('price') }}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Giảng Viên</label>
                            <input type="text" name="teacher" class="form-control" value="{{ old('teacher') }}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mô tả</label>
                        <textarea name="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" name="status" value="active" class="form-check-input" {{ old('status') === 'active' ? 'checked' : '' }}>
                        <label class="form-check-label">Xuất bản</label>
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-gradient">Lưu Khóa Học</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
