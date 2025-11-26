@extends('layout/admin')
@section('body')
    <div class="px-4 py-4">
        <h1 class="h3 mb-4 text-gray-800">Chỉnh Sửa Giáo Viên</h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('teachers.update', $teacher->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Họ và Tên</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name', $teacher->user->name) }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email', $teacher->user->email) }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mã Giáo Viên</label>
                        <input type="text" name="employee_code" class="form-control" value="{{ old('employee_code', $teacher->employee_code) }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Chuyên Ngành</label>
                        <input type="text" name="specialization" class="form-control" value="{{ old('specialization', $teacher->specialization) }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Trạng Thái</label>
                        <select name="status" class="form-control">
                            <option value="active" {{ $teacher->status === 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ $teacher->status === 'inactive' ? 'selected' : '' }}>Inactive</option>
                            <option value="on_leave" {{ $teacher->status === 'on_leave' ? 'selected' : '' }}>On Leave</option>
                        </select>
                    </div>
                    <button class="btn btn-primary">Lưu</button>
                    <a href="{{ route('admin.users') }}" class="btn btn-secondary">Hủy</a>
                </form>
            </div>
        </div>
    </div>
@endsection
