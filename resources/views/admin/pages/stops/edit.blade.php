@extends('admin.layouts.master')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Danh sách các điểm dừng</h4>
                    <p class="text-muted font-14 mb-3"></p>
                    <a href="{{ route('stop.edit') }}" style="margin:200px;">Thêm mới</a>
                    <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
                        <thead>
                        <tr>
                            <th>Tên điểm</th>
                            <th>Thuộc loại</th>
                            <th>Đoan đường</th>
                            {{-- <th>Age</th> --}}
                            <th>Ngày tạo</th>
                            <th>Chức năng</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach ($stops as $stop)
                            <tr>
                                <td>{{ $stop->stop_name }}</td>
                                <td>
                                    @if ($stop->stop_type  == 0)
                                        <div style="color: blue;">Điểm đón</div>
                                    @elseif ($stop->stop_type  == 1)
                                        <div style="color: red;">Điểm trả</div>
                                    @endif
                                </td>
                                <td>
                                        {{ $stop->route->departure }} -- {{ $stop->route->arrival }}
                                </td>
                                {{-- <td>61</td> --}}
                                <td>
                                    @if ( $stop->created_at  == "")
                                        <div style="color: red;">Quên mất rồi</div>
                                    @else
                                        <div>{{ $stop->created_at }}</div>
                                    @endif
                                </td>
                                <td style="display: flex;align-items: center;align-content: center">
                                    <a class="btn btn-primary"
                                    href="{{ route('stop.edit', $stop->id) }}">Edit</a>
                                    <form action="{{ route('stop.destroy', $stop->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button onclick="return confirm('Bạn muốn xóa thật chứ ?')" class="btn btn-warning">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
