@extends('layout/admin')
@section('body')
    <div class="px-4 py-4">
        <h1 class="h3 mb-4 text-gray-800">Chỉnh Sửa Học Viên</h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('students.update', $student->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Họ và Tên</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name', $student->user->name) }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email', $student->user->email) }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mã Học Viên</label>
                        <input type="text" name="student_code" class="form-control" value="{{ old('student_code', $student->student_code) }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Trạng Thái</label>
                        <select name="status" class="form-control">
                            <option value="active" {{ $student->status === 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ $student->status === 'inactive' ? 'selected' : '' }}>Inactive</option>
                            <option value="on_leave" {{ $student->status === 'on_leave' ? 'selected' : '' }}>On Leave</option>
                        </select>
                    </div>
                    <button class="btn btn-primary">Lưu</button>
                    <a href="{{ route('admin.users') }}" class="btn btn-secondary">Hủy</a>
                </form>
            </div>
        </div>
    </div>
@endsection
