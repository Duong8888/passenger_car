@extends('client.layout.master')
@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr" data-mode="light" class="scroll-smooths group" data-theme-color="violet">

<!-- Mirrored from themesdesign.in/jobcy-tailwind/layout/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 13:45:27 GMT -->

<head>
    <meta charset="utf-8" />
    <title>index-1 | Jobcy - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Tailwind Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="Themesbrand" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />


    <link rel="stylesheet" href="assets/css/icons.css" />
    <link rel="stylesheet" href="assets/css/tailwind.css" />




</head>

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

            <section
                class="pt-28 lg:pt-44 pb-28 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 dark:bg-neutral-900 bg-[url('../images/home/page-title.html')] bg-center bg-cover relative">
                <div class="container mx-auto">
                    <div class="grid">
                        <div class="col-span-12">
                            <div class="text-center text-white">
                                <h3 class="mb-4 text-[26px]">Tra Cứu Vé</h3>
                                <div class="page-next">
                                    <nav class="inline-block" aria-label="breadcrumb text-center">
                                        <ol class="flex justify-center text-sm font-medium uppercase">
                                            <li><a href="index.html">Trang chủ</a></li>
                                            <li><i class="bx bxs-chevron-right align-middle px-2.5"></i><a
                                                    href="javascript:void(0)">Tra Cứu Vé</a></li>

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


            </section>
            <!-- start process -->
            <section>
                <div class="grid grid-cols-1 mb-5" style="height: 500px">
                    <div class="text-center" style="padding-top: 100px ">
                        <form action="{{ route('client.contact.searchTicket') }}" method="post">
                            @csrf
                            <h1 class="text-4xl font-bold mb-4">TRA CỨU THÔNG TIN VÉ</h1>
                            <input name="phone" type="text" placeholder="Vui lòng nhập số điện thoại"
                                class="border p-2 mb-2" onblur="validatePhoneNumber(this)" required><br>
                            <input name="id" type="text" placeholder="Vui lòng nhập mã vé" class="border p-2 mb-2" required><br>
                            <div id="recaptcha-container"></div>
                            <br>
                            <button
                                style="background-color: #4CAF50; color: white; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; border-radius: 10px;">
                                Tra Cứu
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


</html>

@endsection