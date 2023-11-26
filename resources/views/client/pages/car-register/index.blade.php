@extends('client.layout.master')
@section('title', 'Đăng kí nhà xe')
@section('content')
    <!-- Start grid -->
    <section class="pt-16">
        <div class="container mx-auto">
            @if("" != trim($messageStatus))
                <div  style="text-align: center; padding: 20px;" class="grid items-center grid-cols-8 mt-5 lg:gap-8 gap-y-8 p-4">
                    <h3 class="mb-2 text-3xl text-gray-900 dark:text-white">{{$messageStatus}}</h3>
                    <p class="text-gray-500 dark:text-gray-300 center-content">{{$message}}</p>
                </div>
            @endif

            @if("" == trim($messageStatus))
                <div class="grid items-center grid-cols-8 mt-5 lg:gap-8 gap-y-8">
                    <div class="col-span-12 lg:col-span-6 center-content">
                        <div class="mt-4">
                            <h3 class="mb-2 text-3xl text-gray-900 dark:text-white">Đăng ký trở thành nhà xe</h3>
                            <p class="text-gray-500 dark:text-gray-300 center-content">Bắt đầu lấp đầy chỗ trống trên xe của bạn với hơn 10 triệu lượt khách đi thành công trên Car Finder Pro</p>
                            <form
                                method="post" class="mt-4 contact-form" name="myForm" id="myForm">
                                @csrf
                                <span id="error-msg"></span>
                                <div class="grid grid-cols-12 gap-4">
                                        <div class="col-span-12 lg:col-span-6 px-2">
                                            <label for="fullName" class="text-gray-900 dark:text-gray-50">Họ và tên <span style="color: red;">*</span> </label>
                                            <input type="text" name="fullName" id="fullName" class="w-full mt-1 rounded border border-gray-200 placeholder:text-sm placeholder:text-gray-400 dark:bg-transparent dark:border-none focus:ring-0 focus:ring-offset-0 dark:text-gray-200" placeholder="Họ và tên">
                                        </div>
                                    <div class="col-span-12 lg:col-span-6 px-2">
                                        <div class="mb-3">
                                            <label for="phone" class="text-gray-900 dark:text-gray-50">Số điện thoại liên hệ <span style="color: red;">*</span> </label>
                                            <input type="text" name="phone" id="phone" class="w-full mt-1 rounded border-gray-100/50 placeholder:text-sm placeholder:text-gray-400 dark:bg-transparent dark:border-gray-800 focus:ring-0 focus:ring-offset-0 dark:text-gray-200" placeholder="Số điện thoại liên hệ">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-span-12 lg:col-span-6 px-2">
                                        <div class="mb-3">
                                            <label for="email" class="text-gray-900 dark:text-gray-50">Email</label>
                                            <input type="email" class="w-full mt-1 rounded border-gray-100/50 placeholder:text-sm placeholder:text-gray-400 dark:bg-transparent dark:border-gray-800 focus:ring-0 focus:ring-offset-0 dark:text-gray-200" id="emaiol" name="email" placeholder="Nhập email của bạn">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-span-12 lg:col-span-6 px-2">
                                        <div class="mb-3">
                                            <label for="passengerCar_name" class="text-gray-900 dark:text-gray-50">Tên hãng xe</label>
                                            <input type="text" class="w-full mt-1 rounded border-gray-100/50 placeholder:text-sm placeholder:text-gray-400 dark:bg-transparent dark:border-gray-800 focus:ring-0 focus:ring-offset-0 dark:text-gray-200" id="passengerCar_name" name="passengerCar_name" placeholder="Nhập tên hãng xe">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-span-12 px-2">
                                        <div class="mb-3">
                                            <label for="province" class="text-gray-900 dark:text-gray-50">Tỉnh/ Thành phố <span style="color: red;">*</span> </label>
                                            <input type="text" name="province" id="" class="w-full mt-1 rounded border-gray-100/50 placeholder:text-sm placeholder:text-gray-400 dark:bg-transparent dark:border-gray-800 focus:ring-0 focus:ring-offset-0 dark:text-gray-200" placeholder="Nhập Tỉnh/ Thành phố">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-span-12 px-2">
                                        <div class="mb-3">
                                            <label for="meassageInput" class="text-gray-900 dark:text-gray-50">Nội dung tư vấn</label>
                                            <textarea class="w-full mt-1 rounded border-gray-100/50 placeholder:text-sm placeholder:text-gray-400 dark:bg-transparent dark:border-gray-800 focus:ring-0 focus:ring-offset-0 dark:text-gray-200" id="meassageInput" placeholder="Nhập nội dung bạn muốn tư vấn" name="meassageInput" rows="3"></textarea>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                                <div class="text-right p-2">
                                    <button type="submit" id="submit" name="submit" class="text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500"> Đăng ký trở thành nhà xe <i class="uil uil-message ms-1"></i></button>
                                </div>
                            </form><!--end form-->
                        </div>
                    </div><!--end col-->
                </div>
            @endif
        </div>

    </section>



    <!-- End grid -->

    <script src="{{asset('admin/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

@endsection
@section('page-script')
    <script src="{{asset('client/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

    <script src="{{asset('client/js/pages/job-list.init.js')}}"></script>

    <script src="{{asset('client/js/pages/dropdown%26modal.init.js')}}"></script>

@endsection
