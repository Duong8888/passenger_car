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
                            <h3 class="mb-4 text-[26px]">My Profile</h3>
                            <div class="page-next">
                                <nav class="inline-block" aria-label="breadcrumb text-center">
                                    <ol class="flex justify-center text-sm font-medium uppercase">
                                        <li><a href="index.html">Home</a></li>
                                        <li><i class="bx bxs-chevron-right align-middle px-2.5"></i><a
                                                href="javascript:void(0)">My Profile</a></li>
                                        <li class="active" aria-current="page"><i
                                                class="bx bxs-chevron-right align-middle px-2.5"></i>My Profile</li>
                                    </ol>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
                <img src="assets/images/about/shape.png" alt=""
                    class="absolute block bg-cover -bottom-0 dark:hidden">
                <img src="assets/images/about/shape-dark.png" alt=""
                    class="absolute hidden bg-cover -bottom-0 dark:block">
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
                                    <h6 class="mt-4 mb-2 text-lg text-gray-900 dark:text-gray-50">{{ $user->name }}</h6>
                                    {{-- <p class="mb-4 text-gray-500 dark:text-gray-300">Developer</p> --}}
                                    <ul class="flex flex-wrap justify-center gap-2 mb-0">
                                        <li
                                            class="w-10 h-10 text-lg leading-10 transition-all duration-300 ease-in-out rounded bg-violet-500/20 text-violet-500 hover:bg-violet-500 hover:text-white">
                                            <a href="javascript:void(0)" class="social-link rounded-3 "><i
                                                    class="uil uil-facebook-f"></i></a>
                                        </li>
                                        <li
                                            class="w-10 h-10 text-lg leading-10 transition-all duration-300 ease-in-out rounded bg-sky-500/20 text-sky-500 hover:bg-sky-500 hover:text-white">
                                            <a href="javascript:void(0)" class="social-link rounded-3 btn-soft-info"><i
                                                    class="uil uil-twitter-alt"></i></a>
                                        </li>
                                        <li
                                            class="w-10 h-10 text-lg leading-10 text-green-500 transition-all duration-300 ease-in-out rounded bg-green-500/20 hover:bg-green-500 hover:text-white">
                                            <a href="javascript:void(0)"
                                                class="social-link rounded-3 btn-soft-success"><i
                                                    class="uil uil-whatsapp"></i></a>
                                        </li>
                                        <li
                                            class="w-10 h-10 text-lg leading-10 text-red-500 transition-all duration-300 ease-in-out rounded bg-red-500/20 hover:bg-red-500 hover:text-white">
                                            <a href="javascript:void(0)"
                                                class="social-link rounded-3 btn-soft-danger"><i
                                                    class="uil uil-phone-alt"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            {{-- <div class="p-5">

                                <div class="pb-5 border-b border-gray-100/50 dark:border-neutral-600">
                                    <h6 class="mb-5 font-semibold text-gray-900 text-17 dark:text-gray-50">Documents
                                    </h6>
                                    <ul class="">
                                        <li>
                                            <div class="flex items-center mt-4 ">
                                                <div class="text-2xl text-gray-500 shrink-0">
                                                    <i class="uil uil-file"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <h6 class="mb-0 text-gray-900 text-16 dark:text-gray-50">Resume.pdf
                                                    </h6>
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">1.25 MB</p>
                                                </div>
                                                <div class="ml-auto text-xl">
                                                    <a href="assets/images/dark-logo.html" download=""
                                                        class="text-gray-500 fs-20"><i class="uil uil-import"></i></a>

                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex items-center mt-4 ">
                                                <div class="text-2xl text-gray-500 shrink-0">
                                                    <i class="uil uil-file"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <h6 class="mb-0 text-gray-900 text-16 dark:text-gray-50">
                                                        Cover-letter.pdf</h6>
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">1.25 MB</p>
                                                </div>
                                                <div class="ml-auto text-xl">
                                                    <a href="assets/images/dark-logo.html" download=""
                                                        class="text-gray-500 fs-20"><i class="uil uil-import"></i></a>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>

                            </div> --}}
                            <div class="p-5 pt-5">
                                <h6 class="mb-3 font-semibold text-gray-900 text-17 dark:text-gray-50">Contacts</h6>
                                <ul class="mb-0">
                                    <li class="pb-3">
                                        <div class="flex">
                                            <label
                                                class="w-32 font-medium text-gray-900 dark:text-gray-50">Email</label>
                                            <div>
                                                <p class="mb-0 text-gray-500 text-break dark:text-gray-300">
                                                    {{ $user->email }}
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pb-3">
                                        <div class="flex">
                                            <label class="w-32 font-medium text-gray-900 dark:text-gray-50">Phone
                                                Number</label>
                                            <div>
                                                <p class="mb-0 text-gray-500 dark:text-gray-300">{{ $user->phone }}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pb-3">
                                        <div class="flex">
                                            <form role="search" method="GET" id="searchform"
                                                action="{{ route('profile.index') }}">
                                                <input type="text" name="key" id="s" placeholder="Nhập từ khóa...">
                                                <button class="fa-solid fa-magnifying-glass" type="submit"
                                                    id="searchsubmit">Tìm
                                                    kiếm</button>
                                            </form>
                                        </div>
                                    </li>

                                </ul>
                            </div>

                        </div>

                    </div>
                    <div class="col-span-12 lg:col-span-8">
                        <div
                            class="border rounded border-gray-100/50 dark:border-neutral-600 nav-tabs bottom-border-tab">
                            <div class="px-6 py-0 border-b border-gray-100/50 dark:border-neutral-600">

                                <ul class="items-center text-sm font-medium text-center text-gray-700 nav md:flex">
                                    <li class="active" role="presentation">
                                        <button class="inline-block w-full py-4 px-[18px] dark:text-gray-50 active"
                                            data-tw-toggle="tab" type="button" data-tw-target="overview-tab">
                                            Vé hiện tại
                                        </button>
                                    </li>
                                    <li class="active" role="presentation">
                                        <button class="inline-block w-full py-4 px-[18px] dark:text-gray-50"
                                            data-tw-toggle="tab" type="button" data-tw-target="present-tab">
                                            Vé đã đi
                                        </button>
                                    </li>
                                    <li class="active" role="presentation">
                                        <button class="inline-block w-full py-4 px-[18px] dark:text-gray-50 "
                                            data-tw-toggle="tab" type="button" data-tw-target="past-tab">
                                            Vé đã hủy

                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="inline-block w-full py-4 px-[18px] dark:text-gray-50 "
                                            data-tw-toggle="tab" type="button" data-tw-target="thongtin-tab">
                                            Thông tin cá nhân
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="inline-block w-full py-4 px-[18px] dark:text-gray-50"
                                            data-tw-toggle="tab" type="button" data-tw-target="password-tab">
                                            Đổi mật khẩu
                                        </button>
                                    </li>
                                </ul>
                            </div>

                            <div class="p-6 tab-content">
                                <div class="hidden w-full tab-pane" id="present-tab">
                                    @foreach ($tickets as $item)
                                    @if ($item->status == 1)
                                    <div
                                        class="mb-5 p-5 border border-gray-100/50 rounded-md relative hover:-translate-y-1.5 transition-all duration-500 ease-in-out group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:shadow-md hover:shadow-gray-100/30 dark:border-neutral-600 dark:hover:shadow-neutral-900">


                                        <div class="grid grid-cols-12">
                                            <div class="col-span-12 lg:col-span-1">
                                                <a href="company-details.html"><img
                                                        src="assets/images/featured-job/img-03.png" alt=""
                                                        class="img-fluid rounded-3"></a>
                                            </div>
                                            <!--end col-->
                                            <div class="col-span-12 lg:col-span-9">
                                                <div class="mt-4 lg:mt-0">
                                                    <h5 class="mb-1 text-17">Họ và tên: <a href="job-details.html"
                                                            class="text-gray-900 dark:text-gray-50">{{ $item->username
                                                            }}</a>
                                                    </h5>
                                                    <ul class="flex gap-3 mb-0">
                                                        <li class="">
                                                            <p class="mb-0 text-sm text-gray-500 dark:text-gray-300">
                                                                Số điện thoại: <span>{{ $item->phone }}</span>
                                                            </p>
                                                        </li>
                                                        <li class="">
                                                            <p class="mb-0 text-sm text-gray-500 dark:text-gray-300">
                                                                <i class="mdi mdi-map-marker"></i>
                                                            </p>
                                                        </li>
                                                        <li class="">
                                                            <p class="mb-0 text-sm text-gray-500 dark:text-gray-300">
                                                                <i class="uil uil-wallet"></i>{{ $item->total_price }}
                                                            </p>
                                                        </li>
                                                    </ul>
                                                    <div class="flex flex-wrap gap-2 mt-3">
                                                        <span
                                                            class="px-2 py-0.5 mt-1 font-medium text-violet-500 rounded bg-violet-500/20 text-13">{{
                                                            $item->payment_method }}</span>
                                                        <span
                                                            class="px-2 py-0.5 mt-1 font-medium text-violet-500 rounded bg-violet-500/20 text-13">{{
                                                            $item->created_at }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="items-center col-span-12 lg:col-span-2">
                                                <ul class="flex flex-wrap gap-3 mt-4 lg:mt-0">
                                                    <li class="w-10 h-10 text-lg leading-10 text-center text-green-500 rounded-full bg-green-500/20"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        aria-label="Edit" data-bs-original-title="Edit">
                                                        <a href="manage-jobs-post.html"
                                                            class="text-center avatar-sm success-bg-subtle d-inline-block rounded-circle fs-18">
                                                            <i class="uil uil-edit"></i>
                                                        </a>
                                                    </li>
                                                    <li class="w-10 h-10 text-lg leading-10 text-center text-red-500 rounded-full bg-red-500/20"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        aria-label="Delete" data-bs-original-title="Delete">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#deleteModal"
                                                            class="text-center avatar-sm danger-bg-subtle d-inline-block rounded-circle fs-18">
                                                            <i class="uil uil-trash-alt"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->

                                    </div>
                                    @endif
                                    @endforeach

                                </div>

                                <div class="block w-full tab-pane" id="overview-tab">
                                    @foreach ($tickets as $item)
                                    @if ($item->status == 0)
                                    <div
                                        class="mb-5 p-5 border border-gray-100/50 rounded-md relative hover:-translate-y-1.5 transition-all duration-500 ease-in-out group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:shadow-md hover:shadow-gray-100/30 dark:border-neutral-600 dark:hover:shadow-neutral-900">


                                        <div class="grid grid-cols-12">
                                            <div class="col-span-12 lg:col-span-1">
                                                <a href="company-details.html"><img
                                                        src="assets/images/featured-job/img-03.png" alt=""
                                                        class="img-fluid rounded-3"></a>
                                            </div>
                                            <!--end col-->
                                            <div class="col-span-12 lg:col-span-9">
                                                <div class="mt-4 lg:mt-0">
                                                    <h5 class="mb-1 text-17">Họ và tên: <a href="job-details.html"
                                                            class="text-gray-900 dark:text-gray-50">{{ $item->username
                                                            }}</a>
                                                    </h5>
                                                    <ul class="flex gap-3 mb-0">
                                                        <li class="">
                                                            <p class="mb-0 text-sm text-gray-500 dark:text-gray-300">
                                                                Số điện thoại: <span>{{ $item->phone }}</span>
                                                            </p>
                                                        </li>
                                                        <li class="">
                                                            <p class="mb-0 text-sm text-gray-500 dark:text-gray-300">
                                                                <i class="mdi mdi-map-marker"></i>
                                                            </p>
                                                        </li>
                                                        <li class="">
                                                            <p class="mb-0 text-sm text-gray-500 dark:text-gray-300">
                                                                <i class="uil uil-wallet"></i>{{ $item->total_price }}
                                                            </p>
                                                        </li>
                                                    </ul>
                                                    <div class="flex flex-wrap gap-2 mt-3">
                                                        <span
                                                            class="px-2 py-0.5 mt-1 font-medium text-violet-500 rounded bg-violet-500/20 text-13">{{
                                                            $item->payment_method }}</span>
                                                        <span
                                                            class="px-2 py-0.5 mt-1 font-medium text-violet-500 rounded bg-violet-500/20 text-13">{{
                                                            $item->created_at }}</span>
                                                    </div>
                                                </div>

                                            </div>
                                            <!--end col-->
                                            <div class="items-center col-span-12 lg:col-span-2">
                                                <ul class="flex flex-wrap gap-3 mt-4 lg:mt-0">
                                                    <li class="w-10 h-10 text-lg leading-10 text-center text-green-500 rounded-full bg-green-500/20"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        aria-label="Edit" data-bs-original-title="Edit">
                                                        <a href="manage-jobs-post.html"
                                                            class="text-center avatar-sm success-bg-subtle d-inline-block rounded-circle fs-18">
                                                            <i class="uil uil-edit"></i>
                                                        </a>
                                                    </li>
                                                    <li class="w-10 h-10 text-lg leading-10 text-center text-red-500 rounded-full bg-red-500/20"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        aria-label="Delete" data-bs-original-title="Delete">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#deleteModal"
                                                            class="text-center avatar-sm danger-bg-subtle d-inline-block rounded-circle fs-18">
                                                            <i class="uil uil-trash-alt"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!--end col-->
                                        </div>

                                        <!--end row-->


                                    </div>
                                    @endif
                                    @endforeach


                                </div>

                                <div class="hidden w-full tab-pane" id="past-tab">
                                    <div class="pt-1 space-x-1">
                                        @foreach ($tickets as $item)
                                        @if ($item->status == 2)
                                        <div
                                            class="mb-5 p-5 border border-gray-100/50 rounded-md relative hover:-translate-y-1.5 transition-all duration-500 ease-in-out group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:shadow-md hover:shadow-gray-100/30 dark:border-neutral-600 dark:hover:shadow-neutral-900">


                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12 lg:col-span-1">
                                                    <a href="company-details.html"><img
                                                            src="assets/images/featured-job/img-03.png" alt=""
                                                            class="img-fluid rounded-3"></a>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-9">
                                                    <div class="mt-4 lg:mt-0">
                                                        <h5 class="mb-1 text-17">Họ và tên: <a href="job-details.html"
                                                                class="text-gray-900 dark:text-gray-50">{{
                                                                $item->username }}</a>
                                                        </h5>
                                                        <ul class="flex gap-3 mb-0">
                                                            <li class="">
                                                                <p
                                                                    class="mb-0 text-sm text-gray-500 dark:text-gray-300">
                                                                    Số điện thoại:
                                                                    <span>{{ $item->phone }}</span>
                                                                </p>
                                                            </li>
                                                            <li class="">
                                                                <p
                                                                    class="mb-0 text-sm text-gray-500 dark:text-gray-300">
                                                                    <i class="mdi mdi-map-marker"></i>
                                                                </p>
                                                            </li>
                                                            <li class="">
                                                                <p
                                                                    class="mb-0 text-sm text-gray-500 dark:text-gray-300">
                                                                    <i class="uil uil-wallet"></i>{{ $item->total_price
                                                                    }}
                                                                </p>
                                                            </li>
                                                        </ul>
                                                        <div class="flex flex-wrap gap-2 mt-3">
                                                            <span
                                                                class="px-2 py-0.5 mt-1 font-medium text-violet-500 rounded bg-violet-500/20 text-13">{{
                                                                $item->payment_method }}</span>
                                                            <span
                                                                class="px-2 py-0.5 mt-1 font-medium text-violet-500 rounded bg-violet-500/20 text-13">{{
                                                                $item->created_at }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="items-center col-span-12 lg:col-span-2">
                                                    <ul class="flex flex-wrap gap-3 mt-4 lg:mt-0">
                                                        <li class="w-10 h-10 text-lg leading-10 text-center text-green-500 rounded-full bg-green-500/20"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Edit" data-bs-original-title="Edit">
                                                            <a href="manage-jobs-post.html"
                                                                class="text-center avatar-sm success-bg-subtle d-inline-block rounded-circle fs-18">
                                                                <i class="uil uil-edit"></i>
                                                            </a>
                                                        </li>
                                                        <li class="w-10 h-10 text-lg leading-10 text-center text-red-500 rounded-full bg-red-500/20"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Delete" data-bs-original-title="Delete">
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                data-bs-target="#deleteModal"
                                                                class="text-center avatar-sm danger-bg-subtle d-inline-block rounded-circle fs-18">
                                                                <i class="uil uil-trash-alt"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->

                                        </div>
                                        @endif
                                        @endforeach

                                    </div>
                                </div>


                                <div class="hidden w-full tab-pane" id="thongtin-tab">
                                    <div class="pt-8 space-x-8">
                                        <form action="{{ route('profile.update',$user->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @method('PUT')
                                            @csrf
                                            <input type="hidden" name="action" value="updateInfo">
                                            <div>
                                                <h5 class="mb-3 text-gray-900 fs-17 fw-semibold dark:text-gray-50">Thông
                                                    tin cá nhân</h5>
                                                @if ($message = Session::get('successInfo'))
                                                <div>
                                                    <p style="color: blue;">{{ $message }}</p>
                                                </div>
                                                @endif
                                                <div class="mt-5">
                                                    <div class="grid grid-cols-12 gap-5">
                                                        <div class="col-span-12 lg:col-span-6">
                                                            <div class="mb-3">
                                                                <label for="firstName"
                                                                    class="text-sm text-gray-900 dark:text-gray-50">Tên
                                                                    của bạn</label>
                                                                <input type="text"
                                                                    class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600"
                                                                    name="name" value="{{ $user->name }}">
                                                                @error('name')
                                                                <div class="alert alert-danger mt-1 mb-1"
                                                                    style="color: red;font-size: 12px;">{{ $message }}

                                                                </div>
                                                                @enderror
                                                            </div>

                                                        </div>

                                                        <div class="col-span-12 lg:col-span-6">
                                                            <div class="mb-3">
                                                                <label for="email"
                                                                    class="text-sm text-gray-900 dark:text-gray-50">Email
                                                                    của bạn</label>
                                                                <input type="text"
                                                                    class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600"
                                                                    name="email"
                                                                    value="{{ isset(Auth::user()->email) ? old('email', Auth::user()->email) : $user->email }}">
                                                                @error('email')
                                                                <div class="alert alert-danger mt-1 mb-1"
                                                                    style="color: red;font-size: 12px;">{{ $message }}

                                                                </div>
                                                                @enderror
                                                            </div>

                                                        </div>
                                                        <!--end col-->
                                                        <!--end col-->
                                                        <div hidden class="col-span-12 lg:col-span-6">
                                                            <div class="mb-3">
                                                                <label for="email"
                                                                    class="text-sm text-gray-900 dark:text-gray-50">Số
                                                                    điện thoại</label>
                                                                <input type="text"
                                                                    class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600"
                                                                    name="phone" value="{{ $user->phone }}">
                                                                @error('phone')
                                                                <div class="alert alert-danger mt-1 mb-1"
                                                                    style="color: red;font-size: 12px;">{{ $message }}

                                                                </div>
                                                                @enderror
                                                            </div>

                                                        </div>
                                                        <div class="col-span-12">
                                                            <div class="form-check">
                                                                <button class="mt-8 text-right" style="float: right">
                                                                    <p
                                                                        class="text-white btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 border-transparent focus:ring group-data-[theme-color=violet]:focus:ring-violet-500/20 group-data-[theme-color=sky]:focus:ring-sky-500/20 group-data-[theme-color=red]:focus:ring-red-500/20 group-data-[theme-color=green]:focus:ring-green-500/20 group-data-[theme-color=pink]:focus:ring-pink-500/20 group-data-[theme-color=blue]:focus:ring-blue-500/20">
                                                                        Sủa thông tin</p>
                                                                </button>
                                                                {{-- <style>

                                                                    . {
                                                                        float: left;
                                                                        display: flex;
                                                                        align-items: center;
                                                                        align-content: center
                                                                    }
                                                                </style> --}}

                                                            </div>
                                                        </div>

                                                        <!--end col-->
                                                    </div>
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </form>
                                    </div>

                                </div>
                                <div class="hidden w-full tab-pane" id="password-tab">
                                    <div class="pt-8 space-x-8">
                                        <form action="{{ route('profile.update',$user->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @method('PUT')
                                            @csrf
                                            <input type="hidden" name="action" value="updatePassword">
                                            <div class="mt-4">
                                                <h5 class="mb-3 font-semibold text-17 dark:text-gray-50">
                                                    Đổi mật khẩu
                                                </h5>
                                                @if ($message = Session::get('successPassword'))
                                                <div>
                                                    <p style="color: blue;">{{ $message }}</p>
                                                </div>
                                                @endif
                                                <div class="grid grid-cols-12 gap-5">
                                                    <div class="col-span-12">
                                                        <div class="mb-3">
                                                            <label for="current-password-input"
                                                                class="text-sm text-gray-900 dark:text-gray-50">Mật khẩu
                                                                hiện tại</label>
                                                            <input type="password"
                                                                class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600"
                                                                placeholder="Mật khẩu hiện tại"
                                                                id="current-password-input" name="current_password">
                                                            @if ($message = Session::get('errorPassword'))
                                                            <div>
                                                                <p style="color: red;">{{ $message }}</p>
                                                            </div>
                                                            @endif
                                                            @error('current_password')
                                                            <div class="alert alert-danger mt-1 mb-1"
                                                                style="color: red;font-size: 12px;">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-6">
                                                        <div class="mb-3">
                                                            <label for="new-password-input"
                                                                class="text-sm text-gray-900 dark:text-gray-50">Mật khẩu
                                                                mới</label>
                                                            <input type="password"
                                                                class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600"
                                                                placeholder="Mật khẩu mới" id="new-password-input"
                                                                name="new_password">
                                                            @error('new_password')
                                                            <div class="alert alert-danger mt-1 mb-1"
                                                                style="color: red;font-size: 12px;">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-6">
                                                        <div class="mb-3">
                                                            <label for="confirm-password-input"
                                                                class="text-sm text-gray-900 dark:text-gray-50">Xác nhận
                                                                lại mật khẩu</label>
                                                            <input type="password"
                                                                class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600"
                                                                placeholder="Xác nhận lại mật khẩu"
                                                                id="confirm-password-input"
                                                                name="new_password_confirmation">
                                                            @error('new_password_confirmation')
                                                            <div class="alert alert-danger mt-1 mb-1"
                                                                style="color: red;font-size: 12px;">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12">
                                                        <div class="form-check">
                                                            <input
                                                                class="align-middle rounded cursor-pointer focus:ring-0 focus:ring-offset-0 bg-gray-50 border-gray-100/50 checked:bg-violet-500 checked:border-transparent dark:bg-transparent dark:border-neutral-600 dark:checked:bg-violet-500 dark:checked:border-transparent"
                                                                type="checkbox" value="" id="verification">
                                                            <label class="ml-2 align-middle dark:text-gray-300"
                                                                for="verification">
                                                                kích hoạt xác minh qua số điện thoại
                                                            </label>
                                                            <button class="mt-8 text-right" style="float: right">
                                                                <p
                                                                    class="text-white btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 border-transparent focus:ring group-data-[theme-color=violet]:focus:ring-violet-500/20 group-data-[theme-color=sky]:focus:ring-sky-500/20 group-data-[theme-color=red]:focus:ring-red-500/20 group-data-[theme-color=green]:focus:ring-green-500/20 group-data-[theme-color=pink]:focus:ring-pink-500/20 group-data-[theme-color=blue]:focus:ring-blue-500/20">
                                                                    Xác nhận đổi</p>
                                                            </button>
                                                            {{-- <style>

                                                                . {
                                                                    float: left;
                                                                    display: flex;
                                                                    align-items: center;
                                                                    align-content: center
                                                                }
                                                            </style> --}}

                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End grid -->
        {{-- <section class="relative py-16 overflow-hidden bg-zinc-700 dark:bg-neutral-900">

            <div class="container mx-auto">
                <div class="grid items-center grid-cols-12 gap-5">
                    <div class="col-span-12 lg:col-span-7">
                        <div class="text-center lg:text-start">
                            <h4 class="text-white">Get New Jobs Notification!</h4>
                            <p class="mt-1 mb-0 text-white/50 dark:text-gray-300">Subscribe &amp; get all related jobs
                                notification.</p>
                        </div>
                    </div>
                    <div class="z-40 col-span-12 lg:col-span-5">
                        <form class="flex" action="#">
                            <input type="text"
                                class="w-full text-gray-100 bg-transparent rounded-md border-gray-50/30 ltr:border-r-0 rtl:border-l-0 ltr:rounded-r-none rtl:rounded-l-none placeholder:text-13 placeholder:text-gray-100 dark:text-gray-100 dark:bg-white/5 dark:border-neutral-600 focus:ring-0 focus:ring-offset-0"
                                id="subscribe" placeholder="Enter your email">
                            <button
                                class="text-white border-transparent btn ltr:rounded-l-none rtl:rounded-r-none group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 focus:ring focus:ring-custom-500/30"
                                type="button" id="subscribebtn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="absolute right-0 -top-10 -z-0 opacity-20">
                <img src="assets/images/subscribe.png" alt="" class="img-fluid">
            </div>
        </section> --}}
        </div>
    </div>

</div>

@endsection

