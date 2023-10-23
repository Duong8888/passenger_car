<!DOCTYPE html>
<html lang="en" dir="ltr" data-mode="light" class="scroll-smooths group" data-theme-color="violet">
<head>
    <meta charset="utf-8" />
    <title>index-1 | Jobcy - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Tailwind Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="Themesbrand" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="{{asset('')}}client/images/favicon.ico" />
    <link rel="stylesheet" href="{{asset('')}}client/css/icons.css" />
    <link rel="stylesheet" href="{{asset('')}}client/css/tailwind.css" />
</head>
<body class="bg-white dark:bg-neutral-800">
    <div class="main-content">
        <div class="page-content">
            <section
                class="flex items-center justify-center min-h-screen py-10 group-data-[theme-color=violet]:bg-violet-500/10 group-data-[theme-color=sky]:bg-sky-500/10 group-data-[theme-color=red]:bg-red-500/10 group-data-[theme-color=green]:bg-green-500/10 group-data-[theme-color=pink]:bg-pink-500/10 group-data-[theme-color=blue]:bg-blue-500/10 dark:bg-neutral-700">
                <div class="container mx-auto">
                    <div class="grid grid-cols-12">
                        <div class="col-span-12 lg:col-span-10 lg:col-start-2">
                            <div class="flex flex-col bg-white rounded-lg dark:bg-neutral-800">
                                <div class="grid flex-col grid-cols-12 ">
                                    <div class="col-span-12 lg:col-span-6 ltr:rounded-l-lg rtl:rounded-r-lg">
                                        <div class="p-10">
                                            <a href="index.html">
                                                <img src="client/images/logo-light.png" alt=""
                                                    class="hidden mx-auto dark:block">
                                                <img src="client/images/logo-dark.png" alt=""
                                                    class="block mx-auto dark:hidden">
                                            </a>
                                            <div class="mt-5">
                                                <img src="client/images/auth/sign-in.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="col-span-12 rounded-b-md lg:col-span-6 group-data-[theme-color=violet]:bg-violet-700 group-data-[theme-color=sky]:bg-sky-700 group-data-[theme-color=red]:bg-red-700 group-data-[theme-color=green]:bg-green-700 group-data-[theme-color=pink]:bg-pink-700 group-data-[theme-color=blue]:bg-blue-700 lg:rounded-b-none lg:ltr:rounded-r-lg rtl:rounded-l-lg">
                                        <div class="flex flex-col justify-center h-full p-12">
                                            <div class="text-center">
                                                <h5 class="text-[18.5px] text-white">Welcome Back !</h5>
                                                <p class="mt-3 text-white/80">Sign in to continue to Jobcy.</p>
                                            </div>
                                            <form onsubmit="return false;" class="mt-8">
                                                <div class="mb-5">
                                                    <label for="number" class="text-white">Enter Your Phone Number</label>
                                                    <input type="text" id="number" class="w-full mt-1 group-data-[theme-color=violet]:bg-violet-400/40 group-data-[theme-color=sky]:bg-sky-400/40 group-data-[theme-color=red]:bg-red-400/40 group-data-[theme-color=green]:bg-green-400/40 group-data-[theme-color=pink]:bg-pink-400/40 group-data-[theme-color=blue]:bg-blue-400/40 py-2.5 rounded border-transparent placeholder:text-sm placeholder:text-gray-50 text-white" name="number" placeholder="Phone..." >
                                                    <div id="recaptcha-container"></div>
                                                </div>
                                                <div class="mb-5">
                                                    <div class="fxt-transformY-50 fxt-transition-delay-4">
                                                        <button type="button" class="fxt-btn-fill"
                                                            onclick="sendOTP();">Send Code To My Phone
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="text-center">
                                                <p class="text-white">Click here to <a href="{{ route('client.phone.login') }}" class="text-white underline fw-medium">Back</a> to website</p>
                                                <div class="p-10">
                                                    <a href="index.html">
                                                        <img src="client/images/logo-light.png" alt=""
                                                            class="hidden mx-auto dark:block">
                                                        <img src="client/images/logo-dark.png" alt=""
                                                            class="block mx-auto dark:hidden">
                                                    </a>
                                                   
                                                </div>
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
    <script src="client/unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>
    <script src="client/libs/%40popperjs/core/umd/popper.min.js"></script>
    <script src="client/libs/simplebar/simplebar.min.js"></script>
    <script src="client/js/pages/switcher.js"></script>
    <script src="client/js/app.js"></script>
    <script src="{{ asset('client/js/custom/phone-login.js') }}"></script>
    @extends('auth.phone.phoneLogin')
    
</body>

</html>