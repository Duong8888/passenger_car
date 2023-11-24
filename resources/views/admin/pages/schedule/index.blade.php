@extends('admin.layouts.master')

@section('page-script')

    <!-- Init js-->
    <script src="{{asset('admin/js/pages/form-advanced.init.js')}}"></script>

    <script src="{{asset('client/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>
    <script type="module" src="{{asset('admin/js/custom/schedule.js')}}"></script>
@endsection

@section('page-style')

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
                                        @foreach($value->workingTime as $keyTime => $time)
                                            <tr>
                                                <td>{{$value->license_plate}} | {{$value->capacity}} chỗ</td>
                                                <td>{{$value->route->departure}} - {{$value->route->arrival}}</td>
                                                <td>{{date("H:i", strtotime($time->departure_time)) }}</td>
                                                <td>{{date("H:i", strtotime($time->arrival_time))}}</td>
                                                <td  id="text-{{$time->pivot->id}}" >{!!  $time->pivot->status == 0? '<span class="badge bg-purple">Chưa khởi hành</span>' : ($time->pivot->status == 1  ?'<span class="badge bg-primary">Đang khởi hành</span>':'<span class="badge bg-success">Đã hoàn thành chuyến</span>')  !!}</td>
                                                <td style="display: flex;">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            Action <i class="mdi mdi-chevron-down"></i>
                                                        </button>
                                                        <div class="dropdown-menu" id="action" data-action="{{route('admin.schedule.update')}}" style="" >
                                                            <div class="dropdown-item btn-update" data-item="{{$time->pivot->id}}" data-value="0" style="cursor: pointer;">Chưa khởi hành</div>
                                                            <div class="dropdown-item btn-update" data-item="{{$time->pivot->id}}" data-value="1" style="cursor: pointer;">Đang khởi hành</div>
                                                            <div class="dropdown-item btn-update" data-item="{{$time->pivot->id}}" data-value="2" style="cursor: pointer;">Đã hoàn thành chuyến</div>
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
