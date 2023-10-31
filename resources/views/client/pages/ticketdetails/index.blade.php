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
                        <h3 class="mb-4 text-[26px]">Trang chi tiết vé</h3>
                        <div class="page-next">
                            <nav class="inline-block" aria-label="breadcrumb text-center">
                                <ol class="flex justify-center text-sm font-medium uppercase">
                                    <li><a href="index.html">Trang chủ</a></li>
                                    <li><i class="bx bxs-chevron-right align-middle px-2.5"></i><a
                                            href="javascript:void(0)">Trang cá nhân</a></li>
                                    <li class="active" aria-current="page"><i
                                            class="bx bxs-chevron-right align-middle px-2.5"></i>Chi tiết vé</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


        <!-- Start grid -->
            <section class="py-20">
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 gap-y-10 lg:gap-10">
                        <div class="col-span-12 lg:col-span-4">
                            <div class="border rounded border-gray-100/50 dark:border-neutral-600">
                                <div class="p-5 border-b border-gray-100/50 dark:border-neutral-600">

                                    <div class="text-center">
                                        <img src="https://i.imgur.com/1O4pwwE.jpg" alt=""
                                        class="w-20 h-20 p-1 mx-auto border-2 rounded-full border-gray-200/20">
                                        <h6 class="mt-4 mb-0 text-lg text-gray-900 dark:text-gray-50">{{$user->name}}</h6>
                                    </div>
                                </div>


                                <div class="p-5">

                                    <h6 class="mb-3 font-semibold text-gray-900 text-17 dark:text-gray-50">Thông tin người đặt</h6>
                                    <ul>
                                        <li>
                                            <div class="flex items-center mt-4">
                                                <div class="group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-11 w-11 text-xl text-center leading-[2.3] rounded-full group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">
                                                    <i class="uil uil-envelope-alt"></i>
                                                </div>
                                                <div class="ltr:ml-3 rtl:mr-3">
                                                    <h6 class="mb-1 text-gray-900 text-14 dark:text-gray-50">Email</h6>
                                                    <p class="text-gray-500 dark:text-gray-300">{{$user->email}}</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center mt-4">
                                                <div class="group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-11 w-11 text-xl text-center leading-[2.3] rounded-full group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">
                                                    <i class="uil uil-phone"></i>
                                                </div>
                                                <div class="ltr:ml-3 rtl:mr-3">
                                                    <h6 class="mb-1 text-gray-900 text-14 dark:text-gray-50">Phone</h6>
                                                    <p class="text-gray-500 dark:text-gray-300">{{$user->phone}}</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                </div>

                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-8">
                            <div class="p-6 border rounded border-gray-100/50 info:border-neutral-600">
                                <h3 class="" style="text-align: center">Thông tin đơn hàng</h3><br><br>
                                                <div class="col-span-12 lg:col-span-1 mb-5" style="margin: -20px 0 0 250px">
                                                    <style>.{margin: 0 0 0 100px;}</style>
                                                        <img src="{{ asset($tickets->passengerCar->albums[0]->path) }}"
                                                            alt="tickets" class="img-fluid rounded-3" style="width:50%">
                                                </div>
                                                <div class="grid grid-cols-12" style="padding: 0 30px 0 30px">
                                                    <div class="col-span-12 lg:col-span-6">
                                                        <div class="mt-2 lg:mt-0">
                                                            <label class="text-sm text-gray-500 dark:text-gray-50"><h6>Tên nhà xe: <span>{{$tickets->passengerCar->user->name}}</h6></span></label> <br>
                                                            <label class="text-sm text-gray-500 dark:text-gray-50"><h6>Điểm đi: <span>{{$tickets->departure}}</h6></span></label> <br>
                                                            <label class="text-sm text-gray-500 dark:text-gray-50"><h6>Số lượng ghế: <span>{{$tickets->quantity}}</h6></span></label> <br>
                                                            <label class="text-sm text-gray-500 dark:text-gray-50"><h6>Trạng thái : <span>{{$tickets->payment_method}}</h6></span></label> <br>
                                                        </div>
                                                    </div>
                                                    <div class="items-center col-span-12 lg:col-span-6">
                                                        <div class="mt-2 lg:mt-0">
                                                            <label class="text-sm text-gray-500 dark:text-gray-50"><h6>Số điện thoại: <span>{{$tickets->passengerCar->user->phone}}</h6></span></label> <br>
                                                            <label class="text-sm text-gray-500 dark:text-gray-50"><h6>Điểm đến: <span>{{$tickets->arrival}}</h6></span></label> <br>
                                                            <label class="text-sm text-gray-500 dark:text-gray-50"><h6>Tổng tiền: <span>{{ number_format($tickets->total_price, 0, ',', ',') }}đ</h6></span></label> <br>
                                                            <label class="text-sm text-gray-500 dark:text-gray-50"><h6>Tổng tiền: <span>{{$tickets->created_at}}</h6></span></label> <br>
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
