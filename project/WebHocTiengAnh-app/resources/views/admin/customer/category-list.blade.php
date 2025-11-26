@extends('layout/admin')
@section('body')
    <div class="px-4 py-4">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Quản Lý Khách Hàng</h1>
            <a href="{{ route('admin.customer') }}" class="btn btn-sm btn-primary">Tải lại</a>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Danh Sách Khách Hàng</h6>
            </div>
            <div class="card-body">
                @if(isset($customers) && $customers->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên</th>
                                    <th>Email</th>
                                    <th>Số Điện Thoại</th>
                                    <th>Địa Chỉ</th>
                                    <th>Ngày Tạo</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($customers as $i => $c)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $c->name }}</td>
                                    <td>{{ $c->email }}</td>
                                    <td>{{ $c->phone ?? 'N/A' }}</td>
                                    <td>{{ $c->address ?? '-' }}</td>
                                    <td>{{ \Carbon\Carbon::parse($c->created_at)->format('d/m/Y') }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <p class="text-muted"></p>Không có khách hàng nào trong hệ thống.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
