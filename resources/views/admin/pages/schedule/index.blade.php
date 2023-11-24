@extends('admin.layouts.master')

@section('page-script')

    <!-- Init js-->
    <script src="{{asset('admin/js/pages/form-advanced.init.js')}}"></script>

    <script src="{{asset('client/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>
    <script src="{{asset('client/js/pages/job-list.init.js')}}"></script>
    <script type="module" src="{{asset('admin/js/custom/route.js')}}"></script>
@endsection

@section('page-style')
    <link rel="stylesheet" href="{{asset('client/libs/choices.js/public/assets/styles/choices.min.css')}}">
@endsection

@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-3">Lịch trình {{date("d/m/Y")}}</h4>

                            <div class="table-responsive">
                                <table class="table table-bordered mb-0">
                                    <thead>
                                    <tr>
                                        <th>Biển số</th>
                                        <th>Tuyến đường</th>
                                        <th>Thời gian khơi hành</th>
                                        <th>Thời gian kết thúc</th>
                                        <th>Trạng thái</th>
                                        <th>Thao tác</th>
                                    </tr>
                                    </thead>
                                    <tbody class="show-item-table">
                                    @foreach($car as $key => $value)
                                        @foreach($value->workingTime as $time)
                                            <tr>
                                                <td>{{$value->license_plate}} | {{$value->capacity}} chỗ</td>
                                                <td>{{$value->route->departure}} - {{$value->route->arrival}}</td>
                                                <td>{{date("H:i", strtotime($time->departure_time)) }}</td>
                                                <td>{{date("H:i", strtotime($time->arrival_time))}}</td>
                                                <td>Đang khởi hành</td>
                                                <td style="display: flex;">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            Action <i class="mdi mdi-chevron-down"></i>
                                                        </button>
                                                        <div class="dropdown-menu" style="">
                                                            <a class="dropdown-item btn-update" data-id="1" href="#">Thông
                                                                tin</a>
                                                            <a class="dropdown-item btn-update" data-id="1"
                                                               href="#">Sửa</a>
                                                            <a class="dropdown-item delete" data-id="1"
                                                               data-action="delete/1"
                                                               href="#">Xóa</a>
                                                        </div>
                                                    </div>

                                                </td>
                                            </tr>
                                        @endforeach
                                    @endforeach
                                    </tbody>

                                </table>
                                <div class="float-end mt-4">

                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- end col -->

            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->
@endsection
