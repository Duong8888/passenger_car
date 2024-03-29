<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "101712082566367");
    chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v18.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<nav class="navbar fixed right-0 left-0 top-0 px-5 lg:px-24 transition-all duration-500 ease shadow-lg shadow-gray-200/20 bg-white border-gray-200 z-40"
    id="navbar">{{-- lg:top-[44.5px] --}}

    <div class="mx-auto container-fluid">
        <div class="flex flex-wrap items-center justify-between mx-auto">

            <a href="{{route('home')}}" class="flex items-center">
                <img src="https://i.imgur.com/chCW0o6.png" alt="" class="logo-dark block dark:hidden"
                    style="width: 200px">
                {{-- <img src="client/images/logo-light.png" alt="" class="logo-dark h-[22px] hidden dark:block"> --}}
            </a>
            <button data-collapse-toggle="navbar-collapse" type="button"
                class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg navbar-toggler group lg:hidden hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-100"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="flex items-center lg:order-2">
                <!--notification-->
                <div>
                    <div class="relative dropdown">
                        <!--notification btn-->
                        <div class="relative hidden">
                            <button type="button" class="btn border-0 h-[70px] dropdown-toggle px-4 text-gray-500"
                                aria-expanded="false" data-dropdown-toggle="notification">
                                <i class="text-2xl mdi mdi-bell"></i>
                            </button>
                            <span hidden
                                class="absolute text-xs px-1.5 bg-red-500 text-white font-medium rounded-full left-6 top-3 ring-2 ring-white count-btn"></span>
                        </div>
                        <!--end notification btn-->
                        <div class="absolute right-0 top-auto left-auto z-50 hidden list-none bg-white rounded shadow dropdown-menu w-72"
                            id="notification">
                            <div class="border rounded border-gray-50" aria-labelledby="notification">
                                <div class="grid grid-cols-1 ">
                                    <div class="p-4 bg-gray-50">
                                        <h6 class="mb-1 text-gray-800"> Thông báo </h6>
                                        <p class="mb-0 text-gray-500 text-13 count-notification"></p>
                                    </div>
                                </div>
                                <div class="h-60" data-simplebar="init">
                                    <div class="simplebar-wrapper" style="margin: 0px;">
                                        <div class="simplebar-height-auto-observer-wrapper">
                                            <div class="simplebar-height-auto-observer"></div>
                                        </div>
                                        <div class="simplebar-mask">
                                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                <div class="simplebar-content-wrapper"
                                                    style="height: auto; overflow: hidden;">
                                                    <div class="simplebar-content" style="padding: 0px;">
                                                        <div class="main-notification">
                                                            {{-- content --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar"
                                            style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar"
                                            style="transform: translate3d(0px, 0px, 0px); display: none; height: 144px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end notification-->
                <div>
                    <div class="relative dropdown ltr:mr-4 rtl:ml-4">

                        <button type="button" class="flex items-center px-4 py-5 dropdown-toggle"
                            id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="true">
                            <img class="w-8 h-8 rounded-full ltr:xl:mr-2 rtl:xl:ml-2"
                                src="https://i.imgur.com/1O4pwwE.jpg" alt="Header Avatar">
                            @if(auth()->check())
                            <span class="hidden fw-medium xl:block">{{auth()->user()->name}}</span>
                            @else

                            <a class="hidden fw-medium xl:block"   id="openPopupButton">Đăng nhập</a>

                            @endif

                        </button>
                        @if (auth()->check())
                        <ul class="absolute top-auto z-50 hidden w-48 p-3 list-none bg-white border rounded shadow-lg dropdown-menu border-gray-500/20 xl:ltr:-left-3 ltr:-left-32 rtl:-right-3"
                            id="profile/log" aria-labelledby="navNotifications">
                            <li class="p-2 dropdown-item group/dropdown">
                                <a class="text-15 font-medium text-gray-800  transition-all duration-300 ease-in"
                                    href="{{route('profile.index')}}">Trang cá nhân</a>

                            </li>
                            <li class="p-2 dropdown-item group/dropdown">

                                <form action="{{ route('client.phone.logout') }}">
                                    @csrf
                                    <button
                                        class="text-15 font-medium text-gray-800  transition-all duration-300 ease-in">Đăng
                                        xuất</button>
                                </form>
                            </li>
                        </ul>
                        @endif


                    </div>
                </div>
            </div>

            <div id="navbar-collapse"
                class="navbar-res items-center justify-between w-full text-sm lg:flex lg:w-auto lg:order-1 group-focus:[.navbar-toggler]:block hidden">
                <ul class="flex flex-col items-start mt-5 mb-10 font-medium lg:mt-0 lg:mb-0 lg:items-center lg:flex-row" id="navigation-menu">
                    <li class="relative dropdown ">
                        <button class="py-5 text-gray-800 lg:px-4 dropdown-toggle lg:h-[70px] {{ request()->routeIs('home') ? 'active' : '' }}" id="home"
                           > <a href="{{route('home')}}">Trang chủ</a> </button>
                    </li>

                    <li class="relative dropdown lg:mt-0">
                        <button href="#" class="py-5 text-gray-800 lg:px-4 dropdown-toggle lg:h-[70px] {{ request()->routeIs('blog.show') ? 'active' : '' }}" id="pages"
                            ><a href="{{route('blog.show')}}">Tin tức</a></button>
                    </li>

                    <li class="relative dropdown">
                        <button href="#" class="py-5 text-gray-800 lg:px-4 dropdown-toggle lg:h-[70px] {{ request()->routeIs('contact.index') ? 'active' : '' }}" id="contact"
                            ><a href="{{route('contact.index')}}">Liên hệ </a></button>
                    </li>

                    <li class="relative dropdown">
                        <button class="py-5 text-gray-800 lg:px-4 dropdown-toggle lg:h-[70px] {{ request()->routeIs('client.contact.search') ? 'active' : '' }}" id="contact"
                            ><a href="{{route('client.contact.search')}}">Tra cứu vé </a></button>
                    </li>

                    <li class="relative dropdown">
                        <button class="py-5 text-gray-800 lg:px-4 dropdown-toggle dark:text-gray-50 lg:h-[70px] {{ request()->routeIs(['about_us.index', 'about_us.vision', 'about_us.mission']) ? 'active' : '' }}" id="about">Về chúng tôi <i class='align-middle bx bxs-chevron-down ltr:ml-1 rtl:mr-1'></i></button>

                        <ul class="relative top-auto z-50 py-2 list-none bg-white border-0 rounded dropdown-menu lg:border border-gray-500/20 lg:absolute ltr:-left-3 rtl:-right-3 lg:w-48 lg:shadow-lg dark:bg-neutral-800" aria-labelledby="blog">
                            <li>
                                <a class="block w-full px-4 py-2 text-13 font-medium {{ request()->routeIs('about_us.index') ? 'text-violet-500' : 'text-gray-700' }} duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 uppercase {{ request()->routeIs('about_us.index') ? 'active' : '' }}" href="{{ route('about_us.index') }}">Giới thiệu</a>
                            </li>
                            <li>
                                <a class="block w-full px-4 py-2 text-13 font-medium {{ request()->routeIs('about_us.vision') ? 'text-violet-500' : 'text-gray-700' }} duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 uppercase {{ request()->routeIs('about_us.vision') ? 'active' : '' }}" href="{{ route('about_us.vision') }}">Tầm nhìn</a>
                            </li>
                            <li>
                                <a class="block w-full px-4 py-2 text-13 font-medium {{ request()->routeIs('about_us.mission') ? 'text-violet-500' : 'text-gray-700' }} duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 uppercase {{ request()->routeIs('about_us.mission') ? 'active' : '' }}" href="{{ route('about_us.mission') }}">Chính sách</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</nav>
