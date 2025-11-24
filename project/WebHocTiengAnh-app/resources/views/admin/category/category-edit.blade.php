@extends('layout/admin')
@section('body')
    <div class="px-4 py-4">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Chỉnh Sửa Khóa Học</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">{{ $category->name }}</h6>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Lỗi!</strong>
                        <ul class="mb-0 mt-2">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Tên Khóa Học</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $category->name) }}" required>
                        @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="level">Cấp Độ</label>
                                <input type="text" class="form-control @error('level') is-invalid @enderror" id="level" name="level" value="{{ old('level', $category->level) }}">
                                @error('level')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="price">Giá (VNĐ)</label>
                                <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $category->price) }}">
                                @error('price')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="teacher">Giảng Viên</label>
                                <input type="text" class="form-control @error('teacher') is-invalid @enderror" id="teacher" name="teacher" value="{{ old('teacher', $category->teacher) }}">
                                @error('teacher')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description">Mô tả</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4">{{ old('description', $category->description) }}</textarea>
                        @error('description')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="status" name="status" value="active" {{ old('status', $category->status) === 'active' ? 'checked' : '' }}>
                        <label class="custom-control-label" for="status">Xuất bản</label>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Cập Nhật</button>
                        <a href="{{ route('admin.categories') }}" class="btn btn-secondary">Hủy</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
