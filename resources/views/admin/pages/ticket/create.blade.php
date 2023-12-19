@extends('admin.layouts.master')
@section("title", "Tạo mới vé")
@section('content')
    <div class="content">
        <?php
        $uniqueDepartures = [];
        $uniqueArrival = [];
        ?>
            <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-3">Tạo vé</h4>
                            <div class="">
                                <form action="{{ route('admin.ticket.store') }}" method="post"
                                      enctype="multipart/form-data"
                                      id="create_ticket" class="row">
                                    @csrf
                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Số điên thoại</label>
                                            <input type="text" class="form-control" id="phone" name="phone">
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Tên khách hàng</label>
                                            <input type="text" class="form-control" id="name" name="username" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" disabled>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Tuyến đường</label>
                                            <select name="route" class="form-control route">
                                                @foreach($route as $key => $value)
                                                    <option value="{{$value->id}}">{{$value->departure}}
                                                        - {{$value->arrival}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>

                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label class="form-label">Chọn xe</label>
                                            <select name="passenger_car_id" class="form-control PassengerCar"
                                                    data-action="{{route('admin.showLayout')}}">
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="date" class="form-label">Ngày đi</label>
                                            <input type="date" id="date" name="date" min="<?php echo date('Y-m-d' ); ?>"
                                                   class="form-control" value="<?php echo date('Y-m-d'); ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="time" class="form-label">Giờ đi</label>
                                            <select id="time">
                                                <option>12:15</option>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="departure" class="form-label">Điểm đón</label>
                                            <input type="text" id="departure" name="departure"
                                                   class="form-control departure">
                                        </div>
                                        <div class="mb-3">
                                            <label for="arrival" class="form-label">Điểm trả</label>
                                            <input type="text" id="arrival" name="arrival" class="form-control arrival">
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label class="form-label">Hình thức thanh toán</label>
                                            <select name="payment_method" class="form-control">
                                                <option value="Đã Thanh toán VNPAY">Đã Thanh toán VNPAY</option>
                                                <option value="thanh toán tại nhà xe">thanh toán tại nhà xe</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <div class="showPassengerCar d-flex align-items-center flex-column">
                                                {{--                                                <div class="d-flex">--}}
                                                {{--                                                    <span class="material-symbols-outlined d-inline-block border" style="font-size: 40px;">weekend</span>--}}
                                                {{--                                                    <span class="material-symbols-outlined d-inline-block border" style="font-size: 40px;">weekend</span>--}}
                                                {{--                                                    <span class="material-symbols-outlined d-inline-block border" style="font-size: 40px;">weekend</span>--}}
                                                {{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary float-end">Create</button>
                                    </div>

                                </form>

                            </div>
                            <!-- end row -->

                        </div> <!-- container -->

                    </div> <!-- content -->
                    @endsection

                    @section('page-script')
                        <script>
                            let showPassenger = $('.showPassengerCar');
                            $(document).ready(function () {
                                $('#phone').change(function () {
                                    let phone = $(this).val();
                                    if (phone !== "") {
                                        $("#name").prop('disabled', false);
                                        $("#email").prop('disabled', false);
                                    } else {
                                        $("#name").prop('disabled', true);
                                        $("#email").prop('disabled', true);
                                    }
                                });

                                $('.PassengerCar').change(function () {
                                    let it = $(this).val();
                                    if (it !== "") {
                                        $("#departure").prop('disabled', false);
                                        $("#arrival").prop('disabled', false);
                                        $("#quantity").prop('disabled', false);
                                    } else {
                                        $("#departure").prop('disabled', true);
                                        $("#arrival").prop('disabled', true);
                                        $("#quantity").prop('disabled', true);
                                    }
                                })
                                $('#phone').mouseover(function () {
                                    var phone = $(this).val();

                                    $.ajax({
                                        url: '/admin/phone',
                                        method: 'POST',
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        },
                                        dataType: "json",
                                        data: {
                                            phone: phone
                                        },
                                        success: function (data) {
                                            $('#name').val(data.name)
                                            $('#email').val(data.email)
                                        }
                                    })
                                });

                                $('select[name="passenger_car_id"]').on('change', function () {
                                    console.log($('select[name="passenger_car_id"]').attr('data-action'));
                                    $.ajax({
                                        url: $(this).data('action'),
                                        method: "POST",
                                        data: {
                                            id: $(this).val(),
                                            date: $('#date').val(),
                                        },
                                        success: function (data) {
                                            $('.showPassengerCar').html('');
                                            console.log(data);
                                            $.each(data.layout, function (index, item) {
                                                var html = '';
                                                $.each(JSON.parse(item.seat), function (index2, item2) {
                                                    if (item2 == 'icon') {
                                                        html += `<span class="material-symbols-outlined border" style="font-size: 40px;color: #74788d">search_hands_free</span>`;
                                                    } else if (item2 == '') {
                                                        html += `<span class="material-symbols-outlined d-inline-block border" style="font-size: 40px;color:#FFFFFF;">weekend</span>`;
                                                    } else {
                                                        html += `<span class="material-symbols-outlined d-inline-block border" style="font-size: 40px;">weekend</span>`;
                                                    }
                                                });
                                                $('.showPassengerCar').append(
                                                    `<div class="d-flex">
                                                        ${html}
                                                    </div>`
                                                );

                                            });
                                        },
                                        error: function (error) {
                                            console.log(error)
                                        }
                                    });
                                });

                                $('.route-departure').change(function () {
                                    var departure = $(this).val();

                                    $.ajax({
                                        url: '/admin/trip',
                                        method: 'POST',
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        },
                                        dataType: "json",
                                        data: {
                                            departure: departure
                                        },
                                        success: function (response) {
                                            var showTrip = '';

                                            response.forEach(function (trip) {
                                                showTrip += '<option class="trip" data-id="' + trip.id +
                                                    '" value="' + trip.id + '">' + trip.slug + '</option>';
                                            });

                                            $('.route').html(showTrip);
                                        },
                                        error: function (error) {
                                        }
                                    })
                                })


                                $(document).on('click', '.route', function () {
                                    let id = $(this).val();

                                    $.ajax({
                                        url: '/admin/passgenerCar/' + id,
                                        method: 'POST',
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        },
                                        dataType: "json",
                                        data: {
                                            id: id
                                        },
                                        success: function (response) {
                                            let passengerCar = '';
                                            let price = '';
                                            response.forEach(function (Car) {
                                                passengerCar += '<option data-id="' + Car.id + '" value="' +
                                                    Car.id + '">' + Car.license_plate + ' | ' + Car.capacity + ' chỗ' + '</option>';
                                            });

                                            $('.PassengerCar').html(passengerCar);

                                        }
                                    })
                                });

                                $('.route-arrival').change(function () {
                                    var arrival = $(this).val();

                                    $.ajax({
                                        url: '/admin/trip',
                                        method: 'POST',
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        },
                                        dataType: "json",

                                        data: {
                                            arrival: arrival
                                        },
                                        success: function (response) {
                                            var showTrip = '';

                                            response.forEach(function (trip) {
                                                showTrip += '<option class="trip" data-id="' + trip.id +
                                                    '" value="' + trip.id + '">' + trip.slug + '</option>';
                                            });

                                            $('.route').html(showTrip);
                                        },
                                        error: function (error) {
                                        }
                                    })
                                })

                            })
                        </script>

                        <!--Morris Chart-->
                        <script src="admin/libs/morris.js06/morris.min.js"></script>
                        <script src="admin/libs/raphael/raphael.min.js"></script>

                        <!-- Dashboar init js-->
                        <script src="admin/js/pages/dashboard.init.js"></script>
@endsection
