@extends('admin.layouts.master')
@section("title", "Quản lí vé")
@section('content')
    <div class="content" id="app">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-3">Tickets List</h4>
                            <div style="display: flex; justify-content: space-between">
                                <a href="{{ route('admin.ticket.create') }}">
                                    <button type="button" class="btn btn-success waves-effect waves-light mb-4">Create
                                        New
                                        Ticket
                                    </button>
                                </a>
                                <form>
                                </form>
                                <form action="{{ route('admin.ticket.search') }}" method="get" class="form-inline">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-auto">
                                            <input type="date" name="date"
                                                   value="{{isset($_GET['date'])?$_GET['date']:''}}"
                                                   class="form-control">
                                        </div>
                                        <div class="col-auto">
                                            <select data-action="{{route('admin.time')}}"
                                                    name="license_plate" class="form-control">
                                                <option value="">Chọn xe</option>
                                                @foreach ($passengerCar as $value)
                                                    <option
                                                        @if(isset( $_GET['license_plate']) && $_GET['license_plate'] == $value->id) selected
                                                        @endif value="{{ $value->id }}">{{ $value->license_plate }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-auto">
                                            <select name="time_select" id="time_select" class="form-control">
                                                <option value="">Chọn giờ</option>
                                            </select>
                                        </div>

                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-primary">Search</button>
                                        </div>
                                    </div>
                                </form>

                            </div>

                            @if ($message = Session::get('success'))
                                <div>
                                    <ul>
                                        <li>{{ $message }}</li>
                                    </ul>
                                </div>
                            @endif

                            <div class="table overflow-auto">
                                <table id="datatable-buttons"
                                       class="table table-striped table-bordered dt-responsive nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên</th>
                                        <th>Xe</th>
                                        <th>Số Điện Thoại</th>
                                        <th>Email</th>
                                        <th>Thanh toán</th>
                                        <th>Điểm đón</th>
                                        <th>Điểm trả</th>
                                        <th>Ngày</th>
                                        <th>Số lượng</th>
                                        <th>Trạng thái</th>
                                        <th>Giá</th>
                                        <th>Thao tác</th>
                                    </tr>
                                    </thead>
                                    @foreach ($data as $ticket)
                                        <tbody>
                                        <tr>
                                            <td>#{{ $ticket->id }}</td>
                                            <td>{{ $ticket->username }}</td>
                                            <td>
                                                @foreach ($passengerCar as $value)
                                                    @if ($ticket->passenger_car_id == $value->id)
                                                        {{ $value->license_plate }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>{{ $ticket->phone }}</td>
                                            <td>{{ $ticket->email }}</td>
                                            <td>{{ $ticket->payment_method }}</td>
                                            <td>{{ $ticket->departure }}</td>
                                            <td>{{ $ticket->arrival }}</td>
                                            <td>{{ $ticket->date }}</td>
                                            <td>{{ $ticket->quantity }}</td>
                                            <td>
                                                @if ($ticket->status == 1 )
                                                    <span class="badge bg-warning">Vé chưa đi</span>
                                                @elseif($ticket->status == 2)
                                                    <span class="badge bg-success">Vé đã đi</span>
                                                @elseif($ticket->status == 0)
                                                    <span class="badge bg-danger">Vé đã hủy</span>
                                                @endif
                                            </td>
                                            <td>{{ number_format($ticket->total_price, 0, '', ',') }}</td>

                                            <td>
                                                <div class="dropdown float-end" @if($ticket->status == 2) style="display: none" @endif>
                                                    <a href="#" class="dropdown-toggle arrow-none card-drop"
                                                       data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <!-- item-->
                                                        <a class="dropdown-item"
                                                           href="{{ route('admin.ticket.edit', $ticket->id) }}">Sửa
                                                        </a>
                                                        {{-- <a class="dropdown-item confirm" data-id="{{ $ticket->id }}">
                                                            Xác nhận
                                                        </a> --}}
                                                        <!-- item-->
                                                        @if ($ticket->status == 1 && $ticket->payment_method === "Đã
                                                        Thanh toán VNPAY" )
                                                            <a data-id="<?= $ticket->id; ?>" href="javascript:void(0);"
                                                               class="dropdown-item vnpay-cancel">Hủy vé</a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                                <input hidden value="{{!empty($_GET['time_select'])?$_GET['time_select']:0}}" id="timeId">
                            </div>
                            <div class="float-end mt-2">
                                {{ $data->links() }}
                            </div>
                        </div>
                    </div>

                </div><!-- end col -->

            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->
@endsection
@section('page-script')
    <script>
        function checkDate(event) {
            var inputDate = new Date(event.target.value);
            var currentDate = new Date();
            if (inputDate < currentDate) {
                event.target.value = '{{ date('Y-m-d') }}';
            }
        }
    </script>
    <script>
        $(document).ready(function () {
            $(document).on('click', '.confirm', function () {
                let id = $(this).data('id');
                $.ajax({
                    url: '/admin/confirm',
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType: "json",
                    data: {
                        id: id
                    },
                    success: function (response) {
                        Swal.fire({
                            position: "top-end",
                            icon: "success",
                            title: "success",
                            showConfirmButton: false,
                            timer: 1500,
                        });
                        window.location.href = '/admin/ticket';
                    }
                })
            })

            $('.vnpay-cancel').on('click', function () {
                $value = $(this).data("id");
                Swal.fire({
                    title: "Thông báo",
                    text: "Bạn có chắc chắn muốn xác nhận!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Đúng!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: 'post',
                            url: '/admin/ticket/cancel',
                            data: {
                                "id": $value
                            },
                            success: function (data) {
                                $icon = 'error';
                                if (data.status === "00") {
                                    $icon = 'success';
                                }
                                Swal.fire({
                                    title: "Thông báo",
                                    text: data.message,
                                    icon: $icon
                                });
                                if (data.status == 00) {
                                    window.location.href = "/admin/ticket"
                                }
                            }
                        });
                    }
                });
            })
            var licensePlate = $('select[name="license_plate"]');
            var timeId = $('#timeId').val();
            console.log(timeId);
            function showTime() {
                $.ajax({
                    url: licensePlate.attr('data-action'),
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType: "json",
                    data: {
                        id:  licensePlate.val(),
                    },
                    success: function (response) {
                        console.log(response[0]);
                        $('#time_select').empty();
                        $('#time_select').append('<option value="">Chọn giờ</option>');
                        if(response.length != 0){
                            for (var i = 0; i < response[0].length; i++) {
                                var selected = '';
                                if(response[0][i].id == timeId){
                                    selected = "selected";
                                }
                                $('#time_select').append('<option value="' + response[0][i].id + '" '+selected+'>' + response[0][i].departure_time.slice(0, -3) + '-' + response[0][i].arrival_time.slice(0, -3) +'</option>');
                            }
                        }

                    },
                    error: function (error) {
                        console.log(error);
                    }
                });
            }
            licensePlate.on('change', showTime);

            if(licensePlate.val() != ''){
                showTime();
            }

        })
    </script>

    <!--Morris Chart-->
    <script src="admin/libs/morris.js06/morris.min.js"></script>
    <script src="admin/libs/raphael/raphael.min.js"></script>

    <!-- Dashboar init js-->
    <script src="admin/js/pages/dashboard.init.js"></script>
@endsection
