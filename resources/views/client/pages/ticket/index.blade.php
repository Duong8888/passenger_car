<!DOCTYPE html>
<html lang="en" dir="ltr" data-mode="light" class="scroll-smooths group" data-theme-color="violet">

<!-- Mirrored from themesdesign.in/jobcy-tailwind/layout/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 13:45:12 GMT -->

<head>
    <meta charset="utf-8"/>
    <title>index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta content="Tailwind Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="" name="Themesbrand"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="csrf-token" content="{{csrf_token()}}">

    @include('client.layout.partials.style')
    @yield('page-style')
</head>

@if (session()->has('value'))
    <body class="bg-white dark:bg-neutral-800">
    <nav
        class="navbar fixed right-0 left-0 top-0 px-5 lg:px-24 transition-all duration-500 ease shadow-lg shadow-gray-200/20 bg-white border-gray-200 z-40"
        id="navbar">

        <div class="mx-auto container-fluid relative">
            <div class="flex flex-wrap items-center justify-between mx-auto p-3">
                <a href="http://localhost:8000" class="items-center hidden sm:flex">
                    <img src="https://i.imgur.com/chCW0o6.png" alt="" class="logo-dark block dark:hidden"
                         style="width: 200px">
                </a>
                <div class="absolute left-[50%] text-center" style="transform: translateX(-50%)">
                    <p>Thời gian thanh toán còn lại</p>
                    <p id="countdown" class="countdown font-bold text-red-500">Loading...</p>
                </div>

            </div>
        </div>
    </nav>
    {{--    <div class="container">--}}
    {{--        <p>Bạn có 10 phút để hoàn tất thanh toán:</p>--}}
    {{--        <div id="countdown" class="countdown">Loading...</div>--}}
    {{--    </div>--}}
    <section class="py-20 bg-gray-50 dark:bg-neutral-700">
        <div class="container mx-auto">
            <div class="mb-5">
                <h4 class="mb-3 text-lg text-gray-900 dark:text-gray-50">Chọn phương thức thanh toán</h4>
            </div>
            <div class="flex justify-between">
                <div class="" style="max-width: 60%; min-width: 60%;">
                    <div class="border p-4 mr-1" style="width: 100%;">

                        <h5 class="mb-3 text-1 text-gray-900 dark:text-gray-50">Phương thức thanh toán</h5>

                        <div class=" mb-5">
                            <input type="radio" id="option1" name="options" class="form-radio h-5 w-5 text-blue-600">
                            <label for="option1" class="ml-2 mb-3">Thanh toán bằng VNPAY</label>
                            <p class="mb-5">Tiện ích và nhanh chóng</p>
                            <div class="mb-5 show-infomation1"></div>
                        </div>
                        <div class=" mb-5">
                            <input type="radio" id="option2" name="options" class="form-radio h-5 w-5 text-blue-600">
                            <label for="option2" class="ml-2">Thanh toán tại nhà xe</label>
                            <p class="mb-5">Vui lòng đến văn phòng xe buýt và trả tiền cho nhân viên tại quầy để lấy vé
                            </p>
                            <div class="mb-5 show-infomation2"></div>
                        </div>
                    </div>
                </div>

                <div class="w-2/5 " style="max-width: 37%; min-width: 37%;">

                    <div class="mb-5 border p-4">
                        <div class="flex justify-between">
                            <h5 class="mb-3 text-1 text-gray-900 dark:text-gray-50">Thông Tin Chi Tiết</h5>
                            <button id="second-next"><i class="text-2xl mdi mdi-pencil"></i></button>
                        </div>


                        <h6 class="mb-3 text-1 text-gray-900 dark:text-gray-50">Tên</h6>
                        <p class="mb-3 nameChange">{{ isset(session('value')[0]['username']) ? session('value')[0]['username'] :
                            Auth::user()->name }}</p>

                        <h6 class="mb-3 text-1 text-gray-900 dark:text-gray-50">Số điện thoại</h6>
                        <p class="mb-3 phoneChange">{{ session()->has('value.0.phone') ? session('value')[0]['phone'] = session('value.0.phone') : session('value')[0]['phone'] }}  </p>
                        <h6 class="mb-3 text-1 text-gray-900 dark:text-gray-50">Email</h6>
                        <p class="mb-3 emailChange">{{ session('value')[0]['email'] }}</p>
                        <hr class="border border-gray-300">
                        {{-- ----------------This is where i shining--------------------}}
                        <div class="flex justify-between">
                            <h6 class="mb-3 text-1 text-gray-900 dark:text-gray-50">Điểm đón</h6>
                            <button id="departure-change" style="display: none"><i class="text-2xl mdi mdi-pencil"></i>
                            </button>
                        </div>
                        <p class="mb-3">{{ session('value')[0]['departure'] }}</p>
                        <div class="flex justify-between">
                            <h6 class="mb-3 text-1 text-gray-900 dark:text-gray-50">Điểm trả</h6>
                            <button id="arrival-change" style="display: none"><i class="text-2xl mdi mdi-pencil"></i>
                            </button>
                        </div>
                        <p class="mb-3">{{ session('value')[0]['arrival'] }}</p>
                    </div>
                    <div class="flex mb-5 p-4 justify-between">
                        <h4 class="mb-3 text-1 text-gray-900 dark:text-gray-50">Tổng tiền</h4>
                        <p>{{number_format(session('value')[0]['total_price']) }}đ</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <button onclick="cancelPayment2()"  class="bg-red-500 text-white px-4 py-2 mr-2 rounded">Hủy hàng</button>
        </div>
        <div class="fixed bottom-0 left-0 right-0 p-4 bg-white shadow-md flex justify-center offline-ticket hidden">

            <button data-action="{{ route('client.ticket.end-payment-ticket') }}"
                    data-session="{{ json_encode(session('value')) }}"

                    class="bg-yellow-500 w-1/2 p-2 m-2 finish-ticket-offline">Thanh toán tại
                nhà xe
            </button>
        </div>
        <form action="{{ route('client.ticket.vnpay-method') }}" method="POST"
              class="fixed bottom-0 left-0 right-0 p-4 bg-white shadow-md flex justify-center vnpay-ticket hidden">
            @csrf
            <button name="redirect" class="bg-yellow-500 w-1/2 p-2 m-2" id="payment-vnp" type="submit">Thanh toán
                VNPay
            </button>
            <input type="hidden" value="{{ json_encode(session('value')) }}" name="session">

        </form>

        <div id="popup"
             class="fixed inset-0 flex items-center justify-center bg-gray-500 bg-opacity-50 hidden w-80 h-96 z-50">
            <div class="bg-white p-6 rounded relative">
                <!-- Nút "x" -->
                <div class="flex justify-between items-center">
                    <button class="top-0 right-0 text-gray-500 hover:text-gray-700 exit">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="flex items-center gap-x-3">
                    <div class="rounded mx-auto mt-4">
                        <div
                            class="rounded dark:border-neutral-600 nav-tabs bottom-border-tab col-span-12 lg:col-span-12 lg:col-start-12">
                            <div class="p-4 tab-content">

                                <div id="departure" class="hidden w-full tab-pane">
                                    <div class="">
                                        <div class="flex flex-col"
                                             style="overflow-y: auto; max-height: 200px; width: 100%">
                                            Điểm đón:
                                            @php
                                                $firstDeparture = true;
                                            @endphp
                                            @foreach ($stops as $data)
                                                @if ($data->stop_type == 0)
                                                    <div class="mb-5">
                                                        <input type="radio" id="departure{{$data->id}}" name="departure"
                                                               class="form-radio h-5 w-5 text-blue-600 outline-none focus:ring-0"
                                                               value="{{$data->stop_name}}" {{ $firstDeparture ? 'checked' : '' }}>
                                                        <label for="departure{{$data->id}}" class="ml-2 mb-3"
                                                               id="{{$data->id}}"
                                                               style="margin-left: 2px; margin-bottom: 3px;">{{$data->stop_name}}</label>
                                                    </div>
                                                    @php
                                                        $firstDeparture = false;
                                                    @endphp
                                                @endif
                                            @endforeach
                                        </div>
                                        <button
                                            style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;margin-top: 10px">
                                            Cập Nhật
                                        </button>

                                    </div>
                                </div>

                                <div id="arrival" class="hidden w-full tab-pane">
                                    <div class="">
                                        <div class="flex flex-col"
                                             style="overflow-y: auto; max-height: 200px; max-width: 100%;">
                                            Điểm đón:
                                            @php
                                                $firstArrival = true;
                                            @endphp
                                            @foreach ($stops as $data)
                                                @if ($data->stop_type == 1)
                                                    <div class="mb-5">
                                                        <input type="radio" id="arrival{{$data->id}}" name="arrival1"
                                                               class="form-radio h-5 w-5 text-blue-600 outline-none focus:ring-0"
                                                               value="{{$data->stop_name}}" {{ $firstArrival ? 'checked' : '' }}>
                                                        <label for="arrival{{$data->id}}" class="ml-2 mb-3"
                                                               id="{{$data->id}}">{{$data->stop_name}}</label>
                                                    </div>
                                                    @php
                                                        $firstArrival = false;
                                                    @endphp
                                                @endif
                                            @endforeach
                                        </div>
                                        <button
                                            style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;margin-top: 10px">
                                            Cập Nhật
                                        </button>
                                    </div>
                                </div>


                                <div id="third" class="hidden w-full tab-pane">
                                    <div class="max-w-md mx-auto bg-white rounded p-8 ">
                                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Sửa Thông
                                            Tin Khách Hàng</label>
                                        <div class="mb-4">
                                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Họ và
                                                tên</label>
                                            <input
                                                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                name="name" id="name" type="text"
                                                value="{{ session('value')[0]['username'] }}"
                                                placeholder="Nhập họ và tên của bạn">
                                        </div>
                                        <div class="mb-4">
                                            <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">Số
                                                điện
                                                thoại</label>
                                            <input
                                                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                name="phone" onblur="validatePhoneNumber(this)" id="phone" type="text"
                                                value="{{ session('value')[0]['phone'] }}"
                                                placeholder="Nhập Số điện thoại của bạn">
                                        </div>
                                        <div class="mb-4">
                                            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email
                                                để nhận thông tin vé</label>
                                            <input
                                                class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                name="email" id="email" type="text"
                                                value="{{ session('value')[0]['email'] }}"
                                                placeholder="Nhập địa chỉ email của bạn">
                                        </div>
                                        <button
                                            style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;margin-top: 10px"
                                            id="User-info" data-action="{{ route('client.ticket.changed-ticket') }}">Cập
                                            Nhật
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    </body>
@else
    <body class="bg-white dark:bg-neutral-800">
    <section class="py-20 bg-gray-50 dark:bg-neutral-700">
        <div class="container mx-auto">
            <h1>Errol Page Expire !</h1>
        </div>
    </section>
    </body>
