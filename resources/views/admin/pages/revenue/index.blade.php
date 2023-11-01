@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if (session('msgSuccess'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            {{ session('msgSuccess') }}
                        </div>
                    @endif
                    @if (session('msgError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            {{ session('msgError') }}
                        </div>
                    @endif
                    <div class="d-flex justify-content-between align-items-center">

                        <h4 class="mt-0">Doanh số: {{ number_format($totalToday) }} VND</h4>
                        <a href="{{ route('admin.revenue.add') }}" class="btn btn-primary">Thêm mới </a>
                    </div>
                    <form method="GET" class="mb-4 mt-4">
                        <div class="row align-items-end">
                            <div class="col-lg-4 mb-2   ">
                                <label for="start_date" class="form-label">Start date:</label>
                                <input type="date" id="start_date" name="start_date"
                                    value="{{ Request()->start_date ?? date('Y-m-d') }}" class="form-control ">
                            </div>
                            <div class="col-lg-4 mb-2   ">
                                <label for="end_date" class="form-label">End date:</label>
                                <input type="date" id="end_date" name="end_date"
                                    value="{{ Request()->end_date ?? date('Y-m-d') }}" class="form-control ">
                            </div>
                            <div class="col-md-4 mb-2 text-md-end">
                                <a href="{{ route('admin.revenue.index') }}" class="btn btn-outline-secondary">Đặt lại </a>
                                <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                            </div>

                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-centered mb-0" id="btn-editable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Created_at</th>
                                    <th>Settings</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($revenue as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->customer_name }}</td>
                                        <td>{{ number_format($item->price) }} VND</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td class="d-flex gap-2">
                                            <a class="btn btn-danger"
                                                href="{{ route('admin.revenue.edit', $item->id) }}">Sửa</a>
                                            <form action="{{ route('admin.revenue.delete', $item->id) }}" method="POST"
                                                onsubmit="return confirm('Bạn chắc chắn muốn xóa vĩnh viễn?')">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-primary" type="submit">

                                                    Xóa
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div> <!-- end .table-responsive-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div>
@endsection
