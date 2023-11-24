@extends('client.layout.master')
@section('content')
<!DOCTYPE html>
<html lang="en" dir="ltr" data-mode="light" class="scroll-smooths group" data-theme-color="violet">

<!-- Mirrored from themesdesign.in/jobcy-tailwind/layout/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 13:45:27 GMT -->
<head>
        <meta charset="utf-8" />
        <title>index-1 | Jobcy - Admin & Dashboard Template</title>
        <meta
          name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta
          content="Tailwind Multipurpose Admin & Dashboard Template"
          name="description"
        />
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
                            <p class="mb-0 text-gray-800 text-13 dark:text-gray-50"> <i class="mdi mdi-map-marker"></i> Your Location: <a href="javascript:void(0)" class="font-medium">New Caledonia</a></p>
                        </li>
                        <li>
                            <ul class="flex flex-wrap gap-4 text-gray-800 ">
                                <li class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500"><a href="javascript:void(0)" class="social-link"><i class="uil uil-whatsapp"></i></a></li>
                                <li class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500"><a href="javascript:void(0)" class="social-link"><i class="uil uil-facebook-messenger-alt"></i></a></li>
                                <li class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500"><a href="javascript:void(0)" class="social-link"><i class="uil uil-instagram"></i></a></li>
                                <li class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500"><a href="javascript:void(0)" class="social-link"><i class="uil uil-envelope"></i></a></li>
                                <li class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500"><a href="javascript:void(0)" class="social-link"><i class="uil uil-twitter-alt"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-span-5 ltr:ml-auto rtl:mr-auto">
                    <ul class="flex items-center gap-4">
                        <li>
                            <a href="#signupModal" class="py-3 font-medium text-gray-800 text-13 dark:text-gray-50" data-tw-toggle="modal" data-tw-target="#modal-id_form"><i class="uil uil-lock ltr:mr-1 rtl:ml-1"></i>Sign Up</a>

                            <div class="relative z-50 hidden modal" id="modal-id_form" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                <div class="fixed top-0 bottom-0 left-0 right-0 z-50 overflow-hidden">
                                    <div class="absolute inset-0 transition-opacity bg-black bg-opacity-60 modal-overlay"></div>
                                    <div class="box-content p-4 mx-auto animate-translate sm:max-w-lg">
                                        <div class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl top-36 dark:bg-neutral-800">
                                            <div class="p-12 bg-white dark:bg-neutral-800">
                                                <div class="mb-4 text-center">
                                                    <h5 class="mb-1 text-gray-800 dark:text-gray-50">Sign Up</h5>
                                                    <p class="text-gray-500 dark:text-gray-300">Sign Up and get access to all the features of Jobcy</p>
                                                </div>
                                                <div class="mb-4">
                                                    <label for="usernameInput" class="block text-gray-900 dark:text-gray-50 ltr:text-left rtl:text-right">Username</label>
                                                    <input type="text" class="w-full mt-2 border-gray-100 rounded placeholder:text-13 placeholder:text-gray-200 focus:ring-1 focus:ring-violet-500 dark:bg-transparent dark:text-gray-50 dark:border-neutral-600" id="usernameInput" placeholder="Enter your username">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="emailInput" class="block text-gray-900 dark:text-gray-50 ltr:text-left rtl:text-right">Email</label>
                                                    <input type="email" class="w-full mt-2 border-gray-100 rounded placeholder:text-13 placeholder:text-gray-200 focus:ring-1 focus:ring-violet-500 dark:bg-transparent dark:text-gray-50 dark:border-neutral-600" id="usernameInput" placeholder="Enter your email">
                                                </div>
                                                <div class="mb-4">
                                                    <label for="passwordInput" class="block text-gray-900 dark:text-gray-50 ltr:text-left rtl:text-right">Password</label>
                                                    <input type="password" class="w-full mt-2 border-gray-100 rounded placeholder:text-13 placeholder:text-gray-200 focus:ring-1 focus:ring-violet-500 dark:bg-transparent dark:text-gray-50 dark:border-neutral-600" id="usernameInput" placeholder="Enter your password">
                                                </div>
                                                <div class="mb-3 ltr:float-left rtl:float-right">
                                                    <a href="#!">
                                                        <input class="mr-1 align-middle rounded cursor-pointer group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 checked:ring-0 checked:ring-offset-0 focus:ring-0 focus:ring-offset-0 dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-violet-500/20" type="checkbox" id="flexCheckDefault">
                                                        <label class="dark:text-gray-50" for="flexCheckDefault">I agree to the <a href="javascript:void(0)" class="underline group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">Terms and conditions</a></label>
                                                    </a>
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit" class="w-full mt-4 text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">Sign Up</button>
                                                </div>
                                                <div class="mt-4 text-center">
                                                    <p class="mb-0 text-gray-800 dark:text-gray-300">Already a member ? <a href="sign-in.html" class="font-medium underline group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500"> Sign-in </a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="relative hidden dropdown language sm:block">
                                <button class="px-4 py-3 border-0 btn dropdown-toggle" type="button" aria-expanded="false" data-dropdown-toggle="navNotifications">
                                    <img src="assets/images/flags/us.jpg" alt="" class="h-4" id="header-lang-img">
                                </button>
                                <div class="absolute top-auto z-50 hidden w-40 list-none bg-white rounded shadow dropdown-menu -left-20 dark:bg-neutral-700" id="navNotifications">
                                    <ul class="border border-gray-50 dark:border-gray-700" aria-labelledby="navNotifications">
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-neutral-600/50 dark:hover:text-white"><img src="assets/images/flags/us.jpg" alt="user-image" class="inline-block h-3 mr-1"> <span class="align-middle">English</span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-neutral-600/50 dark:hover:text-white"><img src="assets/images/flags/spain.jpg" alt="user-image" class="inline-block h-3 mr-1"> <span class="align-middle">Spanish</span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-neutral-600/50 dark:hover:text-white"><img src="assets/images/flags/germany.jpg" alt="user-image" class="inline-block h-3 mr-1"> <span class="align-middle">German</span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50/50 dark:text-gray-200 dark:hover:bg-neutral-600/50 dark:hover:text-white"><img src="assets/images/flags/italy.jpg" alt="user-image" class="inline-block h-3 mr-1"> <span class="align-middle">Italian</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>





                   <div class="fixed z-40 flex flex-col gap-3 ltr:left-0 rtl:right-0 top-[330px]">
                       <!-- light-dark mode button -->
                       <a href="javascript: void(0);" id="ltr-rtl" class="z-40 px-3 py-3 font-medium text-white transition-all duration-300 ease-linear group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 text-14 hover:bg-violet-700 ltr:rounded-r rtl:rounded-l" onclick="changeMode(event)">
                                   <span class="ltr:hidden">LTR</span>
                                   <span  class="rtl:hidden">RTL</span>
                               </a>

                   </div>

                   <div class="fixed transition-all duration-300 ease-linear top-[27.5rem] switcher" id="style-switcher">
                       <div class="w-48 p-4 bg-white shadow-md" >
                           <div>
                               <h3 class="mb-2 font-semibold text-gray-900 text-16">Select your color</h3>
                               <ul class="flex gap-3 ">
                                   <li>
                                       <a class="h-10 w-10 bg-[#815DF2] block rounded-full" data-color="violet" href="javascript: void(0);"></a>
                                   </li>
                                   <li>
                                       <a class="h-10 w-10 bg-[#69cdf1] block rounded-full" data-color="sky" href="javascript: void(0);"></a>
                                   </li>
                                   <li>
                                       <a class="h-10 w-10 bg-[#dd4948] block rounded-full" data-color="red" href="javascript: void(0);"></a>
                                   </li>
                               </ul>
                               <ul class="flex gap-3 mt-4">
                                   <li>
                                       <a class="h-10 w-10 bg-[#38c284] block rounded-full" data-color="green" href="javascript: void(0);"></a>
                                   </li>
                                    <li>
                                       <a class="h-10 w-10 bg-[#e35490] block rounded-full" data-color="pink"  href="javascript: void(0);"></a>
                                   </li>
                                   <li>
                                       <a class="h-10 w-10 bg-[#5276f4] block rounded-full" data-color="blue" href="javascript: void(0);"></a>
                                   </li>
                               </ul>
                           </div>

                           <div class="mt-5">
                               <h3 class="mb-2 font-semibold text-gray-900 text-16">Light/dark Layout</h3>
                               <div class="flex justify-center mt-2">
                                      <!-- light-dark mode button -->
                                   <a href="javascript: void(0);" id="mode" class="z-40 px-6 py-2 font-normal text-white transition-all duration-300 ease-linear rounded text-14 bg-zinc-800" onclick="changeMode(event)">
                                       <i class="hidden text-xl uil uil-brightness dark:text-white dark:inline-block"></i>
                                       <i class="inline-block text-xl uil uil-moon dark:text-zinc-800 dark:hidden"></i>
                                   </a>
                               </div>
                           </div>
                       </div>
                   </div>
                   <!-- light-dark mode button -->
                   <a href="javascript: void(0);" onclick="toggleSwitcher()" class="fixed z-40 flex flex-col gap-3 px-4 py-3 font-normal text-white group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 top-96 text-14 ltr:rounded-r rtl:rounded-l">
                       <i class="text-xl mdi mdi-cog mdi-spin"></i>
                   </a>

        <div class="main-content">
            <div class="page-content">

                <section class="pt-28 lg:pt-44 pb-28 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 dark:bg-neutral-900 bg-[url('../images/home/page-title.html')] bg-center bg-cover relative" >
                    <div class="container mx-auto">
                        <div class="grid">
                            <div class="col-span-12">
                                <div class="text-center text-white">
                                    <h3 class="mb-4 text-[26px]">Liên hệ</h3>
                                    <div class="page-next">
                                        <nav class="inline-block" aria-label="breadcrumb text-center">
                                            <ol class="flex justify-center text-sm font-medium uppercase">
                                                <li><a href="index.html">Trang chủ</a></li>
                                                <li><i class="bx bxs-chevron-right align-middle px-2.5"></i><a href="javascript:void(0)">Liên hệ</a></li>
                                                {{-- <li class="active" aria-current="page"><i class="bx bxs-chevron-right align-middle px-2.5"></i>Contact</li> --}}
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="assets/images/about/shape.png" alt="" class="absolute block bg-cover -bottom-0 dark:hidden">
                    <img src="assets/images/about/shape-dark.png" alt="" class="absolute hidden bg-cover -bottom-0 dark:block">
                </section>


                </section>
                <!-- start process -->
                <section>
                    <div class="container mx-auto">
                        <div class="nav-tabs round-pill">
                            <div class="grid items-center grid-cols-12 gap-5">

                                <div class="col-span-12 lg:col-span-6">
                                    <br>
                                    <br>
                                    <br>

                                    <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50 ">Đăng ký trở thành nhà xe theo 3 bước
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
                                                        class="after:content-[''] after:h-[65px] after:border after:border-dashed after:border-gray-100 after:absolute ltr:after:left-7 rtl:after:right-7 after:-bottom-5 after:group-[.active]:bg-violet-300 hidden md:block"></div>
                                                    <div class="flex">
                                                        <div
                                                            class="shrink-0 h-10 w-10 rounded-full text-center bg-gray-500/20 group-[.active]:group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:group-[.active]:bg-sky-500 group-data-[theme-color=red]:group-[.active]:bg-red-500 group-data-[theme-color=green]:group-[.active]:bg-green-500 group-data-[theme-color=pink]:group-[.active]:bg-pink-500 group-data-[theme-color=blue]:group-[.active]:bg-blue-500">
                                                <span
                                                    class="text-gray-900 group-[.active]:text-white text-16 leading-[2.5] dark:text-gray-50">1</span>
                                                        </div>
                                                        <div class="grow ltr:ml-4 rtl:mr-4">
                                                            <h5 class="fs-18 text-gray-900 group-data-[theme-color=violet]:group-[.active]:text-violet-500 group-data-[theme-color=sky]:group-[.active]:text-sky-500 dark:text-gray-50">
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
                                                        class="after:content-[''] after:h-[65px] after:border after:border-dashed after:border-gray-100 after:absolute ltr:after:left-7 rtl:after:right-7 after:-bottom-5 after:group-[.active]:bg-violet-300 hidden md:block"></div>
                                                    <div class="flex">
                                                        <div
                                                            class="shrink-0 h-10 w-10 rounded-full text-center bg-gray-500/20 group-[.active]:bg-violet-500">
                                                <span
                                                    class="text-gray-900 group-[.active]:text-white text-16 leading-[2.5] dark:text-gray-50">2</span>
                                                        </div>
                                                        <div class="grow ltr:ml-4 rtl:mr-4">
                                                            <h5 class="fs-18 text-gray-900 group-[.active]:text-violet-500 dark:text-gray-50">
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
                                                            <h5 class="fs-18 text-gray-900 group-[.active]:text-violet-500 dark:text-gray-50">
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
                                            <img src="{{asset('')}}client/images/process-01.png" alt=""
                                                 class="max-w-full">
                                        </div>
                                        <div class="hidden tab-pane" id="v-pills-profile">
                                            <img src="{{asset('')}}client/images/process-02.png" alt=""
                                                 class="max-w-full">
                                        </div>
                                        <div class="hidden tab-pane" id="v-pills-messages">
                                            <img src="{{asset('')}}client/images/process-03.png" alt=""
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

                <section class="py-20 dark:bg-neutral-800">
                    <div class="container mx-auto">
                        <div class="grid grid-cols-1 gap-5">
                            <div class="text-center">
                                <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50">Nhà xe</h3>
                                <p class="mb-5 text-gray-500  dark:text-gray-300">Một số nhà xe có lượt đặt vé
                                    cao trong các tháng vừa qua.</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-4 gap-5">
                            @if($users)
                            @foreach ($users as $nhaxe)
                                <div class="col-span-12 md:col-span-6 lg:col-span-3">
                                    <div class="mt-4">
                                        <div
                                            class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                                            <div
                                                class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.4] mx-auto dark:bg-violet-900">
                                                {{-- <i class="uim uim-layers-alt"></i> --}}
                                                <img src="{{ $nhaxe->image }}" alt="nhaxe" style="height: 100%;width: 100%;">
                                            </div>
                                            <div class="mt-4 text-center">
                                                <a href="job-categories.html" class="text-gray-900">
                                                    <h5 class="text-lg dark:text-gray-50">{{ $nhaxe->name }}</h5>
                                                </a>
                                                {{-- <p class="mt-1 font-medium text-gray-500 dark:text-gray-300">{{ $nhaxe->created_at->format('d-m-Y') }}</p> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @else

                            @endif

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

<!-- Mirrored from themesdesign.in/jobcy-tailwind/layout/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 13:45:27 GMT -->
</html>

@endsection
