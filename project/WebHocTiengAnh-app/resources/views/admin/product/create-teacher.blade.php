@extends('layout/admin')
@section('body')
    <div class="px-4 py-4">
        <h1 class="h3 mb-4 text-gray-800">Thêm Giáo Viên</h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('teachers.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Họ và Tên</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mã Giáo Viên</label>
                        <input type="text" name="employee_code" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Chuyên Ngành</label>
                        <input type="text" name="specialization" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Trạng Thái</label>
                        <select name="status" class="form-control">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                            <option value="on_leave">On Leave</option>
                        </select>
                    </div>
                    <button class="btn btn-primary">Lưu</button>
                    <a href="{{ route('admin.users') }}" class="btn btn-secondary">Hủy</a>
                </form>
            </div>
        </div>
    </div>
@endsection
