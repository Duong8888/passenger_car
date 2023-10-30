@extends('admin.layouts.master')

@section('page-script')
    <!--Morris Chart-->
    <script src="admin/libs/morris.js06/morris.min.js"></script>
    <script src="admin/libs/raphael/raphael.min.js"></script>

    <!-- Dashboar init js-->
    <script src="admin/js/pages/dashboard.init.js"></script>
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

                            <div class="widget-chart-1">
                                <div class="widget-chart-box-1 float-start" dir="ltr">
                                    <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#f05050 "
                                           data-bgColor="#F9B9B9" value="{{ $percentage = ($totalUsers->count() > 0) ? round(($userCountToday / ($totalUsers->count())) * 100, 2) : 0; }}"
                                           data-skin="tron" data-angleOffset="180" data-readOnly=true
                                           data-thickness=".15"/>
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

                            <h4 class="header-title mt-0 mb-3">Số lượng xe</h4>

                            <div class="widget-box-2">
                                <div class="widget-detail-2 text-end">
                                    <span class="badge bg-success rounded-pill float-start mt-3">{{ $percentage = ($totalPassengerCars > 0) ? round(($passengerCarsCountToday / $totalPassengerCars) * 100, 2) : 0; }}% <i class="mdi mdi-trending-up"></i> </span>
                                    <h2 class="fw-normal mb-1">{{ $totalPassengerCars }} </h2>
                                    <p class="text-muted mb-3">Xe được thêm: {{ $passengerCarsCountToday }}</p>
                                </div>
                                <div class="progress progress-bar-alt-success progress-sm">
                                    <div class="progress-bar bg-success" role="progressbar"
                                         aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                         style="width: {{ $percentage = $passengerCarsCountToday / $totalPassengerCars * 100 }}%;">
                                    </div>
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
                                <div class="widget-chart-box-1 float-start" dir="ltr">
                                    <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#ffbd4a"
                                           data-bgColor="#FFE6BA" value="{{ $percentage = ($totalPosts > 0) ? round(($postCountToday / $totalPosts) * 100, 2) : 0; }}"
                                           data-skin="tron" data-angleOffset="180" data-readOnly=true
                                           data-thickness=".15"/>
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

                            <h4 class="header-title mt-0 mb-3">Số bình luận</h4>

                            <div class="widget-box-2">
                                <div class="widget-detail-2 text-end">
                                    <span class="badge bg-pink rounded-pill float-start mt-3">{{ $percentage = ($comments->count() > 0) ? round(($commentsCountToday / ($comments->count())) * 100, 2) : 0; }}% <i class="mdi mdi-trending-up"></i> </span>
                                    <h2 class="fw-normal mb-1"> {{ $comments->count() }}</h2>
                                    <p class="text-muted mb-3">Bình luận hôm nay: {{ $commentsCountToday }}</p>
                                </div>
                                <div class="progress progress-bar-alt-pink progress-sm">
                                    <div class="progress-bar bg-pink" role="progressbar"
                                         aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                         style="width: {{ $percentage = ($comments->count() > 0) ? round(($commentsCountToday / ($comments->count())) * 100, 2) : 0; }}%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- end col -->

            </div>
            <!-- end row -->

            <div class="row">
                {{-- <div class="col-xl-4">
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

                            <h4 class="header-title mt-0">Bình luận đánh giá</h4>
                            <div id="morris-line-example" dir="ltr" style="height: 280px;" class="morris-chart"></div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-xl-4">
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
                            <h4 class="header-title mt-0">Statistics</h4>
                            <div id="morris-bar-example" dir="ltr" style="height: 280px;" class="morris-chart"></div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-xl-4">
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
                            <h4 class="header-title mt-0">Total Revenue</h4>
                            <div id="morris-line-example" dir="ltr" style="height: 280px;" class="morris-chart"></div>
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

                            <h4 class="header-title mb-3">Tin nhắn liên hệ</h4>

                            <div class="inbox-widget">

                                <div class="inbox-item">
                                    <a href="#">
                                        <div class="inbox-item-img"><img src="admin/images/users/user-2.jpg" class="rounded-circle" alt=""></div>
                                        <h5 class="inbox-item-author mt-0 mb-1">Số 1</h5>
                                        <p class="inbox-item-text">Tôi muốn báo lỗi này...</p>
                                        <p class="inbox-item-date">13:34 PM</p>
                                    </a>
                                </div>

                                <div class="inbox-item">
                                    <a href="#">
                                        <div class="inbox-item-img"><img src="admin/images/users/user-3.jpg" class="rounded-circle" alt=""></div>
                                        <h5 class="inbox-item-author mt-0 mb-1">Số 2</h5>
                                        <p class="inbox-item-text">Giúp tôi kiểm tra xem...</p>
                                        <p class="inbox-item-date">13:17 PM</p>
                                    </a>
                                </div>

                                <div class="inbox-item">
                                    <a href="#">
                                        <div class="inbox-item-img"><img src="admin/images/users/user-4.jpg" class="rounded-circle" alt=""></div>
                                        <h5 class="inbox-item-author mt-0 mb-1">Số 3</h5>
                                        <p class="inbox-item-text">Tôi quay lại rồi nè...</p>
                                        <p class="inbox-item-date">12:20 PM</p>
                                    </a>
                                </div>

                                <div class="inbox-item">
                                    <a href="#">
                                        <div class="inbox-item-img"><img src="admin/images/users/user-5.jpg" class="rounded-circle" alt=""></div>
                                        <h5 class="inbox-item-author mt-0 mb-1">Số 4</h5>
                                        <p class="inbox-item-text">Trang web này có ổn ko...</p>
                                        <p class="inbox-item-date">10:15 AM</p>
                                    </a>
                                </div>
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
                                <table class="table table-hover mb-0">
                                    <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên người dùng</th>
                                        <th>Tên nhà xe</th>
                                        <th>Ngày đặt chuyến</th>
                                        <th>Trạng thái</th>
                                        <th>Hình thức thanh toán</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->latest_ticket->username }}</td>
                                            <td>{{ $data->latest_ticket->created_at }}</td>
                                            <td>@if ($data->latest_ticket->status  == 0)
                                                <div style="color: green;">Đang đặt</div>
                                            @elseif ($data->latest_ticket->status  == 1)
                                                <div style="color: blue;">Đã đi</div>
                                            @elseif ($data->latest_ticket->status  == 2)
                                                <div style="color: red;">Đã hủy</div>
                                            @endif</td>
                                            <td>{{ $data->latest_ticket->payment_method }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div><!-- end col -->

            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->
@endsection
