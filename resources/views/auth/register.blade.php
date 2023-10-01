<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" data-mode="light" class="scroll-smooths group" data-theme-color="violet" >

<!-- Mirrored from themesdesign.in/jobcy-tailwind/layout/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 13:45:21 GMT -->
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
    <link rel="shortcut icon" href="{{asset('')}}client/images/favicon.ico" />



    <link rel="stylesheet" href="{{asset('')}}client/css/icons.css" />
    <link rel="stylesheet" href="{{asset('')}}client/css/tailwind.css" />




</head>

<body class="bg-white dark:bg-neutral-800">


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

        <section class="flex items-center justify-center min-h-screen py-10 group-data-[theme-color=violet]:bg-violet-500/10 group-data-[theme-color=sky]:bg-sky-500/10 group-data-[theme-color=red]:bg-red-500/10 group-data-[theme-color=green]:bg-green-500/10 group-data-[theme-color=pink]:bg-pink-500/10 group-data-[theme-color=blue]:bg-blue-500/10 dark:bg-neutral-700">
            <div class="container mx-auto">
                <div class="grid grid-cols-12">
                    <div class="col-span-12 lg:col-span-10 lg:col-start-2">
                        <div class="flex flex-col bg-white rounded-lg dark:bg-neutral-800">
                            <div class="grid flex-col grid-cols-12">
                                <div class="col-span-6 ltr:rounded-l-lg rtl:rounded-r-lg">
                                    <div class="p-10">
                                        <a href="index.html">
                                            <img src="{{asset('')}}client/images/logo-light.png" alt="" class="hidden mx-auto dark:block">
                                            <img src="{{asset('')}}client/images/logo-dark.png" alt="" class="block mx-auto dark:hidden">
                                        </a>
                                        <div class="mt-5">
                                            <img src="{{asset('')}}client/images/auth/sign-up.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 rounded-b-md lg:col-span-6 group-data-[theme-color=violet]:bg-violet-700 group-data-[theme-color=sky]:bg-sky-700 group-data-[theme-color=red]:bg-red-700 group-data-[theme-color=green]:bg-green-700 group-data-[theme-color=pink]:bg-pink-700 group-data-[theme-color=blue]:bg-blue-700 lg:rounded-b-none lg:ltr:rounded-r-lg rtl:rounded-l-lg">
                                    <div class="flex flex-col justify-center h-full p-12">
                                        <div class="text-center">
                                            <h5 class="text-[18.5px] text-white">Let's Get Started</h5>
                                            <p class="mt-3 text-gray-50">Sign Up and get access to all the features of Jobcy</p>
                                        </div>
                                        <div class="alert alert-danger" id="error" style="display: none;"></div>
                                        <div class="alert alert-success" id="successAuth" style="display: none;"></div>
                                        <form method="POST" action="{{route('register') }}" class="mt-8">
                                            @csrf
                                            <div class="mb-5">
                                                <label for="usernameInput" class="text-white">Username</label>
                                                <input name="name" type="text" class="w-full mt-1 group-data-[theme-color=violet]:bg-violet-400/40 group-data-[theme-color=sky]:bg-sky-400/40 group-data-[theme-color=red]:bg-red-400/40 group-data-[theme-color=green]:bg-green-400/40 group-data-[theme-color=pink]:bg-pink-400/40 group-data-[theme-color=blue]:bg-blue-400/40 py-2.5 rounded border-transparent placeholder:text-sm placeholder:text-gray-50 text-white" required=""  placeholder="Enter your username">
                                            </div>
                                            <div class="mb-5">
                                                <label for="emailInput" class="text-white">Email</label>
                                                <input name="email" type="emial" class="w-full mt-1 group-data-[theme-color=violet]:bg-violet-400/40 group-data-[theme-color=sky]:bg-sky-400/40 group-data-[theme-color=red]:bg-red-400/40 group-data-[theme-color=green]:bg-green-400/40 group-data-[theme-color=pink]:bg-pink-400/40 group-data-[theme-color=blue]:bg-blue-400/40 py-2.5 rounded border-transparent placeholder:text-sm placeholder:text-gray-50 text-white"  placeholder=" Enter your email">
                                            </div>
                                            <div class="mb-5">
                                                <label for="emailInput" class="text-white">Password</label>
                                                <input name="password" type="password" class="w-full mt-1 group-data-[theme-color=violet]:bg-violet-400/40 group-data-[theme-color=sky]:bg-sky-400/40 group-data-[theme-color=red]:bg-red-400/40 group-data-[theme-color=green]:bg-green-400/40 group-data-[theme-color=pink]:bg-pink-400/40 group-data-[theme-color=blue]:bg-blue-400/40 py-2.5 rounded border-transparent placeholder:text-sm placeholder:text-gray-50 text-white"  placeholder="Enter your password">
                                            </div>
                                            <div class="mb-5">
                                                <div id="recaptcha-container"></div>
                                                <label for="NumberInput" class="text-white">Phone</label>
                                                <input name="phone"  id="number" value="+84" type="text" class="w-full mt-1 group-data-[theme-color=violet]:bg-violet-400/40 group-data-[theme-color=sky]:bg-sky-400/40 group-data-[theme-color=red]:bg-red-400/40 group-data-[theme-color=green]:bg-green-400/40 group-data-[theme-color=pink]:bg-pink-400/40 group-data-[theme-color=blue]:bg-blue-400/40 py-2.5 rounded border-transparent placeholder:text-sm placeholder:text-gray-50 text-white" required="" placeholder=" Enter your phone">
                                                <button type="button" onclick="sendOTP();" class="btn w-full bg-white text-gray-900 font-medium border-transparent hover:-translate-y-1.5 duration-500 ease"> Send OTP
                                                </button>
                                            </div>
                                            <div class="mb-5">
                                                <div class="alert alert-success" id="successOtpAuth" style="display: none;"></div>
                                                <label for="NumberInput" class="text-white">Mã OTP</label>
                                                <input name="otp" id="verification" type="text" class="w-full mt-1 group-data-[theme-color=violet]:bg-violet-400/40 group-data-[theme-color=sky]:bg-sky-400/40 group-data-[theme-color=red]:bg-red-400/40 group-data-[theme-color=green]:bg-green-400/40 group-data-[theme-color=pink]:bg-pink-400/40 group-data-[theme-color=blue]:bg-blue-400/40 py-2.5 rounded border-transparent placeholder:text-sm placeholder:text-gray-50 text-white" required=""  placeholder=" Enter your otp">
                                                <button type="button" onclick="verify()" class="btn w-full bg-white text-gray-900 font-medium border-transparent hover:-translate-y-1.5 duration-500 ease"> Very code
                                                </button>
                                            </div>
                                            <div class="my-5 text-center">
                                                <input type="submit" class="btn w-full bg-white text-gray-900 font-medium border-transparent hover:-translate-y-1.5 duration-500 ease">
                                                </div>
                                        </form>
                                        <div class="text-center">
                                            <p class="text-white">Already a member ? <a href="sign-in.html" class="text-white underline fw-medium"> Login </a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

