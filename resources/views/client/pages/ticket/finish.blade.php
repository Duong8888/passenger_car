<!DOCTYPE html>
<html lang="en" dir="ltr" data-mode="light" class="scroll-smooths group" data-theme-color="violet">

<head>
    <meta charset="utf-8" />
    <title>index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Tailwind Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="Themesbrand" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{csrf_token()}}">
    @include('client.layout.partials.style')
    @yield('page-style')
</head>

<body class="bg-white dark:bg-neutral-800">
    <section class="py-20 bg-gray-50 dark:bg-neutral-700">
        <div class="container mx-auto">
            <div class="mb-5">
                <a href="{{route('home')}}" class="flex items-center">
                    <img src="client/images/logo-dark.png" alt="" class="logo-dark h-[22px] block dark:hidden">
                    <img src="client/images/logo-light.png" alt="" class="logo-dark h-[22px] hidden dark:block">
                </a>
                <h4 class="mb-3 text-lg text-gray-900 dark:text-gray-50">Hellozz</h4>
            </div>
            <div id="popup"
                class="fixed inset-0 flex items-center justify-center bg-gray-500 bg-opacity-50 hidden w-80 h-96 z-50">
                <div class="bg-white p-6 rounded relative">
                    <!-- Nút "x" -->
                    <button onclick="hidePopup()"
                        class="absolute top-0 right-0 mt-4 mr-4 text-gray-500 hover:text-gray-700 exit">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </button>



                </div>
            </div>
        </div>
    </section>
</body>
@include('client.layout.partials.script')
<script>
    const infoUser = @json(auth()->user());
const urlNotification = '{{route('notifications.loadMessage')}}';



</html>
