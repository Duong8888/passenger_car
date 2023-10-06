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
                                <h3 class="mb-4 text-[26px]">{{ $category->category_name }}</h3>
                                <div class="page-next">
                                    <nav class="inline-block" aria-label="breadcrumb text-center">
                                        <ol class="flex flex-wrap justify-center text-sm font-medium uppercase">
                                            <li><a href="{{ route('client.index') }}">Home</a></li>
                                            <li><i class="bx bxs-chevron-right align-middle px-2.5"></i><a
                                                    href="javascript:void(0)">Categories</a></li>
                                            <li class="active" aria-current="page"><i
                                                    class="bx bxs-chevron-right align-middle px-2.5"></i>{{ $category->category_name }}
                                            </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('client') }}/images/about/shape.png" alt=""
                    class="absolute block bg-cover -bottom-0 dark:hidden">
                <img src="{{ asset('client') }}/images/about/shape-dark.png" alt=""
                    class="absolute hidden bg-cover -bottom-0 dark:block">
            </section>

            <!-- Start grid -->
            <section class="py-16">
                <div class="container mx-auto">
                    @if ($posts->count() > 0)
                        <div class="grid grid-cols-12 gap-y-5 sm:gap-8">
                            @foreach ($posts as $item)
                                <div class="col-span-12 md:col-span-6 lg:col-span-4">
                                    <div class="p-2 overflow-hidden border-0 shadow card blog-masonry-box">
                                        <div class="relative overflow-hidden">
                                            <img src="{{ asset('client') }}/images/blog/img-01.jpg" alt=""
                                                class="object-cover w-full duration-500 ease-in-out scale-110 rounded-md hover:-translate-x-2 hover:transition-all">
                                        </div>
                                        <div class="p-4 card-body">
                                            <p class="mb-2 text-gray-500 dark:text-gray-300">
                                                <b>{{ $category->category_name }}</b> <i class="mdi mdi-circle-medium"></i>
                                                {{ $item->created_at }}
                                            </p>
                                            <a href="{{ route('client.post-detail', $item->slug) }}"
                                                class="text-gray-900 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 transition-all duration-300 ease-in-out dark:text-gray-50">
                                                <h5>{{ $item->title }}</h5>
                                            </a>
                                            <div class="flex items-center mt-4">
                                                <div class="shrink-0">
                                                    <img src="{{ asset('client') }}/images/user/img-01.jpg" alt=""
                                                        class="w-10 h-10 rounded-full">
                                                </div>
                                                <div class="ltr:ml-3 rtl:mr-3">
                                                    <a href="blog-author.html">
                                                        <h6 class="mb-1 text-gray-900 text-16 dark:text-gray-50">Rebecca
                                                            Swartz
                                                        </h6>
                                                    </a>
                                                    <p class="mb-0 text-sm text-gray-500 dark:text-gray-300">Project Manager
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <ul class="flex justify-center gap-2 mt-8">
                            <li
                                class="w-12 h-12 text-center border rounded-full cursor-default border-gray-100/50 dark:border-zinc-600 dark:border-gray-100/20">
                                <a class="cursor-auto" href="javascript:void(0)" tabindex="-1">
                                    <i class="mdi mdi-chevron-double-left text-16 leading-[2.8] dark:text-gray-50"></i>
                                </a>
                            </li>
                            <li
                                class="w-12 h-12 text-center text-white border border-transparent rounded-full cursor-pointer group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">
                                <a class="text-16 leading-[2.8]" href="javascript:void(0)">1</a>
                            </li>
                            <li
                                class="w-12 h-12 text-center text-gray-900 transition-all duration-300 border rounded-full cursor-pointer border-gray-100/50 dark:border-zinc-600 hover:bg-gray-100/30 focus:bg-gray-100/30 dark:border-gray-100/20 dark:text-gray-50 dark:hover:bg-gray-500/20">
                                <a class="text-16 leading-[2.8]" href="javascript:void(0)">2</a>
                            </li>
                            <li
                                class="w-12 h-12 text-center text-gray-900 transition-all duration-300 border rounded-full cursor-pointer border-gray-100/50 dark:border-zinc-600 hover:bg-gray-100/30 focus:bg-gray-100/30 dark:border-gray-100/20 dark:text-gray-50 dark:hover:bg-gray-500/20">
                                <a class="text-16 leading-[2.8]" href="javascript:void(0)">3</a>
                            </li>
                            <li
                                class="w-12 h-12 text-center text-gray-900 transition-all duration-300 border rounded-full cursor-pointer border-gray-100/50 dark:border-zinc-600 hover:bg-gray-100/30 focus:bg-gray-100/30 dark:border-gray-100/20 dark:text-gray-50 dark:hover:bg-gray-500/20">
                                <a class="text-16 leading-[2.8]" href="javascript:void(0)">4</a>
                            </li>
                            <li
                                class="w-12 h-12 text-center text-gray-900 transition-all duration-300 border rounded-full cursor-pointer border-gray-100/50 dark:border-zinc-600 hover:bg-gray-100/30 focus:bg-gray-100/30 dark:border-gray-100/20 dark:text-gray-50 dark:hover:bg-gray-500/20">
                                <a href="javascript:void(0)" tabindex="-1">
                                    <i class="mdi mdi-chevron-double-right text-16 leading-[2.8]"></i>
                                </a>
                            </li>
                        </ul>
                    @else
                        <div style="text-align: center">
                            <h3>Not found!</h3>
                        </div>
                    @endif



                </div>
            </section>
            <!-- End grid -->


        </div>
    </div>
@endsection
