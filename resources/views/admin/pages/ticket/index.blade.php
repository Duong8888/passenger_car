@extends('admin.layouts.master')
@section("title", "Quản lí  vé")
@section('content')
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-3">Tickets List</h4>
                            <div style="display: flex; justify-content: space-between">
                                <a href="{{ route('admin.ticket.create') }}">
                                    <button type="button" class="btn btn-success waves-effect waves-light mb-4">Create New
                                        Ticket
                                    </button>
                                </a>
                                <form action="{{ route('admin.ticket.search') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" name="license_plate" placeholder="Enter License..">
                                    <button type="submit">Search</button>
                                </form>
                            </div>
                           
                            @if ($message = Session::get('success'))
                                <div>
                                    <ul>
                                        <li>{{ $message }}</li>
                                    </ul>
                                </div>
                            @endif
                          
                            <div class="table">
                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th>PassengerCar</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Thanh toán</th>
                                        <th>Departure</th>
                                        <th>Arrival</th>
                                        <th>Date</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
                                        <th>Price</th>
                                        <th>Action</th>
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
                                                    <span class="badge bg-warning">Pending</span>
                                                @elseif($ticket->status == 2)
                                                    <span class="badge bg-success">Success</span>
                                                @elseif($ticket->status == 0)
                                                    <span class="badge bg-danger">Cancel</span>
                                                @elseif($ticket->status == 3)
                                                    <span class="badge bg-info">Confirmed</span>
                                                @endif
                                            </td>
                                            <td>{{ number_format($ticket->total_price, 0, '', ',') }}</td>

                                            <td>
                                                <div class="dropdown float-end">
                                                    <a href="#" class="dropdown-toggle arrow-none card-drop"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <!-- item-->
                                                        <a class="dropdown-item"
                                                            href="{{ route('admin.ticket.edit', $ticket->id) }}">Sửa
                                                        </a>
                                                        <a href="javascript:void(0);" class="dropdown-item confirm" data-id="{{ $ticket->id }}">
                                                            Xác nhận
                                                        </a>
                                                        <!-- item-->
                                                        @if ($ticket->status == 1 && $ticket->payment_method === "Đã Thanh toán VNPAY" )
                                                            <a  data-id="<?= $ticket->id; ?>" href="javascript:void(0);" class="dropdown-item vnpay-cancel">Hủy vé</a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                        </tbody>
                                    @endforeach

                                </table>
                                <div class="float-end mt-2">
                                    {{ $data->links() }}
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
@section('page-script')
    <script>
        $(document).ready(function(){
            $(document).on('click','.confirm', function(){
                let id = $(this).data('id');
               $.ajax({
                url : '/admin/confirm',
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

            $('.vnpay-cancel').on('click', function(){
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
                        success: function(data) {
                            $icon = 'error';
                            if(data.status === "00"){
                                $icon = 'success';
                            }
                            Swal.fire({
                                title: "Thông báo",
                                text: data.message,
                                icon: $icon
                            });
                            if(data.status == 00){
                                window.location.href = "/admin/ticket"
                            }
                        }
                    });
                }
            });
            })
        })  
    </script>
  
    <!--Morris Chart-->
    <script src="admin/libs/morris.js06/morris.min.js"></script>
    <script src="admin/libs/raphael/raphael.min.js"></script>

    <!-- Dashboar init js-->
    <script src="admin/js/pages/dashboard.init.js"></script>
@endsection
