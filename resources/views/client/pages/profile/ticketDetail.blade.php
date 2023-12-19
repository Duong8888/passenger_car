@extends('client.layout.master')
@section('content')
    <div class="main-content">
        <div class="page-content">

            <section
                class="pt-28 lg:pt-44 pb-28 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 dark:bg-neutral-900 bg-[url('../images/home/page-title.html')] bg-center bg-cover relative">
                <div class="container mx-auto">
                    <div class="grid">
                        <div class="col-span-12">
                            <div class="text-center text-white">
                                <h3 class="mb-4 text-[26px]">Thanh toán</h3>
                                <div class="page-next">
                                    <nav class="inline-block" aria-label="breadcrumb text-center">
                                        <ol class="flex flex-wrap justify-center text-sm font-medium uppercase">
                                            <li><a href="index.html">Trang chủ</a></li>
                                            <li><i class="bx bxs-chevron-right align-middle px-2.5"></i><a
                                                    href="javascript:void(0)">Trang cá nhân</a></li>
                                            <li class="active" aria-current="page"><i
                                                    class="bx bxs-chevron-right align-middle px-2.5"></i>Chi tiết vé
                                            </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="assets/images/about/shape.png" alt="" class="absolute block bg-cover -bottom-0 dark:hidden">
                <img src="assets/images/about/shape-dark.png" alt=""
                    class="absolute hidden bg-cover -bottom-0 dark:block">
            </section>

            <!-- Start grid -->
            <section class="py-16">
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 gap-y-10 lg:gap-10">
                        <div class="col-span-12 lg:col-span-8">
                            <div class="border rounded-md border-gray-100/30 dark:border-neutral-600/80">
                                <div class="p-6">
                                    <div class="mt-5">
                                        <h5 class="mb-3 text-gray-900 dark:text-gray-50">Lưu ý</h5>
                                        <div>
                                            <p class="mb-2 text-gray-500 dark:text-gray-300">- Bạn hãy có mặt tại điểm đón
                                                trước 15 phút và kiểm tra hành lý trước khi lên chuyến xe.</p>
                                            <p class="mb-2 text-gray-500 dark:text-gray-300">- Báo với nhân viên nhà xe bạn
                                                đã thanh toán trên website của chúng tôi và chụp ảnh đã thanh toán trên
                                                website.</p>
                                            <p class="mb-2 text-gray-500 dark:text-gray-300">- Nếu tới thời gian khởi hành
                                                mà bạn không đến thì hãy hủy vé hoặc báo kịp thời cho chúng tôi nếu không
                                                thì sẽ không được hoàn tiền.</p>
                                        </div>
                                    </div>



                                    <div class="mt-5">
                                        <h5 class="mb-3 text-gray-900 dark:text-gray-50">Điểm đón</h5>
                                        <div class="grid grid-cols-12 gap-y-5 md:gap-8">
                                            <div class="col-span-12 md:col-span-12 xl:col-span-12">
                                                <div class=" rounded bg-gray-50 dark:bg-neutral-700">
                                                    <div class="p-6">
                                                        <ul class="space-y-4">
                                                            <li class="px-4 py-2 bg-white rounded dark:bg-neutral-600">
                                                                <p class="text-gray-900 dark:text-white">{{ $tickets->departure }}</p>
                                                            </li>
                                                            <li class="px-4 py-2 bg-white rounded dark:bg-neutral-600">
                                                                <p class="text-gray-900 dark:text-white">{{ $working_time[0]->departure_time }}-{{ $tickets->date }}</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <h5 class="mb-3 text-gray-900 dark:text-gray-50">Điểm trả</h5>
                                        <div class="grid grid-cols-12 gap-y-5 md:gap-8">
                                            <div class="col-span-12 md:col-span-12 xl:col-span-12">
                                                <div class=" rounded bg-gray-50 dark:bg-neutral-700">
                                                    <div class="p-6">
                                                        <ul class="space-y-4">
                                                            <li class="px-4 py-2 bg-white rounded dark:bg-neutral-600">
                                                                <p class="text-gray-900 dark:text-white"> {{ $tickets->arrival }}</p>
                                                            </li>
                                                            <li class="px-4 py-2 bg-white rounded dark:bg-neutral-600">
                                                                <p class="text-gray-900 dark:text-white">{{ $working_time[0]->arrival_time }}-{{ $tickets->date }}
                                                                </p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <h5 class="mb-3 text-gray-900 dark:text-gray-50">Chính sách</h5>
                                        <div>
                                            <p
                                                class="btn w-full bg-yellow-500/20 border-transparent text-yellow-500 hover:-translate-y-1.5 dark:bg-yellow-500/30">
                                                <i class="fa-solid fa-exclamation fa-beat" style="font-size: 20px"></i>
                                                Lúc hủy chuyển khi đã thanh toán sẽ không được hoàn tuyền online vì chúng
                                                tôi không có thời gian để xử lý, Vì vậy hãy tới trược tiếp để biết thêm chi
                                                tiết và hoàn tiền nếu muôn !</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-span-12 space-y-6 lg:col-span-4">
                            <div class="border rounded border-gray-100/30 dark:border-neutral-600/80">
                                <div class="p-6">
                                    <div>
                                        <img src="assets/images/featured-job/img-02.png" alt=""
                                            class="mx-auto img-fluid">

                                        <div class="mt-4 text-center">
                                            <h4 class="text-gray-900 text-17 dark:text-gray-50">{{ $user->name }}
                                            </h4>
                                            {{-- <p class="text-gray-500 dark:text-gray-300">2/11/2023</p> --}}
                                        </div>

                                        <ul class="mt-4 space-y-4">
                                            <li>
                                                <div class="flex">
                                                    <i
                                                        class="text-xl uil uil-phone-volume group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500"></i>
                                                    <div class="ltr:ml-3 rtl:mr-3">
                                                        <h6 class="mb-1 text-sm text-gray-900 dark:text-gray-50">Số điện thoại: <label class="text-sm text-gray-500 dark:text-gray-300">{{ $user->phone }}
                                                        </label>
                                                        </h6>

                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mt-3">
                                                <div class="flex">
                                                    <i
                                                        class="text-xl uil uil-envelope group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500"></i>
                                                    <div class="ltr:ml-3 rtl:mr-3">
                                                        <h6 class="mb-1 text-sm text-gray-900 dark:text-gray-50">Email:  <label class="text-sm text-gray-500 dark:text-gray-300">
                                                            {{ $user->email }}</label>
                                                        </h6>

                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="border rounded border-gray-100/30 dark:border-neutral-600/80">
                                <div class="p-6">
                                    <h6 class="text-gray-900 text-17 dark:text-gray-50">Thông tin giao dịch</h6>

                                    <ul>
                                        <li>
                                            <div class="flex mt-6">
                                                <div class="group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full">
                                                    <i class="fa-solid fa-check fa-beat " style="color: #24fd08;"></i>
                                                </div>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Phương thức
                                                        thanh toán
                                                    </h6>
                                                    <p class="text-gray-500 dark:text-gray-300">{{ $tickets->payment_method }}</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <div class="group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full">
                                                    <i class="fa-solid fa-check fa-beat " style="color: #24fd08;"></i>
                                                </div>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Trạng thái
                                                    </h6>
                                                    <p class="text-gray-500 dark:text-gray-300"> Đặt thành công</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <div class="group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full">
                                                    <i class="fa-solid fa-check fa-beat " style="color: #24fd08;"></i>
                                                </div>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Tên nhà xe
                                                    </h6>
                                                    <p class="text-gray-500 dark:text-gray-300">{{ $tickets->passengerCar->user->name }}</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <div class="group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full">
                                                    <i class="fa-solid fa-check fa-beat " style="color: #24fd08;"></i>
                                                </div>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">loại xe</h6>
                                                    <p class="text-gray-500 dark:text-gray-300">Ghế ngồi {{ $tickets->passengerCar->capacity }} chỗ</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <div class="group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full">
                                                    <i class="fa-solid fa-check fa-beat " style="color: #24fd08;"></i>
                                                </div>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">
                                                        Số lượng khách</h6>
                                                    <p class="text-gray-500 dark:text-gray-300">{{ $tickets->quantity }}</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <div class="group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full">
                                                    <i class="fa-solid fa-check fa-beat " style="color: #24fd08;"></i>
                                                </div>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">giá vé
                                                    </h6>
                                                    <p class="text-gray-500 dark:text-gray-300">{{ number_format($tickets->passengerCar->price, 0, ',', ',') }}đ</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6" style="border-top: 1px solid #333333; padding-top: 15px">
                                                <div class="group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full">
                                                    <i class="fa-solid fa-{{ $tickets->payment_method == "Đã Thanh toán VNPAY" ? 'check' : 'times' }} fa-beat" style="color: {{ $tickets->payment_method == "Đã Thanh toán VNPAY" ? '#24fd08' : 'your_color_for_x_icon' }}"></i>
                                                </div>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Tổng tiền</h6>
                                                    <p class="text-gray-500 dark:text-gray-300">{{ number_format($tickets->total_price, 0, ',', ',') }}đ</p>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>

                                    <div class="mt-8 space-y-2">
                                        @if ($tickets->status != 2 && $tickets->status != 0)
                                        <form action="{{ route('ticketDetails_delete', $tickets->id) }}" method="POST">
                                            @csrf
                                            <button data-bs-toggle="modal"
                                                class="btn w-full group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 border-transparent text-white hover:-translate-y-1.5"
                                                style="background-color: rgb(242, 35, 35) !important;">Hủy <i class="uil uil-arrow-right"></i>
                                            </button>
                                        </form>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- End grid -->

        </div>
    </div>
@endsection
