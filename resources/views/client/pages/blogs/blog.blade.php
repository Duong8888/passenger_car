@extends('client.layout.master')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <!-- Start grid -->
            <section class="py-16">
                <div class="container mx-auto">
                    <div class="grid items-center grid-cols-12 gap-5 mt-8">
                        <div class="col-span-12">
                            <div>
                                <h4 class="text-[22.5px] text-gray-900 dark:text-gray-50">Tất cả bài viết</h4>
                            </div>
                        </div><!--end col-->

                        @foreach($posts as $key => $value)
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="relative mb-3 overflow-hidden rounded">
                                        <a href="blog-details.html"><img src="{{asset($value->image)}}" alt="Blog" class="duration-500 ease-in-out scale-110 rounded hover:-translate-x-2 hover:transition-all" style="width: 100%;height: 300px;object-fit: cover"></a>
                                    </div>
                                    <p class="mb-2 text-gray-500 dark:text-gray-300">
                                        <b>{{$value->category->category_name}}</b>
                                        - {{date('d/m/Y',strtotime($value->created_at))}}</p>
                                    <h5 class="mb-3 text-gray-900 dark:text-gray-50 w-64 truncate"><a
                                            href="blog-details.html">{{$value->title}}</a></h5>
                                    <p class="text-gray-500 dark:text-gray-300">

                                    </p>
                                    <div class="flex items-center mt-4">
                                        <div class="shrink-0">
                                            <img src="client/images/user/img-02.jpg" alt=""
                                                 class="rounded-full h-14 w-14">
                                        </div>
                                        <div class="ltr:ml-3 rtl:mr-3 grow">
                                            <a href="blog-author.html" class="text-gray-900 dark:text-gray-50"><h6
                                                    class="mb-0 fs-16">{{$value->user->name}}</h6></a>
                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Developer</p>
                                        </div>
                                    </div>
                                </div><!--end col-->
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        {{$posts->links()}}
                    </div>
                </div>
            </section>
            <!-- End grid -->
            x
        </div>
    </div>


    <!-- start subscribe -->
    <section class="relative py-16 overflow-hidden bg-zinc-700 dark:bg-neutral-900">
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
                        <input
                            type="text"
                            class="w-full text-gray-100 bg-transparent rounded-md border-gray-50/30 ltr:border-r-0 rtl:border-l-0 ltr:rounded-r-none rtl:rounded-l-none placeholder:text-13 placeholder:text-gray-100 dark:text-gray-100 dark:bg-white/5 dark:border-neutral-600 focus:ring-0 focus:ring-offset-0"
                            id="subscribe" placeholder="Enter your email">
                        <button
                            class="text-white border-transparent btn ltr:rounded-l-none rtl:rounded-r-none group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 focus:ring focus:ring-custom-500/30"
                            type="button" id="subscribebtn">Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="absolute right-0 -top-10 -z-0 opacity-20">
            <img src="client/images/subscribe.png" alt="" class="img-fluid">
        </div>
    </section>
    <!-- end subscribe -->
@endsection
