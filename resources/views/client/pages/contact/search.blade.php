@extends('client.layout.master')
@section('content')

<body class="bg-white dark:bg-neutral-800">




    <div class="hidden px-5 mx-auto border-gray-200 container-fluid lg:px-24 bg-gray-50 md:block dark:bg-neutral-600">
        <div class="grid items-center grid-cols-12">
            <div class="col-span-7">
                <ul class="flex items-center py-3">
                    <li class="ltr:mr-4 rtl:ml-4">
                        <p class="mb-0 text-gray-800 text-13 dark:text-gray-50"> <i class="mdi mdi-map-marker"></i> Your
                            Location: <a href="javascript:void(0)" class="font-medium">New Caledonia</a></p>
                    </li>
                    <li>
                        <ul class="flex flex-wrap gap-4 text-gray-800 ">
                            <li
                                class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500">
                                <a href="javascript:void(0)" class="social-link"><i class="uil uil-whatsapp"></i></a>
                            </li>
                            <li
                                class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500">
                                <a href="javascript:void(0)" class="social-link"><i
                                        class="uil uil-facebook-messenger-alt"></i></a>
                            </li>
                            <li
                                class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500">
                                <a href="javascript:void(0)" class="social-link"><i class="uil uil-instagram"></i></a>
                            </li>
                            <li
                                class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500">
                                <a href="javascript:void(0)" class="social-link"><i class="uil uil-envelope"></i></a>
                            </li>
                            <li
                                class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500">
                                <a href="javascript:void(0)" class="social-link"><i class="uil uil-twitter-alt"></i></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-span-5 ltr:ml-auto rtl:mr-auto">

            </div>
        </div>
    </div>
    <div class="main-content">
        <div class="page-content">
            </section>
            <!-- start process -->
            <section>
                <div class="grid grid-cols-1 mb-5" style="height: 500px">
                    <div class="text-center" style="padding-top: 100px ">
                        <form action="{{ route('client.contact.searchTicket') }}" method="post">
                            @csrf
                            <h1 class="font-bold mb-4">Nhập thông tin đơn hàng</h1>
                            <input name="phone" type="text" placeholder="Nhập số điện thoại người đặt"
                                class="border p-2 mb-2" onblur="validatePhoneNumber(this)" required><br>
                            <input name="id" type="text" placeholder="Nhập mã vé" class="border p-2 mb-2" required><br>
                            <div id="recaptcha-container"></div>
                            <br>
                            <button
                                style="background-color: #4CAF50; color: white; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; border-radius: 10px;">
                                Xem thông tin đơn hàng
                            </button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <script src="../../../unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>
    <script src="assets/libs/%40popperjs/core/umd/popper.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>


    <script src="assets/js/pages/switcher.js"></script>

    <script src="assets/js/pages/dropdown%26modal.init.js"></script>

    <script src="assets/js/pages/nav%26tabs.js"></script>

    <script src="assets/js/app.js"></script>

</body>



@endsection

@section('page-style')
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <link rel="stylesheet" href="assets/css/icons.css" />
    <link rel="stylesheet" href="assets/css/tailwind.css" />
@endsection