@endif


<script>
    const infoUser = @json(auth()->user());
    const urlNotification = '{{route('notifications.loadMessage')}}';

        function startCountdown(startTime) {
        var endTime = new Date(startTime);
        var paymentTime = {{env('PAYMENT_TIME',15)}};

        endTime.setMinutes(endTime.getMinutes() + paymentTime);

        var x = setInterval(function () {
            var now = new Date().getTime();
            var distance = endTime - now;

            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            var countdownElement = document.getElementById("countdown");
            if (countdownElement) {
                countdownElement.innerHTML = minutes + ":" + (seconds < 10 ? "0" : "") + seconds;

                if (distance < 0) {
                    $.ajax({
                        url: "{{route('clear')}}",
                        method: "POST",
                        data:{
                            _token:$('meta[name="csrf-token"]').attr('content'),
                        },
                        success:function (data){
                            console.log(data);
                            clearInterval(x);
                            countdownElement.innerHTML = "Hết thời gian đặt chỗ.";
                            localStorage.removeItem("startTime");
                            sessionStorage.setItem("shouldReload", "true");
                            window.history.back();
                        },
                        error:function (error){
                            console.log(error)
                        }
                    });
                }
            }
        }, 1000);
    }

    var storedStartTime = localStorage.getItem("startTime");
    if (storedStartTime) {
        startCountdown(parseInt(storedStartTime));
    } else {
        var currentTime = new Date().getTime();
        localStorage.setItem("startTime", currentTime);
        startCountdown(currentTime);
    }


</script>
@include('client.layout.partials.script')

<script src="{{ asset('client/js/custom/Payment-detail.js') }}"></script>

</html>
