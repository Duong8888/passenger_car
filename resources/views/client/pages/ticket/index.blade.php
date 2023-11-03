<!DOCTYPE html>
<html lang="en" dir="ltr" data-mode="light" class="scroll-smooths group" data-theme-color="violet">

<!-- Mirrored from themesdesign.in/jobcy-tailwind/layout/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 13:45:12 GMT -->

<head>
    <meta charset="utf-8" />
    <title>index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Tailwind Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="Themesbrand" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{csrf_token()}}">

    @include('client.layout.partials.style')
    @yield('page-style')
</head>


<body class="bg-white dark:bg-neutral-800">
    <section class="py-20 bg-gray-50 dark:bg-neutral-700">
        <div class="container mx-auto">
            <div class="mb-5">
                <a href="{{route('home')}}" class="flex items-center">
                    <img src="client/images/logo-dark.png" alt="" class="logo-dark h-[22px] block dark:hidden">
                    <img src="client/images/logo-light.png" alt="" class="logo-dark h-[22px] hidden dark:block">


                </a>
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
                            <button><i class="text-2xl mdi mdi-pencil"></i></button>
                        </div>


                        <h6 class="mb-3 text-1 text-gray-900 dark:text-gray-50">Tên</h6>
                        <p class="mb-3">{{ isset(session('value')[0]['username']) ? session('value')[0]['username'] :
                            Auth::user()->name }}</p>

                        <h6 class="mb-3 text-1 text-gray-900 dark:text-gray-50">Số điện thoại</h6>
                        <p class="mb-3">{{ session('value')[0]['phone'] }}</p>
                        <h6 class="mb-3 text-1 text-gray-900 dark:text-gray-50">Email</h6>
                        <p class="mb-3">{{ session('value')[0]['email'] }}</p>
                        <hr class="border border-gray-300">
                        {{-- ----------------This is where i shining--------------------}}
                        <div class="flex justify-between">
                            <h6 class="mb-3 text-1 text-gray-900 dark:text-gray-50">Điểm đón</h6>
                            <button><i class="text-2xl mdi mdi-pencil"></i></button>
                        </div>
                        <p class="mb-3">{{ session('value')[0]['departure'] }}</p>
                        <div class="flex justify-between">
                            <h6 class="mb-3 text-1 text-gray-900 dark:text-gray-50">Điểm trả</h6>
                            <button><i class="text-2xl mdi mdi-pencil"></i></button>
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
        <div class="fixed bottom-0 left-0 right-0 p-4 bg-white shadow-md flex justify-center offline-ticket hidden">

            <button data-action="{{ route('client.ticket.end-payment-ticket') }}"
                data-session="{{ json_encode(session('value')) }}" class="bg-yellow-500 w-1/2 p-2 m-2 finish-ticket-offline"
                >Thanh toán tại
                nhà xe</button>
        </div>
        <form action="{{ route('client.ticket.vnpay-method') }}" method="POST"
            class="fixed bottom-0 left-0 right-0 p-4 bg-white shadow-md flex justify-center vnpay-ticket hidden">
            @csrf
            <button name="redirect" class="bg-yellow-500 w-1/2 p-2 m-2" id="payment-vnp" type="submit">Thanh toán
                VNPay</button>
            <input type="hidden" value="{{ json_encode(session('value')) }}" name="session">

        </form>

    </section>
</body>

<script>
    const infoUser = @json(auth()->user());
    const urlNotification = '{{route('notifications.loadMessage')}}';
</script>
@include('client.layout.partials.script')

<script src="{{ asset('client/js/custom/Payment-detail.js') }}"></script>

</html>
