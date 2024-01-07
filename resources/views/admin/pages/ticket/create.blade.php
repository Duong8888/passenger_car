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
                                            <input type="text" class="form-control" id="name" name="username">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email">
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

                                        <div class="mb-3">
                                            <label for="date" class="form-label">Ngày đi</label>
                                            <input type="date" id="date" name="date" min="<?php echo date('Y-m-d' ); ?>"
                                                   class="form-control" value="<?php echo date('Y-m-d'); ?>">
                                        </div>

                                    </div>

                                    <div class="col-4">

                                        <div class="mb-3">
                                            <label class="form-label">Chọn xe</label>
                                            <select name="passenger_car_id" class="form-control PassengerCar"
                                                    data-action="{{route('admin.showLayout')}}">
                                            </select>
                                            <input type="number" name="quantity" value="" hidden>
                                            <input type="number" name="total_price" value="" hidden>
                                            <input type="number" name="status" value="1" hidden>
                                        </div>

                                        <div class="mb-3 form-label">
                                            <label for="time" class="form-label">Giờ đi</label>
                                            <select id="time" name="time" class="form-select" data-action="{{route('admin.showLayout')}}">

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

                                        <div class="mb-3">
                                            <label class="form-label">Giá vé</label>
                                            <input value="" id="price-seat" class="form-control" type="number" disabled>
                                            <input type="hidden" value="thanh toán tại nhà xe" name="payment_method">
{{--                                            <select name="payment_method" class="form-control hidden">--}}
{{--                                                <option value="Đã Thanh toán VNPAY">Đã Thanh toán VNPAY</option>--}}
{{--                                                <option value="thanh toán tại nhà xe" selected >thanh toán tại nhà xe</option>--}}
{{--                                            </select>--}}
                                        </div>
                                    </div>

                                    <div class="col-4 d-flex align-items-center justify-content-center flex-column">
                                        <div class="mb-3">
                                            <div class="showPassengerCar d-flex align-items-center flex-column">
                                                <img style="width: 100%;border-radius: 10px" src="{{asset('images/banner-11.jpg')}}">
                                            </div>
                                        </div>

                                        <p class="totalPrice text-blue"></p>
                                    </div>

                                    <div class="mb-3">
                                        <button type="button" class="btn btn-submit btn-primary float-end">Create</button>
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
                            var priceSeat = 0;

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

                                $('.btn-submit').on('click',function (){
                                    var formData = $('#create_ticket').serialize();
                                    $.ajax({
                                        url:'{{route('admin.ticket.check')}}',
                                        method:"POST",
                                        data:formData,
                                        success: function(response) {
                                            if(response.check){
                                                $('#create_ticket').submit();
                                            }else {
                                                showLayout();
                                                $('.totalPrice').html(`<span style="color:red;">Ghế của bạn đã có người đặt.</span>`);
                                            }
                                        },
                                        error: function(error) {
                                            console.log("Lỗi:", error);
                                        }
                                    });
                                });

                                $('select[name="passenger_car_id"]').on('change', function () {
                                    //console.log($('select[name="passenger_car_id"]').attr('data-action'));
                                    $('.showPassengerCar').html(`<img style="width: 100%;border-radius: 10px" src="{{asset('images/banner-11.jpg')}}">`);
                                    var selectedOption = $(this).find('option:selected');
                                    priceSeat = selectedOption.data('price');
                                    $('#price-seat').val(priceSeat);
                                    $.ajax({
                                        url: $(this).data('action'),
                                        method: "POST",
                                        data: {
                                            _token: $('meta[name="csrf-token"]').attr('content'),
                                            id: $(this).val(),
                                            date: $('#date').val(),
                                        },
                                        success: function (data) {
                                            $('#time').html('<option value="">Chọn</option>');
                                            $.each(data.times, function (index, item) {
                                                $('#time').append(`<option value="${item.id}">${item.departure_time} - ${item.arrival_time}</option>`);
                                            });
                                        },
                                        error: function (error) {
                                            console.log(error)
                                        }
                                    });
                                });

                                function showLayout(){
                                    $.ajax({
                                        url: $('select[name="time"]').data('action'),
                                        method: "POST",
                                        data: {
                                            _token: $('meta[name="csrf-token"]').attr('content'),
                                            id: $('select[name="passenger_car_id"]').val(),
                                            date: $('#date').val(),
                                            time_id: $('select[name="time"]').val()
                                        },
                                        success: function (data) {
                                            $('.showPassengerCar').html('');
                                            console.log(data);

                                            var checkedSeatCount = 0;

                                            $.each(data.layout, function (index, item) {
                                                var html = '';
                                                $.each(JSON.parse(item.seat), function (index2, item2) {
                                                    if (item2 == 'icon') {
                                                        html += `<span class="material-symbols-outlined border" style="font-size: 40px;color: #74788d">search_hands_free</span>`;
                                                    } else if (item2 == '') {
                                                        html += `<span class="material-symbols-outlined d-inline-block border" style="font-size: 40px;color:#FFFFFF;">weekend</span>`;
                                                    } else {
                                                        var item = '';
                                                        item = `
                                                                    <label for="${item2}" class="border">
                                                                        <span class="material-symbols-outlined d-inline-block" style="font-size: 40px;">weekend</span>
                                                                    </label>
                                                                    <input style="display: none;" class="slot" type="checkbox" name="slot[]" id="${item2}" value="${item2}">
                                                                `;
                                                        $.each(data.checkSlot, function (indexCheckSlot, itemCheckSlot) {
                                                            if (itemCheckSlot.seat_id == item2) {
                                                                item=`
                                                                    <label for="${item2}" class="border">
                                                                        <span class="material-symbols-outlined d-inline-block" style="font-size: 40px;color: red;">weekend</span>
                                                                    </label>
                                                                `;
                                                            }
                                                        });
                                                        html += item;
                                                    }
                                                });
                                                $('.showPassengerCar').append(
                                                    `<div class="d-flex">
                                                        ${html}
                                                    </div>`
                                                );
                                            });

                                            $('.showPassengerCar').on('change', 'input[type="checkbox"]', function () {
                                                var labelFor = $(this).attr('id');
                                                var correspondingLabel = $('label[for="' + labelFor + '"]>span');

                                                if ($(this).is(':checked')) {
                                                    correspondingLabel.css('color', 'green');
                                                    checkedSeatCount++;
                                                } else {
                                                    correspondingLabel.css('color', '');
                                                    checkedSeatCount--;
                                                }

                                                $('input[name="quantity"]').val(checkedSeatCount);
                                                $('input[name="total_price"]').val(checkedSeatCount*priceSeat);
                                                function formatCurrency(amount) {
                                                    return amount.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
                                                }
                                                let formattedMoney = formatCurrency(checkedSeatCount*priceSeat);
                                                $('.totalPrice').html('Tổng tiền : '+formattedMoney);
                                            });
                                        },
                                        error: function (error) {
                                            console.log(error)
                                        }
                                    });
                                }

                                $('select[name="time"], input[type="date"]').on('change',showLayout);





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
                                    $('.showPassengerCar').html(`<img style="width: 100%;border-radius: 10px" src="{{asset('images/banner-11.jpg')}}">`);
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
                                            let passengerCar = '<option data-id="">Chọn</option>';
                                            let price = '';
                                            response.forEach(function (Car) {
                                                passengerCar += '<option data-price="'+Car.price+'" data-id="' + Car.id + '" value="' +
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
                                });

                            })
                        </script>

                        <!--Morris Chart-->
                        <script src="admin/libs/morris.js06/morris.min.js"></script>
                        <script src="admin/libs/raphael/raphael.min.js"></script>

                        <!-- Dashboar init js-->
                        <script src="admin/js/pages/dashboard.init.js"></script>
@endsection
