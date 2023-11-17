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
<!--Morris Chart-->
<script src="{{asset('admin/libs/morris.js06/morris.min.js')}}"></script>
<script src="{{asset('admin/libs/raphael/raphael.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('admin/js/custom/ticket-report.js') }}"></script>
<script src="{{ asset('admin/js/custom/user-report.js') }}"></script>
<!-- Dashboar init js-->
<script src="{{asset('admin/js/pages/dashboard.init.js')}}"></script>
<script src="{{ asset('admin/libs/flot-charts/jquery.flot.js') }}"></script>
<script src="{{ asset('admin/libs/flot-charts/jquery.flot.time.js') }}"></script>
<script src="{{ asset('admin/libs/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('admin/libs/flot-charts/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('admin/libs/flot-charts/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('admin/libs/flot-charts/jquery.flot.selection.js') }}"></script>
<script src="{{ asset('admin/libs/flot-charts/jquery.flot.stack.js') }}"></script>
<script src="{{ asset('admin/libs/flot-orderbars/js/jquery.flot.orderBars.js') }}"></script>
<script src="{{ asset('admin/libs/flot-charts/jquery.flot.crosshair.js') }}"></script>

<!-- init js -->
<script src="{{ asset('admin/js/pages/flot.init.js') }}"></script>

@endsection

@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">

                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>

                            <h4 class="header-title mt-0 mb-4">Số lượng người dùng</h4>

                            <div class="widget-chart-1" >

                                <div class="widget-chart-box-1 float-start" dir="ltr" style="position: relative;">
                                    <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#ffffff"
                                           data-bgColor="#db3700"
                                           data-skin="tron" data-angleOffset="180" data-readOnly=true
                                           data-thickness=".15"/>
                                           <i class="fa-solid fa-users fa-beat-fade" style="position: absolute; top: 30%; left: 30%; transform: translate(-50%, -50%);font-size:25px;color:#db3700"></i>
                                </div>

                                <div class="widget-detail-1 text-end">
                                    <h2 class="fw-normal pt-2 mb-1">{{ $totalUsers->count() }}</h2>
                                    <p class="text-muted mb-1">Người dùng mới: {{ $userCountToday }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>

                            <h4 class="header-title mt-0 mb-4">Số lượng xe</h4>

                            <div class="widget-chart-1" >

                                <div class="widget-chart-box-1 float-start" dir="ltr" style="position: relative;">
                                    <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#ffffff"
                                           data-bgColor="#10c469"
                                           data-skin="tron" data-angleOffset="180" data-readOnly=true
                                           data-thickness=".15"/>
                                           <i class="fa-solid fa-bus fa-beat-fade" style="position: absolute; top: 30%; left: 30%; transform: translate(-50%, -50%);font-size:25px;color:#10c469"></i>
                                </div>

                                <div class="widget-detail-1 text-end">
                                    <h2 class="fw-normal pt-2 mb-1">{{ $totalPassengerCars }}</h2>
                                    <p class="text-muted mb-1">Xe được thêm: {{ $passengerCarsCountToday }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>

                            <h4 class="header-title mt-0 mb-4">Số bài viết</h4>

                            <div class="widget-chart-1">
                                <div class="widget-chart-box-1 float-start" dir="ltr" style="position: relative;">
                                    <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#ffffff"
                                           data-bgColor="#ffbd4a"
                                           data-skin="tron" data-angleOffset="180" data-readOnly=true
                                           data-thickness=".15"/>
                                           <i class="fa-solid fa-pen fa-beat-fade" style="position: absolute; top: 30%; left: 30%; transform: translate(-50%, -50%);font-size:25px;color:#ffbd4a"></i>
                                </div>
                                <div class="widget-detail-1 text-end">
                                    <h2 class="fw-normal pt-2 mb-1">{{ $totalPosts }}</h2>
                                    <p class="text-muted mb-1">Bài viết hôm nay: {{ $postCountToday }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>

                            <h4 class="header-title mt-0 mb-4">Số bình luận</h4>

                            <div class="widget-chart-1">
                                <div class="widget-chart-box-1 float-start" dir="ltr" style="position: relative;">
                                    <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#ffffff"
                                           data-bgColor="#ff8acc"
                                           data-skin="tron" data-angleOffset="180" data-readOnly=true
                                           data-thickness=".15"/>
                                           <i class="fa-solid fa-comment fa-beat-fade" style="position: absolute; top: 30%; left: 30%; transform: translate(-50%, -50%);font-size:25px;color:#ff8acc"></i>
                                </div>
                                <div class="widget-detail-1 text-end">
                                    <h2 class="fw-normal pt-2 mb-1">{{ $comments->count() }}</h2>
                                    <p class="text-muted mb-1">Bình luận hôm nay: {{ $commentsCountToday }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->

            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>

                            <h4 class="header-title mt-0">Thống kê Người dùng</h4>
                            <div id="website-stats" style="height: 390px;" class="flot-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>
                            <h4 class="header-title mt-0">Thống kê vé</h4>
                            <div id="morris-bar-example" style="height: 390px;" dir="ltr" class="morris-chart">
                                <canvas id="myChart" ></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            {{-- <div class="row">
                @foreach ($admins as $admin)
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body widget-user">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 avatar-lg me-3">
                                        <img src="https://i.imgur.com/Psr9jJB.jpg" class="img-fluid rounded-circle" alt="user">
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="mt-0 mb-1">{{ $admin->name }}</h5>
                                        <p class="text-muted mb-2 font-13 text-truncate">{{ $admin->email }}</p>
                                        <small class="text-warning"><b>{{ $admin->user_type }}</b></small>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach

            </div> --}}
            <!-- end row -->

            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>

                            <h4 class="header-title mb-3">Tin nhắn liên hệ trong ngày</h4>

                            <div class="inbox-widget">
                                @foreach ($contacts as $contact)
                                    <div class="inbox-item">
                                        <a href="#">
                                            <div class="inbox-item-img"><img src="{{ asset('admin/images/users/user-2.jpg') }}" class="rounded-circle" alt=""></div>
                                            <h5 class="inbox-item-author mt-0 mb-1"> {{ $contact ->user_name }}</h5>
                                            <p class="inbox-item-text"> {{ Str::limit($contact->meassageInput, 60) }}</p>
                                            <p class="inbox-item-date">{{ $contact->created_at->format('H:i A') }}</p>
                                        </a>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>

                </div><!-- end col -->

                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>

                            <h4 class="header-title mt-0 mb-3">Vé xe đã đặt trong ngày</h4>

                            <div class="table-responsive">
                                <div class="card">
                                    <div class="card-body">
                                        <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Tên người đặt</th>
                                                    <th>Số điện thoại</th>
                                                    <th>Tên nhà xe</th>
                                                    <th>Ngày đặt chuyến</th>
                                                    <th>Trạng thái</th>
                                                    <th>Hình thức thanh toán</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                @foreach ($tickets as $ticket)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $ticket->username }}</td>
                                                    <td>{{ $ticket->phone }}</td>
                                                    <td>{{ $ticket->passengerCar->user->name}}</td>
                                                    <td>{{ $ticket->created_at}}</td>
                                                    <td>@if ($ticket->status  == 1)
                                                        <div style="color: green;">Đang đặt</div>
                                                    @elseif ($ticket->status  == 2)
                                                        <div style="color: blue;">Đã đi</div>
                                                    @elseif ($ticket->status  == 0)
                                                        <div style="color: red;">Đã hủy</div>
                                                    @endif</td>
                                                    <td>{{ $ticket->payment_method }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- end col -->

            </div>
        </div> <!-- container -->

    </div> <!-- content -->
@endsection