@extends('admin.layouts.master')
@section('page-style')
   <!-- third party css -->
<link href="{{ asset('admin/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{ asset ('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css') }}">
<!-- third party css end -->
@endsection
@section('page-script')
    <!-- third party js -->
    <script src="{{ asset('admin/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('admin/libs/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin/libs/pdfmake/build/vfs_fonts.js') }}"></script>
    <!-- Datatables init -->
    <script src="{{ asset('admin/js/pages/datatables.init.js') }}"></script>
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Thống kê doanh thu</h4>
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
                            <a href="{{ route('admin.revenueStaff.index') }}" class="btn btn-outline-secondary">Đặt lại </a>
                            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                        </div>

                    </div>
                </form>

                <table style="text-align: center;vertical-align: middle;" id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th style="vertical-align: middle;" rowspan="2">Nhà xe</th>
                            <th style="vertical-align: middle;" rowspan="2">Số lượng xe được đặt</th>
                            <th style="vertical-align: middle;" rowspan="2">Số lượng vé</th>
                            <th style="vertical-align: middle;" rowspan="2">Số lượng khách</th>
                            <th colspan="3">Hình thức thanh toán</th>
                            <th style="vertical-align: middle;" rowspan="2">Doanh thu</th>
                        </tr>
                        <tr>
                            <th>Thanh toán online</th>
                            <th>Thanh toán offline</th>
                            <th>Huỷ</th>
                        </tr>
                    </thead>
                    

                    <tbody>
                        @foreach ($mergedCars as $mergedCars)
                            <tr>
                                <td>{{$mergedCars['tenNhaXe']}}</td>
                                <td>{{$mergedCars['soLuongXe']}}</td>
                                <td>{{$mergedCars['soLuongVeDat']}}</td>
                                <td>{{$mergedCars['soLuongNguoi']}}</td>
                                <td>{{$mergedCars['ttOnline']}}</td>
                                <td>{{$mergedCars['ttOffline']}}</td>
                                <td>{{$mergedCars['huy']}}</td>
                                <td>{{ number_format( $mergedCars['doanhThu'], 0, ',', ',') }}đ</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection
