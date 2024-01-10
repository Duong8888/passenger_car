<!DOCTYPE html>
<html lang="en" dir="ltr" data-mode="light" class="scroll-smooths group" data-theme-color="violet">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Tailwind Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="Themesbrand" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{csrf_token()}}">
    @include('client.layout.partials.style')
    @yield('page-style')
</head>

<body class="bg-white dark:bg-neutral-800">
    <div id="popupContainer" class="popup-container" style="display: none;
        position: fixed;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        z-index: 999;">
        <div class="col-span-12 rounded-b-md lg:col-span-6 group-data-[theme-color=violet]:bg-violet-700 group-data-[theme-color=sky]:bg-sky-700 group-data-[theme-color=red]:bg-red-700 group-data-[theme-color=green]:bg-green-700 group-data-[theme-color=pink]:bg-pink-700 group-data-[theme-color=blue]:bg-blue-700 lg:rounded-b-none lg:ltr:rounded-r-lg rtl:rounded-l-lg"
            style="width: 50%; z-index: 1000; margin: auto; margin-top: 60px; ">
            <div class="flex justify-end">
                    <button class="p-4"
                            id="closePopupButton"><i class="fa-solid fa-xmark"
                                                     style="font-size: 25px;color:#ffff;"></i></button>
            </div>
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
                            name="number" placeholder="Số điện thoại" onblur="validatePhoneNumber(this)" required>
                        <br><br>
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
            </div>
        </div>
    </div>
    <div id="popupContainer2" class="popup-container" style="display: none;
            position: fixed;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1000;
            padding:00px ">
        <div class="col-span-12 rounded-b-md lg:col-span-6 group-data-[theme-color=violet]:bg-violet-700 group-data-[theme-color=sky]:bg-sky-700 group-data-[theme-color=red]:bg-red-700 group-data-[theme-color=green]:bg-green-700 group-data-[theme-color=pink]:bg-pink-700 group-data-[theme-color=blue]:bg-blue-700 lg:rounded-b-none lg:ltr:rounded-r-lg rtl:rounded-l-lg"
            style="width: 50%; z-index: 1000; margin: auto; margin-top: 60px;">
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
                <div>
                    <div style="margin-top: -270px; margin-left: 88%;">
                        <button style="padding: 10px 30px !important;border-radius: 5px !important;"
                            id="closePopupButton2"><i class="fa-solid fa-xmark"
                                style="font-size: 30px;color:#023c7a;"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('client.layout.partials.header')


    @yield('content')
    <div id="countdownDisplay" style="display: none; right: 10px; bottom: 100px;"
        class="fixed bg-white p-4 border border-gray-300 rounded-lg">
    </div>




    <!-- Footer Start -->
    @include('client.layout.partials.footer')
    <div class="fixed transition-all duration-300 ease-linear top-[27.5rem] switcher" id="style-switcher">
        <div class="w-48 p-4 bg-white shadow-md">
            <div>
                <h3 class="mb-2 font-semibold text-gray-900 text-16">Select your color</h3>
                <ul class="flex gap-3 ">
                    <li>
                        <a class="h-10 w-10 bg-[#815DF2] block rounded-full" data-color="violet"
                            href="javascript: void(0);"></a>
                    </li>
                    <li>
                        <a class="h-10 w-10 bg-[#69cdf1] block rounded-full" data-color="sky"
                            href="javascript: void(0);"></a>
                    </li>
                    <li>
                        <a class="h-10 w-10 bg-[#dd4948] block rounded-full" data-color="red"
                            href="javascript: void(0);"></a>
                    </li>
                </ul>
                <ul class="flex gap-3 mt-4">
                    <li>
                        <a class="h-10 w-10 bg-[#38c284] block rounded-full" data-color="green"
                            href="javascript: void(0);"></a>
                    </li>
                    <li>
                        <a class="h-10 w-10 bg-[#e35490] block rounded-full" data-color="pink"
                            href="javascript: void(0);"></a>
                    </li>
                    <li>
                        <a class="h-10 w-10 bg-[#5276f4] block rounded-full active" data-color="blue"
                            href="javascript: void(0);"></a>
                    </li>
                </ul>
            </div>

            <div class="mt-5">
                <h3 class="mb-2 font-semibold text-gray-900 text-16">Light/dark Layout</h3>
                <div class="flex justify-center mt-2">
                    <!-- light-dark mode button -->
                    <a href="javascript: void(0);" id="mode"
                        class="z-40 px-6 py-2 font-normal text-white transition-all duration-300 ease-linear rounded text-14 bg-zinc-800"
                        onclick="changeMode(event)">
                        <i class="hidden text-xl uil uil-brightness dark:text-white dark:inline-block"></i>
                        <i class="inline-block text-xl uil uil-moon dark:text-zinc-800 dark:hidden"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- end Footer -->
    <script>
        var openButton = document.getElementById("openPopupButton");
        var closeButton = document.getElementById("closePopupButton");
        var closeButton2 = document.getElementById("closePopupButton2");
        var popupContainer =  document.getElementById("popupContainer");
        var popupContainer2 =  document.getElementById("popupContainer2");
        openButton.addEventListener("click", function () {
            popupContainer.style.display = "block";
        });


        closeButton.addEventListener("click", function () {
            popupContainer.style.display = "none";
        });

        closeButton2.addEventListener("click", function () {
            popupContainer2.style.display = "none";
        });
    </script>
    <script>
        const infoUser = @json(auth()->user());
        const urlNotification = '{{route('notifications.loadMessage')}}';
        sessionStorage.setItem("data-theme-color", "blue");
    </script>
    @include('client.layout.partials.script')
    @yield('page-script')
</body>



</html>
