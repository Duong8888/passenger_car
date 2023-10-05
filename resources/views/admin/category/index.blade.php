@extends('admin.layouts.master')
@section('content')
    @include('admin.layouts.notify-success')

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

                        <h5 class="mt-0">Quản lí danh mục</h5>
                        <a href="{{ route('admin.category.add') }}" class="btn btn-primary">Thêm mới danh mục</a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-centered mb-0" id="btn-editable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên danh mục</th>
                                    <th>Danh mục cha</th>
                                    <th>Ngày tạo</th>
                                    <th>Cài đặt</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($categories as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->category_name }}</td>
                                        <td>{{ $item->parent_id }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td class="d-flex gap-2">
                                            <a class="btn btn-danger"
                                                href="{{ route('admin.category.edit', $item->id) }}">Sửa</a>
                                            <form action="{{ route('admin.category.delete', $item->id) }}" method="POST"
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