<script>
    const firebaseConfig = {
        apiKey: "AIzaSyAohN1P7SwBHB0BCSz06qez3Hk3AgE3WQM",
        authDomain: "timxekhach-44f63.firebaseapp.com",
        projectId: "timxekhach-44f63",
        storageBucket: "timxekhach-44f63.appspot.com",
        messagingSenderId: "460281893369",
        appId: "1:460281893369:web:ac713dd4617600d5716d28",
        measurementId: "G-JZQDVWF1MB"
    };
    firebase.initializeApp(firebaseConfig);
</script>
<script type="text/javascript">
    window.onload = function () {
        render();
    };
    function render() {
        window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
        recaptchaVerifier.render();
    }
    function sendOTP() {
        var number = $("#number").val();
        firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function (confirmationResult) {
            window.confirmationResult = confirmationResult;
            coderesult = confirmationResult;
            console.log(coderesult);
            $("#successAuth").text("Message sent");
            $("#successAuth").show();
        }).catch(function (error)
        {
            $("#error").text(error.message);
            $("#error").show();
        });
    }
    function verify() {
        var code = $("#verification").val();
        coderesult.confirm(code).then(function (result) {
            var user = result.user;
            console.log(user);
            $("#successOtpAuth").text("Auth is successful");
            $("#successOtpAuth").show();
        }).catch(function (error) {
            $("#error").text(error.message);
            $("#error").show();
        });
    }
</script>
            <script src="{{asset('')}}client/unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>
<script src="{{asset('')}}client/libs/%40popperjs/core/umd/popper.min.js"></script>
<script src="{{asset('')}}client/libs/simplebar/simplebar.min.js"></script>


<script src="{{asset('')}}client/js/pages/switcher.js"></script>

<script src="{{asset('')}}client/js/app.js"></script>

</body>

<!-- Mirrored from themesdesign.in/jobcy-tailwind/layout/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 13:45:22 GMT -->
</html>
