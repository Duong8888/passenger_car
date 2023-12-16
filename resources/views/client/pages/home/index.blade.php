@extends('client.layout.master')
@section('title', 'Trang chủ')
@section('content')
    <div id="popupContainer" class="popup-container"
        style="display: none;position: fixed;width: 100%;height: 100%;background: rgba(0, 0, 0, 0.7);z-index: 999;">
        <div class="col-span-12 rounded-b-md lg:col-span-6 group-data-[theme-color=violet]:bg-violet-700 group-data-[theme-color=sky]:bg-sky-700 group-data-[theme-color=red]:bg-red-700 group-data-[theme-color=green]:bg-green-700 group-data-[theme-color=pink]:bg-pink-700 group-data-[theme-color=blue]:bg-blue-700 lg:rounded-b-none lg:ltr:rounded-r-lg rtl:rounded-l-lg"
            style="width: 50%; z-index: 1000;
    ">
            <div class="flex flex-col justify-center items-center h-screen p-12">
                <div class="text-center">
                    <h5 class="text-[18.5px] text-white">Car Finder Pro xin chào quý khách.</h5>
                    <p class="mt-3 text-white/80">Đăng nhập để tiếp tục ngay thôi nào.</p>
                </div>
                <form onsubmit="return false;" class="mt-8">
                    <div class="mb-5">
                        <label for="number" class="text-white">Nhập số điện thoại của bạn</label>
                        <input type="text" id="number"
                            class="w-full mt-1 group-data-[theme-color=violet]:bg-violet-400/40 group-data-[theme-color=sky]:bg-sky-400/40 group-data-[theme-color=red]:bg-red-400/40 group-data-[theme-color=green]:bg-green-400/40 group-data-[theme-color=pink]:bg-pink-400/40 group-data-[theme-color=blue]:bg-blue-400/40 py-2.5 rounded border-transparent placeholder:text-sm placeholder:text-gray-50 text-white"
                            name="number" placeholder="Số điện thoại" oninput="validatePhoneNumber(this)" required>
                        <div id="recaptcha-container"></div>
                    </div>
                    <div class="mb-5">
                        <div class="fxt-transformY-50 fxt-transition-delay-4">
                            <button type="button"
                                class="bg-white border border-gray-300 text-gray-800 py-2 px-4 rounded-md"
                                onclick="sendOTP();">Gửi mã tới số điện thoại
                            </button>
                        </div>
                    </div>
                </form>
                <div class="text-center">
                    <p class="text-white">Click here to <a href="{{ route('home') }}"
                            class="text-white underline fw-medium">Back</a> to website</p>
                    <div class="p-10">
                        <a href="index.html">
                            <img src="client/images/logo-light.png" alt="" class="hidden mx-auto dark:block">
                            <img src="client/images/logo-dark.png" alt="" class="block mx-auto dark:hidden">
                        </a>
                        <button id="closePopupButton">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="popupContainer2" class="popup-container"
        style="display: none;position: fixed;width: 100%;height: 100%;background: rgba(0, 0, 0, 0.7);z-index: 1000;padding:00px ">
        <div class="col-span-12 rounded-b-md lg:col-span-6 group-data-[theme-color=violet]:bg-violet-700 group-data-[theme-color=sky]:bg-sky-700 group-data-[theme-color=red]:bg-red-700 group-data-[theme-color=green]:bg-green-700 group-data-[theme-color=pink]:bg-pink-700 group-data-[theme-color=blue]:bg-blue-700 lg:rounded-b-none lg:ltr:rounded-r-lg rtl:rounded-l-lg"
            style="width: 50%;justify-content: center;">
            <div class="flex flex-col justify-center h-full p-12">
                <div class="text-center">
                    <h5 class="text-[18.5px] text-white">Bạn hãy xác minh mã của mình.</h5>
                    <p class="mt-3 text-white/80">Mã đã được gửi về số điện thoại của bạn</p>
                </div>
                <form onsubmit="return false;" method="post" class="mt-8">
                    @csrf
                    <div class="mb-5">
                        <input type="text"
                            class="w-full mt-1 group-data-[theme-color=violet]:bg-violet-400/40 group-data-[theme-color=sky]:bg-sky-400/40 group-data-[theme-color=red]:bg-red-400/40 group-data-[theme-color=green]:bg-green-400/40 group-data-[theme-color=pink]:bg-pink-400/40 group-data-[theme-color=blue]:bg-blue-400/40 py-2.5 rounded border-transparent placeholder:text-sm placeholder:text-gray-50 text-white"
                            id="verificationId" required="required" onkeyup="checkEnter(event)">
                    </div>
                    <div class="mb-5">
                        <div class="fxt-transformY-50 fxt-transition-delay-4">
                            <button type="button"
                                class="bg-white border border-gray-300 text-gray-800 py-2 px-4 rounded-md"
                                onclick="verify()">Xác minh</button>
                        </div>
                    </div>
                </form>
                <div class="text-center">
                    <p class="text-white">Click here to <a href="{{ route('home') }}"
                            class="text-white underline fw-medium">Back</a> to website</p>
                    <div class="p-10">
                        <a href="index.html">
                            <img src="client/images/logo-light.png" alt="" class="hidden mx-auto dark:block">
                            <img src="client/images/logo-dark.png" alt="" class="block mx-auto dark:hidden">
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tìm kiếm -->
    @include('client.pages.home.search')
    <!-- End tìm kiếm -->
    <!-- danh sách xe -->
    <section class="py-20 bg-gray-50 dark:bg-neutral-700">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 gap-5">
                <div class="mb-5 text-center">
                    <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50">Tuyến đường phổ biến</h3>
                    <p class="mb-5 text-gray-500 whitespace-pre-line dark:text-gray-300"></p>
                </div>
            </div>
            <div class="nav-tabs chart-tabpill">
                <div class="tab-content">
                    <div class="block w-full tab-pane" id="recent-job">
                        <div class="pt-8 ">
                            <div class="space-y-8" id="listPassengerCars">
                                <!--  -->
                                @foreach ($passengerCars as $car)
                                    @foreach ($car->workingTime as $workingTime)
                                        <div
                                            class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600 ">
                                            <div
                                                class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                                <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i
                                                        class="mdi mdi-star"></i></a>
                                            </div>
                                            <div class="p-4">
                                                <div class="grid items-center grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="mb-4 text-center mb-md-0">
                                                            <a href="company-details.html">
                                                                <img style="width: 55%; border-radius: 5px"
                                                                    src="{{ asset($car->albums[0]->path) }}" alt="anh0001"
                                                                    class="mx-auto img-fluid rounded-3"></a>
                                                            {{-- Ảnh: <img src="{{ $car->albums->first()->path }}" alt="Ảnh xe"> --}}
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 mb-md-0">


                                                            <h5 class="mb-1 fs-18"><a href="job-details.html"
                                                                    class="text-gray-900 dark:text-gray-50">{{ $car->user->name }}</a>
                                                                <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">
                                                                    Ghế ngồi {{ $car->capacity }} chỗ</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">

                                                        <div class="mb-2 lg:flex">
                                                            <div class="flex-shrink-0">
                                                                <i style="font-size: 11px;padding-left: 2px"
                                                                    class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 fa-solid fa-circle-dot"></i>
                                                            </div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                    style="font-weight: bold;">
                                                                    {{ \Carbon\Carbon::parse($workingTime->departure_time)->format('H:i') }}
                                                                    --
                                                                    {{ \Carbon\Carbon::parse($workingTime->arrival_time)->format('H:i') }}</span>
                                                            </p>
                                                        </div>

                                                    </div>

                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div>
                                                            <div class="mb-2 lg:flex" style="margin-left: -35px">
                                                                <div class="flex-shrink-0">
                                                                    <i
                                                                        class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                                </div>
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300"
                                                                    style="font-weight: bold;"><span
                                                                        style="font-weight: bold;">{{ $car->route->departure }}</span>
                                                                    --> {{ $car->route->arrival }}</p>
                                                            </div>
                                                            <p style=" font-weight: bold;"
                                                                class="mb-2 text-gray-500 dark:text-gray-300"><span
                                                                    style="color: #1890ff;">{{ number_format($car->price, 0, ',', ',') }}đ</span>
                                                            </p>
                                                            {{-- Giá: {{ $car->route->price }} <br> --}}
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="flex flex-wrap gap-1.5">
                                                            <a href="{{ route('passengerCar.detail', ['id' => $car->id, 'time' => $workingTime->id, 'date' => date('Y-m-d')]) }}"
                                                                class="badge text-sky-500 text-13 px-2 py-0.5 font-medium rounded">Thông
                                                                tin chi tiết </a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                            <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-4">
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                    class="text-gray-900 dark:text-gray-50">Biển số xe
                                                                    :</span> {{ $car->license_plate }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-6">

                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-3 lg:col-span-2">
                                                        <div class="text-start text-md-end dark:text-gray-50">
                                                            <form action="{{ URL::to('passengerCar-detail') }}"
                                                                method="POST">
                                                                @csrf
                                                                <input type="text" hidden name='passenger_id'
                                                                    value="{{ $car->id }}">
                                                                <input type="text" hidden name='image_id'
                                                                    value="{{ $car->album_id }}">
                                                                <input type="text" hidden name='route_id'
                                                                    value="{{ $car->route_id }}">
                                                                <button><i class="mdi mdi-chevron-double-right"></i>Đặt
                                                                    vé
                                                                    ngay
                                                                </button>
                                                            </form>

                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>
                                    @endforeach
                                @endforeach

                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="mt-8">
                <div class="grid grid-cols-1">
                    <div class="text-center">
                        <svg class="mr-2 loading" xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                            viewBox="0 0 24 24"
                            style="fill: rgba(255, 255, 255, 1);transform-origin: center;animation: spin 2s linear infinite;">
                            <path
                                d="M12 22c5.421 0 10-4.579 10-10h-2c0 4.337-3.663 8-8 8s-8-3.663-8-8c0-4.336 3.663-8 8-8V2C6.579 2 2 6.58 2 12c0 5.421 4.579 10 10 10z">
                            </path>
                        </svg>
                        <span onclick="listPassengerCar()"
                            class="text-white border-transparent group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 btn focus:ring focus:ring-custom-500/20">Xem
                            thêm<i class="uil uil-arrow-right ms-1"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- start process -->
    <section>
        <div class="container mx-auto">
            <div class="nav-tabs round-pill">
                <div class="grid items-center grid-cols-12 gap-5">

                    <div class="col-span-12 lg:col-span-6">
                        <br>
                        <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50">Đăng ký trở thành nhà xe theo 3 bước
                            đơn giản</h3>
                        <p class="text-gray-500 dark:text-gray-300">Nhà xe của bạn sẽ tận hưởng bộ quyền lợi truyền
                            thông từ CarFinder Pro lên đến 50 triệu đồng, ưu tiên hiển thị trên các trang bán vé của
                            CarFinder Pro, ưu đãi các sản phẩm trong hệ sinh thái CarFinder Pro. </p>

                        <div class="mt-5">
                            <ul class="text-gray-700 nav">
                                <li class="w-full mb-[22px]">
                                    <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="v-pills-home-tab"
                                        class="relative inline-block w-full p-2 active group/active" aria-current="page">
                                        <div
                                            class="after:content-[''] after:h-[65px] after:border after:border-dashed after:border-gray-100 after:absolute ltr:after:left-7 rtl:after:right-7 after:-bottom-5 after:group-[.active]:bg-violet-300 hidden md:block">
                                        </div>
                                        <div class="flex">
                                            <div
                                                class="shrink-0 h-10 w-10 rounded-full text-center bg-gray-500/20 group-[.active]:group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:group-[.active]:bg-sky-500 group-data-[theme-color=red]:group-[.active]:bg-red-500 group-data-[theme-color=green]:group-[.active]:bg-green-500 group-data-[theme-color=pink]:group-[.active]:bg-pink-500 group-data-[theme-color=blue]:group-[.active]:bg-blue-500">
                                                <span
                                                    class="text-gray-900 group-[.active]:text-white text-16 leading-[2.5] dark:text-gray-50">1</span>
                                            </div>
                                            <div class="grow ltr:ml-4 rtl:mr-4">
                                                <h5
                                                    class="fs-18 text-gray-900 group-data-[theme-color=violet]:group-[.active]:text-violet-500 group-data-[theme-color=sky]:group-[.active]:text-sky-500 dark:text-gray-50">
                                                    Đăng ký thông tin</h5>
                                                <p class="mt-1 mb-2 text-gray-500 dark:text-gray-300">Quý khách vui lòng
                                                    để lại thông tin hoặc liên hệ hotline để được tư vấn hỗ trợ</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="w-full mb-[22px]">
                                    <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="v-pills-profile"
                                        class="relative inline-block w-full p-2 group" aria-current="page">
                                        <div
                                            class="after:content-[''] after:h-[65px] after:border after:border-dashed after:border-gray-100 after:absolute ltr:after:left-7 rtl:after:right-7 after:-bottom-5 after:group-[.active]:bg-violet-300 hidden md:block">
                                        </div>
                                        <div class="flex">
                                            <div
                                                class="shrink-0 h-10 w-10 rounded-full text-center bg-gray-500/20 group-[.active]:bg-violet-500">
                                                <span
                                                    class="text-gray-900 group-[.active]:text-white text-16 leading-[2.5] dark:text-gray-50">2</span>
                                            </div>
                                            <div class="grow ltr:ml-4 rtl:mr-4">
                                                <h5
                                                    class="fs-18 text-gray-900 group-[.active]:text-violet-500 dark:text-gray-50">
                                                    Tư vấn Ký hợp đồng </h5>
                                                <p class="mt-1 mb-2 text-gray-500">CarFinder Pro sẽ liên hệ xác minh
                                                    thông tin và tư vấn sớm nhất. Giải đáp tất cả thắc mắc của nhà xe
                                                    .Sau khi tư vấn thành công, Chủ nhà xe và CarFinder Pro sẽ tiến hành
                                                    ký kết hợp đồng.</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="w-full mb-[22px]">
                                    <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="v-pills-messages"
                                        class="relative inline-block w-full p-2 group" aria-current="page">
                                        <div class="flex">
                                            <div
                                                class="shrink-0 h-10 w-10 rounded-full text-center bg-gray-500/20 group-[.active]:bg-violet-500">
                                                <span
                                                    class="text-gray-900 group-[.active]:text-white text-16 leading-[2.5] dark:text-gray-50">3</span>
                                            </div>
                                            <div class="grow ltr:ml-4 rtl:mr-4">
                                                <h5
                                                    class="fs-18 text-gray-900 group-[.active]:text-violet-500 dark:text-gray-50">
                                                    Mở bán tại CarFinder Pro</h5>
                                                <p class="mt-1 mb-2 text-gray-500">Mở bán trên sàn CarFinder Pro.vn.com,
                                                    chúng tôi luôn đồng hành và hỗ trợ nhà xe cho đến khi phát sinh
                                                    doanh thu. Chủ nhà xe hoàn toàn kiểm soát được nội dung hiển thị
                                                    trên sàn về thương hiệu nhà xe.</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="tab-content">
                            <div class="block tab-pane" id="v-pills-home-tab">
                                <img src="{{ asset('') }}client/images/process-01.png" alt=""
                                    class="max-w-full">
                            </div>
                            <div class="hidden tab-pane" id="v-pills-profile">
                                <img src="{{ asset('') }}client/images/process-02.png" alt=""
                                    class="max-w-full">
                            </div>
                            <div class="hidden tab-pane" id="v-pills-messages">
                                <img src="{{ asset('') }}client/images/process-03.png" alt=""
                                    class="max-w-full">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1">
            <div class="text-center">
                <a href="/car-register"
                    class="text-white border-transparent group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 btn focus:ring focus:ring-custom-500/20 ">Đăng
                    kí trở thành nhà xe
                    <i class="uil uil-arrow-right ms-1"></i></a>
            </div>
    </section>
    <!-- end process -->
    <br>
    {{-- Nhà xe --}}
    <section class="py-20 dark:bg-neutral-800">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 gap-5">
                <div class="text-center">
                    <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50">Nhà xe</h3>
                    <p class="mb-5 text-gray-500  dark:text-gray-300">Một số nhà xe mới mà bạn có thể biết.</p>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-5">
                @foreach ($users as $item)
                    <div class="col-span-12 md:col-span-6 lg:col-span-3">
                        <div class="mt-4">
                            <div
                                class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                                <div
                                    class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.4] mx-auto dark:bg-violet-900">
                                    {{-- <i class="uim uim-layers-alt"></i> --}}
                                    <img src="{{ $item->image }}" alt="nhaxe" style="height: 100%;width: 100%;">
                                </div>
                                <div class="mt-4 text-center">
                                    <a href="job-categories.html" class="text-gray-900">
                                        <h5 class="text-lg dark:text-gray-50">{{ $item->name }}</h5>
                                    </a>
                                    {{-- <p class="mt-1 font-medium text-gray-500 dark:text-gray-300">{{date('d-m-Y', strtotime($item->created_at))}}</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

    </section>
    <section class="py-20 bg-gray-50 dark:bg-neutral-700">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 gap-5">
                <div class="mb-5 text-center">
                    <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50">Tin tức mới nhất</h3>
                    <p class="mb-5 text-gray-500 whitespace-pre-line dark:text-gray-300">Dưới đây là một số bài viết mới
                        nhất và được cập nhật nhanh nhất trong các ngày qua.</p>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-5">
                @foreach ($posts as $post)
                    <div class="col-span-12 md:col-span-6 lg:col-span-4">
                        <div
                            class="p-2 mt-3 transition-all duration-500 bg-white rounded shadow-lg shadow-gray-100/50 card dark:bg-neutral-800 dark:shadow-neutral-600/20 group/blog">
                            <div class="relative overflow-hidden">
                                <img style="min-width: 100%;height: 300px;" src="{{ asset($post->image) }}"
                                    alt="tin tuc" class="rounded">
                                <div
                                    class="absolute inset-0 hidden transition-all duration-500 rounded-md bg-black/30 group-hover/blog:block">
                                </div>
                                <div
                                    class="hidden text-white transition-all duration-500 top-2 left-2 group-hover/blog:block author group-hover/blog:absolute">
                                    <p class="mb-0 "><i class="mdi mdi-account text-light"></i> <a
                                            href="javascript:void(0)" class="text-light user">{{ $post->user->name }}</a>
                                    </p>
                                    <p class="mb-0 text-light date"><i class="mdi mdi-calendar-check"></i>
                                        {{ $post->created_at->format('d/m/Y') }}</p>
                                </div>
                                <div
                                    class="hidden bottom-2 right-2 group-hover/blog:block author group-hover/blog:absolute">
                                    <ul class="mb-0 list-unstyled">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-white"><i
                                                    class="mdi mdi-heart-outline me-1"></i> 33</a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="text-white"><i
                                                    class="mdi mdi-comment-outline me-1"></i> 08</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-5" style="min-height: 150px">
                                <a href="blog-details.html" class="primary-link">
                                    <h5 class="mb-1 text-gray-900 fs-17 dark:text-gray-50" style="min-height: 90px">
                                        {{ $post->title }}</h5>
                                </a>
                                <a href="{{ $post->id }}"
                                    class="font-medium group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">Xem
                                    thêm <i class="align-middle mdi mdi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end blog -->
@endsection
@section('page-script')

    <script>
        openButton.addEventListener("click", function() {
            popupContainer.style.display = "block";
        });


        closeButton.addEventListener("click", function() {
            popupContainer.style.display = "none";
        });
    </script>

    <script src="{{ asset('client/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>

    <script src="{{ asset('client/js/pages/job-list.init.js') }}"></script>

    <script src="{{ asset('client/js/pages/dropdown%26modal.init.js') }}"></script>
    <script src="{{ asset('admin/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            const today = new Date().toISOString().split('T')[0];
            const inputDate = $('#datepicker');
            inputDate.attr('min', today);
            inputDate.val(today);
        });

        function listPassengerCar() {
            let loading = $('.loading');
            loading.show();
            $.ajax({
                url: "/listPassengerCar",
                success: function(result) {
                    let listPassengerCars = $('#listPassengerCars');
                    if (result?.data && result?.data.length > 0) {
                        listPassengerCars.html('');
                        result?.data.forEach(function(item) {
                            let carItem = `
                            		<div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600 ">
                                        <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                            <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                        </div>
                                        <div class="p-4">
                                            <div class="grid items-center grid-cols-12">
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="mb-4 text-center mb-md-0">
                                                        <a href="company-details.html">
                                                            <img style="width: 55%;"
                                                                 src=""
                                                                 alt="anh0001" class="mx-auto img-fluid rounded-3"></a>
                                                    </div>
                                                </div>
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 mb-md-0">
                                                        <h5 class="mb-1 fs-18">
                                                            <a href="job-details.html" class="text-gray-900 dark:text-gray-50">${item.name}</a>
                                                            <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300"> Ghế ngồi ${item.capacity} chỗ</p> </h5>
                                                    </div>
                                                </div>
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 lg:flex">
                                                        <div class="flex-shrink-0">
                                                            <i style="font-size: 11px;padding-left: 2px"
                                                               class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 fa-solid fa-circle-dot"></i>
                                                        </div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                            style="font-weight: bold;"> ${item?.departure_time} -- ${item?.arrival_time}</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div>
                                                        <div class="mb-2 lg:flex" style="margin-left: -35px">
                                                            <div class="flex-shrink-0">
                                                                <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                            </div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"
                                                               style="font-weight: bold;"><span
                                                                style="font-weight: bold;"> ${item.departure} </span>
                                                                --> ${item.arrival}</p>
                                                        </div>
                                                        <p style=" font-weight: bold;"
                                                           class="mb-2 text-gray-500 dark:text-gray-300"><span
                                                            style="color: #1890ff;">${item.price}đ</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="flex flex-wrap gap-1.5">
                                                        <a href="/car/${item.id}?time=${item.working_time_id}"
                                                           class="badge text-sky-500 text-13 px-2 py-0.5 font-medium rounded">Thông tin chi tiết </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12 lg:col-span-4">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300">
                                                           <span class="text-gray-900 dark:text-gray-50">Biển số xe :</span> ${item.license_plate}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-span-12 lg:col-span-6"></div>
                                                <div class="col-span-3 lg:col-span-2">
                                                    <div class="text-start text-md-end dark:text-gray-50">
                                                        <form action="/passengerCar-detail"
                                                              method="POST">
                                                            <input type="text" hidden name="passenger_id"
                                                                   value="${item.id}">
                                                                <input type="text" hidden name="route_id"
                                                                       value="${item.route_id}">
                                                                    <button><i class="mdi mdi-chevron-double-right"></i>Đặt vé ngay </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            `
                            listPassengerCars.append(carItem);
                        });
                    }
                    loading.hide();
                }
            });
        }
    </script>

@endsection
