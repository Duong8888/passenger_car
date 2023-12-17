@extends('client.layout.master')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <section class="pt-28 lg:pt-44 pb-28 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 dark:bg-neutral-900 bg-[url('../images/home/page-title.html')] bg-center bg-cover relative" >
                <div class="container mx-auto">
                    <div class="grid">
                        <div class="col-span-12">
                            <div class="text-center text-white">
                                <h3 class="mb-4 text-[26px]">Blog Details</h3>
                                <div class="page-next">
                                    <nav class="inline-block" aria-label="breadcrumb text-center">
                                        <ol class="flex flex-wrap justify-center text-sm font-medium uppercase">
                                            <li><a href="index.html">Home</a></li>
                                            <li><i class="bx bxs-chevron-right align-middle px-2.5"></i><a href="javascript:void(0)">Blog</a></li>
                                            <li class="active" aria-current="page"><i class="bx bxs-chevron-right align-middle px-2.5"></i>Blog Details</li>
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

                <section class="py-16">

                    <div class="container mx-auto">
                        <div class="grid grid-cols-12 mt-8 md:gap-14">
                            <div class="col-span-12 lg:col-span-8">
                                <div class="swiper blogdetailSlider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="assets/images/blog/img-11.jpg" alt="" class="rounded-lg">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="assets/images/blog/img-14.jpg" alt="" class="rounded-lg">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="assets/images/blog/img-15.jpg" alt="" class="rounded-lg">
                                        </div>
                                    </div>
                                </div>
                                <ul class="flex flex-wrap items-center mt-3 mb-0 text-gray-500">
                                    <li>
                                        <div class="flex items-center">
                                            <div class="shrink-0">
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8Iqk1ZFa-q1t0mxhxGAOPqCSzzdJEzG2UgQ&amp;usqp=CAU" alt="" class="rounded-full h-14 w-14">
                                            </div>
                                            <div class="ltr:ml-3 rtl:mr-3">
                                                <a href="blog-author.html" class="text-gray-900 dark:text-white"><h6 class="mb-0 dark:text-gray-300">{{$post->user->name}}</h6></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="ltr:ml-3 rtl:mr-3">
                                        <div class="flex items-center">
                                            <div class="shrink-0">
                                                <i class="uil uil-calendar-alt"></i>
                                            </div>
                                            <div class="ltr:ml-2 rtl:mr-2">
                                                <p class="mb-0 dark:text-gray-300"> {{$post->created_at}}</p>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                                <div class="mt-4">
                                    <h5 class="mb-2 text-gray-900 dark:text-gray-50">{{$post->title}}</h5>
                                    <img style="border: 2px solid floralwhite; padding: 10px; margin-bottom: 20px;" src="{{$post->image}}"/>
                                    {!!html_entity_decode($post->content)!!}

                                    <div style="border-bottom: 1px solid gray; margin-top: 10px;">

                                    </div>
                                    <div class="mt-8">

                                        <form action="#" class="mt-8 contact-form">
                                            <h5 class="pb-3 text-gray-900 border-b border-gray-100/50 dark:text-gray-50 dark:border-zinc-700">Gửi phản hồi</h5>
                                            <div class="grid grid-cols-12 gap-5 mt-6">
                                                <div class="col-span-6">
                                                    <div class="relative mb-3">
                                                        <label for="name" class="text-gray-900 dark:text-gray-50">Tên</label>
                                                        <input name="name" id="name" type="text" class="w-full mt-1 rounded border-gray-100/50 placeholder:text-xs dark:bg-transparent dark:border-gray-800 dark:text-gray-300" placeholder="Enter your name*" required="">
                                                    </div>
                                                </div>
                                                <div class="col-span-6">
                                                    <div class="relative mb-3">
                                                        <label for="email" class="text-gray-900 dark:text-gray-50">Email</label>
                                                        <input name="email" id="email" type="email" class="w-full mt-1 rounded border-gray-100/50 placeholder:text-xs dark:bg-transparent dark:border-gray-800 dark:text-gray-300" placeholder="Enter your email*" required="">
                                                    </div>
                                                </div>
                                                <div class="col-span-12">
                                                    <div class="relative mb-3">
                                                        <label for="subject" class="text-gray-900 dark:text-gray-50">Tiêu đề</label>
                                                        <input name="subject" id="subject" type="text" class="w-full mt-1 rounded border-gray-100/50 placeholder:text-xs dark:bg-transparent dark:border-gray-800 dark:text-gray-300" placeholder="Subject">
                                                    </div>
                                                </div>
                                                <div class="col-span-12">
                                                    <div class="relative mb-3">
                                                        <label for="comments" class="text-gray-900 dark:text-gray-50">Nội dung</label>
                                                        <textarea name="comments" id="comments" rows="4" class="w-full mt-1 rounded border-gray-100/50 placeholder:text-xs dark:bg-transparent dark:border-gray-800 dark:text-gray-300" placeholder="Enter your message"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 text-end">
                                                    <button name="submit" type="submit" id="submit" class="text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 hover:-translate-y-1">Gửi <i class="uil uil-message ms-1"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                            <div class="col-span-12 lg:col-span-4">
                                <form class="relative">
                                    <input class="w-full rounded placeholder:text-sm border-gray-100/50 dark:bg-transparent dark:border-gray-800" type="text" placeholder="Search...">
                                    <button class="absolute rounded top-3 ltr:right-4 rtl:left-4" type="submit"><span class="text-gray-500 mdi mdi-magnify"></span></button>
                                </form>
                                <div class="mt-8">
                                    <h6 class="mb-2 text-gray-900 text-16 dark:text-gray-50">Categories</h6>
                                    <div class="w-full h-0.5 rounded-full bg-gray-100/60 dark:bg-gray-500/20">
                                        <div class="group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 w-[25%] h-0.5 ltr:rounded-l-full rtl:rounded-r-full" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="my-4">
                                        @foreach($categories as $value)
                                            <div class="mb-3">
                                                <input class="rounded cursor-pointer border-gray-100/50 bg-gray-50 group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 checked:border-transparent focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:border-zinc-600 checked:dark:bg-violet-500/20" type="checkbox" value="" id="education">
                                                <label class="align-middle ltr:ml-2 rtl:mr-2 dark:text-gray-300" for="education">{{$value->category_name}}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>


                                <div class="mt-8">
                                    <h6 class="mb-2 text-gray-900 text-16 dark:text-gray-50">Archives</h6>
                                    <div class="w-full h-0.5 rounded-full bg-gray-100/60 dark:bg-gray-500/20">
                                        <div class="group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 w-[25%] h-0.5 ltr:rounded-l-full rtl:rounded-r-full" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <ul class="mt-3 mb-0 text-gray-900 dark:text-gray-50">
                                        <li class="py-1"><a class="mr-2 text-gray-500 dark:text-gray-300" href="javascript:void(0)"><i class="uil uil-angle-right-b"></i> March 2021</a> (40)</li>
                                        <li class="py-1"><a class="mr-2 text-gray-500 dark:text-gray-300" href="javascript:void(0)"><i class="uil uil-angle-right-b"></i> April 2021</a> (08)</li>
                                        <li class="py-1"><a class="mr-2 text-gray-500 dark:text-gray-300" href="javascript:void(0)"><i class="uil uil-angle-right-b"></i> Nov 2020</a> (32)</li>
                                        <li class="py-1"><a class="mr-2 text-gray-500 dark:text-gray-300" href="javascript:void(0)"><i class="uil uil-angle-right-b"></i> May 2020</a> (11)</li>
                                        <li class="py-1"><a class="mr-2 text-gray-500 dark:text-gray-300" href="javascript:void(0)"><i class="uil uil-angle-right-b"></i>  Jun 2019</a> (21)</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

        </div>
    </div>



@endsection
