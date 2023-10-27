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

            <!-- Start grid -->
            <section class="py-16">
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 md:gap-8">
                        <div class="col-span-12 md:col-span-6 md:col-start-4">
                            <div class="text-center">

                                <p class="mb-0 font-semibold text-red-600">Fashion</p>
                                <h3 class="text-gray-900 text-[26px] dark:text-white">{{ $post["title"] }}</h3>
                            </div>
                        </div>
                    </div>
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
                                            <img src="assets/images/user/img-03.jpg" alt="" class="w-12 h-12 rounded-full">
                                        </div>
                                        <div class="ltr:ml-3 rtl:mr-3">
                                            <a href="blog-author.html" class="text-gray-900 dark:text-white"><h6 class="mb-0 dark:text-gray-300">By Alice Mellor</h6></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="ltr:ml-3 rtl:mr-3">
                                    <div class="flex items-center">
                                        <div class="shrink-0">
                                            <i class="uil uil-calendar-alt"></i>
                                        </div>
                                        <div class="ltr:ml-2 rtl:mr-2">
                                            <p class="mb-0 dark:text-gray-300"> Aug 02, 2021</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="ltr:ml-3 rtl:mr-3">
                                    <div class="flex items-center">
                                        <div class="shrink-0">
                                            <i class="uil uil-comments-alt"></i>
                                        </div>
                                        <div class="ltr:ml-2 rtl:mr-2 flex-grow-1">
                                            <p class="mb-0 dark:text-gray-300"> 2 Comments</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="mt-4">

                                <p class="text-gray-500 dark:text-gray-300">{!!$post["subtitle"]!!}</p>
                                <figure class="text-center blog-blockquote">
                                    <blockquote class="blockquote">
                                        <p class="text-17 dark:text-gray-50">{{ $post["title"] }}</p>
                                    </blockquote>
                                </figure>

                                <div class="flex items-center my-4">
                                    <div class="shrink-0">
                                        <b class="text-gray-900 dark:text-gray-50">Tags:</b>
                                    </div>
                                    <div class="ltr:ml-2 rtl:mr-2 flex-grow-1">
                                        <a href="javascript:void(0)" class="px-1.5 py-0.5 mt-1 text-sm font-medium text-green-500 bg-green-500/20 rounded">Business</a>
                                        <a href="javascript:void(0)" class="px-1.5 py-0.5 mt-1 text-sm font-medium text-green-500 bg-green-500/20 rounded">design</a>
                                        <a href="javascript:void(0)" class="px-1.5 py-0.5 mt-1 text-sm font-medium text-green-500 bg-green-500/20 rounded">Creative</a>
                                        <a href="javascript:void(0)" class="px-1.5 py-0.5 mt-1 text-sm font-medium text-green-500 bg-green-500/20 rounded">Event</a>
                                    </div>
                                </div>
                                <ul class="flex gap-2 mb-0 md:justify-end">
                                    <li>
                                        <b class="text-gray-900 dark:text-gray-50">Share post:</b>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="p-2.5 rounded bg-violet-500/20 text-violet-500">
                                            <i class="uil uil-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="p-2.5 rounded bg-green-500/20 text-green-500">
                                            <i class="uil uil-whatsapp"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="p-2.5 rounded bg-violet-500/20 text-violet-500">
                                            <i class="uil uil-linkedin-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="p-2.5 rounded bg-red-500/20 text-red-500">
                                            <i class="uil uil-envelope"></i>
                                        </a>
                                    </li>
                                </ul>
                                <h5 class="pb-3 mt-8 text-gray-900 border-b border-gray-100/50 dark:text-gray-50 dark:border-zinc-700">Comments</h5>
                                <div class="mt-8">
                                    <div class="flex align-top">
                                        <div class="shrink-0">
                                            <img class="p-1 rounded-full w-14 h-14 ring-2 ring-gray-100/20" src="assets/images/user/img-01.jpg" alt="img">
                                        </div>
                                        <div class="ltr:ml-3 rtl:mr-3 grow">
                                            <small class="text-xs text-gray-500 ltr:float-right rtl:float-left dark:text-gray-300"><i class="uil uil-clock"></i> 30 min Ago</small>
                                            <a href="javascript:(0)" class="text-gray-900 transition-all duration-500 ease-in-out hover:bg-violet-500 dark:text-gray-50"><h6 class="mb-0 text-16 mt-sm-0">Rebecca Swartz</h6></a>
                                            <p class="mb-0 text-sm text-gray-500 dark:text-gray-300">Aug 10, 2021</p>
                                            <div class="my-3">
                                                <a href="javascript: void(0);" class="bg-gray-50 px-1.5 py-1 text-xs rounded group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 font-medium dark:bg-violet-500/20"><i class="mdi mdi-reply"></i> Reply</a>
                                            </div>
                                            <p class="mb-0 italic text-gray-500 dark:text-gray-300">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-8">
                                    <div class="flex align-top">
                                        <div class="shrink-0">
                                            <img class="p-1 rounded-full h-14 w-14 ring-2 ring-gray-100/20" src="assets/images/user/img-02.jpg" alt="img">
                                        </div>
                                        <div class="ltr:ml-3 rtl:mr-3 flex-grow-1">
                                            <small class="text-xs text-gray-500 ltr:float-right rtl:float-left dark:text-gray-300"><i class="uil uil-clock"></i> 2 hrs Ago</small>
                                            <a href="javascript:(0)" class="text-gray-900 transition-all duration-500 ease-in-out hover:bg-violet-500 dark:text-gray-50">
                                                <h6 class="mb-0 text-16">Adam Gibson</h6></a>
                                            <p class="mb-0 text-sm text-gray-500 dark:text-gray-300">Aug 10, 2021</p>
                                            <div class="my-3">
                                                <a href="javascript: void(0);" class="bg-gray-50 px-1.5 py-1 text-xs rounded group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 font-medium dark:bg-violet-500/20"><i class="mdi mdi-reply"></i> Reply</a>
                                            </div>
                                            <p class="mb-0 text-gray-500 fst-italic dark:text-gray-300">" The most important aspect of beauty was, therefore, an inherent part of an object, rather than something applied superficially, and was based on universal, recognisable truths. "</p>

                                            <div class="flex mt-8 align-top">
                                                <div class="shrink-0">
                                                    <img class="p-1 rounded-full h-14 w-14 ring-2 ring-gray-100/20" src="assets/images/user/img-04.jpg" alt="img">
                                                </div>
                                                <div class="ltr:ml-3 rtl:mr-3 flex-grow-1">
                                                    <small class="text-xs text-gray-500 ltr:float-right rtl:float-left dark:text-gray-300"><i class="uil uil-clock"></i> 2 hrs Ago</small>
                                                    <a href="javascript:(0)" class="text-gray-900 transition-all duration-500 ease-in-out hover:bg-violet-500 dark:text-gray-50"><h6 class="mb-0 text-16">Kiera Finch</h6></a>
                                                    <p class="mb-0 text-sm text-gray-500 dark:text-gray-300">Aug 10, 2021</p>
                                                    <div class="my-3">
                                                        <a href="javascript: void(0);" class="bg-gray-50 px-1.5 py-1 text-xs rounded group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 font-medium dark:bg-violet-500/20"><i class="mdi mdi-reply"></i> Reply</a>
                                                    </div>
                                                    <p class="mb-0 text-gray-500 fst-italic dark:text-gray-300">" This response is important for our ability to learn from mistakes, but it alsogives rise to self-criticism, because it is part of the threat-protection system.  "</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="#" class="mt-8 contact-form">
                                        <h5 class="pb-3 text-gray-900 border-b border-gray-100/50 dark:text-gray-50 dark:border-zinc-700">Leave a Message</h5>
                                        <div class="grid grid-cols-12 gap-5 mt-6">
                                            <div class="col-span-6">
                                                <div class="relative mb-3">
                                                    <label for="name" class="text-gray-900 dark:text-gray-50">Name</label>
                                                    <input name="name" id="name" type="text" class="w-full mt-1 rounded border-gray-100/50 placeholder:text-xs dark:bg-transparent dark:border-gray-800 dark:text-gray-300" placeholder="Enter your name*" required="">
                                                </div>
                                            </div>
                                            <div class="col-span-6">
                                                <div class="relative mb-3">
                                                    <label for="email" class="text-gray-900 dark:text-gray-50">Email address</label>
                                                    <input name="email" id="email" type="email" class="w-full mt-1 rounded border-gray-100/50 placeholder:text-xs dark:bg-transparent dark:border-gray-800 dark:text-gray-300" placeholder="Enter your email*" required="">
                                                </div>
                                            </div>
                                            <div class="col-span-12">
                                                <div class="relative mb-3">
                                                    <label for="subject" class="text-gray-900 dark:text-gray-50">Subject</label>
                                                    <input name="subject" id="subject" type="text" class="w-full mt-1 rounded border-gray-100/50 placeholder:text-xs dark:bg-transparent dark:border-gray-800 dark:text-gray-300" placeholder="Subject">
                                                </div>
                                            </div>
                                            <div class="col-span-12">
                                                <div class="relative mb-3">
                                                    <label for="comments" class="text-gray-900 dark:text-gray-50">Meassage</label>
                                                    <textarea name="comments" id="comments" rows="4" class="w-full mt-1 rounded border-gray-100/50 placeholder:text-xs dark:bg-transparent dark:border-gray-800 dark:text-gray-300" placeholder="Enter your message"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 text-end">
                                                <button name="submit" type="submit" id="submit" class="text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 hover:-translate-y-1">Send
                                                    Meassage <i class="uil uil-message ms-1"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="mt-8">
                                <h5 class="pb-3 text-gray-900 border-b border-gray-100/50 dark:text-gray-50 dark:border-zinc-700">Related Blog Posts</h5>
                                <div class="pb-5 mt-8 swiper blogSlider">
                                    <div class="pb-8 swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="relative overflow-hidden rounded-md group/blogpost">
                                                <img src="assets/images/blog/img-04.jpg" alt="" class="w-full h-[400px] object-cover duration-500 ease scale-110 rounded-md group-hover/blogpost:-translate-x-4 group-hover/blogpost:transition-all">
                                                <div class="absolute inset-0 bg-gradient-to-t from-black/50"></div>
                                                <div class="absolute bottom-3 ltr:left-3 rtl:right-3">
                                                    <a href="blog-details.html" class="text-white"><h5>Manage white space in responsive layouts ?</h5></a>
                                                    <p class="mt-1 text-gray-200"> <a href="blog-author.html" class="font-bold text-white-50">Rebecca Swartz</a> - 5 mins ago</p>
                                                </div>
                                            </div>
                                        </div><!--end blogSlider-->
                                        <div class="swiper-slide">
                                            <div class="relative overflow-hidden rounded-md group/blogpost">
                                                <img src="assets/images/blog/img-05.jpg" alt="" class="w-full h-[400px] object-cover duration-500 ease scale-110 rounded-md group-hover/blogpost:-translate-x-4 group-hover/blogpost:transition-all">
                                                <div class="absolute inset-0 bg-gradient-to-t from-black/50"></div>
                                                <div class="absolute bottom-3 ltr:left-3 rtl:right-3">
                                                    <a href="blog-details.html" class="text-white"><h5>A day in the of a professional fashion designer</h5></a>
                                                    <p class="mt-1 text-gray-200"> <a href="blog-author.html" class="font-bold text-white-50">Rebecca Swartz</a> - 5 mins ago</p>
                                                </div>
                                            </div>
                                        </div><!--end blogSlider-->
                                        <div class="swiper-slide">
                                            <div class="relative overflow-hidden rounded-md group/blogpost">
                                                <img src="assets/images/blog/img-06.jpg" alt="" class="w-full h-[400px] object-cover duration-500 ease scale-110 rounded-md group-hover/blogpost:-translate-x-4 group-hover/blogpost:transition-all">
                                                <div class="absolute inset-0 bg-gradient-to-t from-black/50"></div>
                                                <div class="absolute bottom-3 ltr:left-3 rtl:right-3">
                                                    <a href="blog-details.html" class="text-white"><h5>Design your apps in your own way</h5></a>
                                                    <p class="mt-1 text-gray-200"> <a href="blog-author.html" class="font-bold text-white-50">Rebecca Swartz</a> - 5 mins ago</p>
                                                </div>
                                            </div>
                                        </div><!--swiper-slide-->
                                    </div>
                                    <div class="swiper-pagination"></div>
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
                                    <div class="mb-3">
                                        <input class="rounded cursor-pointer border-gray-100/50 bg-gray-50 group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 checked:border-transparent focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:border-zinc-600 checked:dark:bg-violet-500/20" type="checkbox" value="" id="education">
                                        <label class="align-middle ltr:ml-2 rtl:mr-2 dark:text-gray-300" for="education">Education</label>
                                    </div>
                                    <div class="mb-3">
                                        <input class="rounded cursor-pointer border-gray-100/50 bg-gray-50 group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 checked:border-transparent focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:border-zinc-600 checked:dark:bg-violet-500/20" checked type="checkbox" value="" id="education">
                                        <label class="align-middle ltr:ml-2 rtl:mr-2 dark:text-gray-300" for="Business">Business</label>
                                    </div>
                                    <div class="mb-3">
                                        <input class="rounded cursor-pointer border-gray-100/50 bg-gray-50 group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 checked:border-transparent focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:border-zinc-600 checked:dark:bg-violet-500/20" checked type="checkbox" value="" id="education">
                                        <label class="align-middle ltr:ml-2 rtl:mr-2 dark:text-gray-300" for="Information">Information</label>
                                    </div>
                                    <div class="mb-3">
                                        <input class="rounded cursor-pointer border-gray-100/50 bg-gray-50 group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 checked:border-transparent focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:border-zinc-600 checked:dark:bg-violet-500/20" type="checkbox" value="" id="education">
                                        <label class="align-middle ltr:ml-2 rtl:mr-2 dark:text-gray-300" for="Interview">Interview</label>
                                    </div>
                                    <div class="mb-3">
                                        <input class="rounded cursor-pointer border-gray-100/50 bg-gray-50 group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 checked:border-transparent focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:border-zinc-600 checked:dark:bg-violet-500/20" type="checkbox" value="" id="education">
                                        <label class="align-middle ltr:ml-2 rtl:mr-2 dark:text-gray-300" for="Interview">Travel</label>
                                    </div>
                                    <div class="mb-3">
                                        <input class="rounded cursor-pointer border-gray-100/50 bg-gray-50 group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 checked:border-transparent focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:border-zinc-600 checked:dark:bg-violet-500/20" type="checkbox" value="" id="education">
                                        <label class="align-middle ltr:ml-2 rtl:mr-2 dark:text-gray-300" for="Interview">Jobs</label>
                                    </div>
                                    <div class="mb-3">
                                        <input class="rounded cursor-pointer border-gray-100/50 bg-gray-50 group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 checked:border-transparent focus:ring-0 focus:ring-offset-0 dark:bg-zinc-700 dark:border-zinc-600 checked:dark:bg-violet-500/20" type="checkbox" value="" id="education">
                                        <label class="align-middle ltr:ml-2 rtl:mr-2 dark:text-gray-300" for="Interview">Fashion</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-8">
                                <h6 class="mb-2 text-gray-900 text-16 dark:text-gray-50">Popular Post</h6>
                                <div class="w-full h-0.5 rounded-full bg-gray-100/60 dark:bg-gray-500/20">
                                    <div class="group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 w-[25%] h-0.5 ltr:rounded-l-full rtl:rounded-r-full" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <ul class="my-4">
                                    <li class="flex flex-wrap items-center pb-4 mb-4 border-b gap-y-3 md:gap-y-0 border-gray-100/50 dark:border-zinc-600">
                                        <img src="assets/images/blog/img-01.jpg" alt="" class="w-[86px] object-cover h-16 rounded">
                                        <div class="ltr:ml-3 rtl:mr-3 grow">
                                            <a href="blog-details.html" class="overflow-hidden font-medium text-gray-900 truncate dark:text-gray-50">The evolution of landing page creativity</a>
                                            <span class="block text-sm text-gray-500 dark:text-gray-300">Aug 10, 2021</span>
                                        </div>
                                    </li>
                                    <li class="flex flex-wrap items-center pb-4 mb-4 border-b gap-y-3 md:gap-y-0 border-gray-100/50 dark:border-zinc-600">
                                        <img src="assets/images/blog/img-02.jpg" alt="" class="w-[86px] object-cover h-16 rounded">
                                        <div class="ltr:ml-3 rtl:mr-3 grow"><a href="blog-details.html" class="overflow-hidden font-medium text-gray-900 truncate dark:text-gray-50">Beautiful day with friends in paris</a>
                                            <span class="block text-sm text-gray-500 dark:text-gray-300">Jun 24, 2021</span>
                                        </div>
                                    </li>
                                    <li class="flex flex-wrap items-center pb-4 mb-4 border-b gap-y-3 md:gap-y-0 border-gray-100/50 dark:border-zinc-600">
                                        <img src="assets/images/blog/img-03.jpg" alt="" class="w-[86px] object-cover h-16 rounded">
                                        <div class="ltr:ml-3 rtl:mr-3 grow"><a href="blog-details.html" class="overflow-hidden font-medium text-gray-900 truncate dark:text-gray-50">Project discussion with team</a>
                                            <span class="block text-sm text-gray-500 dark:text-gray-300">July 13, 2021</span>
                                        </div>
                                    </li>
                                    <li class="flex flex-wrap items-center pb-4 mb-4 gap-y-3 md:gap-y-0">
                                        <img src="assets/images/blog/img-10.jpg" alt="" class="w-[86px] object-cover h-16 rounded">
                                        <div class="ltr:ml-3 rtl:mr-3 grow"><a href="blog-details.html" class="overflow-hidden font-medium text-gray-900 truncate dark:text-gray-50">Smartest Applications for Business</a>
                                            <span class="block text-sm text-gray-500 dark:text-gray-300">Feb 01, 2021</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-8">
                                <h6 class="mb-2 text-gray-900 text-16 dark:text-gray-50">Text Widget</h6>
                                <div class="w-full h-0.5 rounded-full bg-gray-100/60 dark:bg-gray-500/20">
                                    <div class="group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 w-[25%] h-0.5 ltr:rounded-l-full rtl:rounded-r-full" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="my-4">
                                    <p class="mt-3 mb-0 text-gray-500 dark:text-gray-300">
                                        Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft
                                        beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v
                                        laborum. Aliquip veniam
                                        delectus, Marfa eiusmod Pinterest in do umami readymade swag.
                                    </p>
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
                            <div class="mt-8">
                                <h6 class="mb-2 text-gray-900 text-16 dark:text-gray-50">Latest Tags</h6>
                                <div class="w-full h-0.5 rounded-full bg-gray-100/60 dark:bg-gray-500/20">
                                    <div class="group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 w-[25%] h-0.5 ltr:rounded-l-full rtl:rounded-r-full" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="flex flex-wrap gap-2 mt-3">
                                    <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-gray-50 text-gray-600 rounded hover:bg-violet-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 dark:text-gray-100 dark:hover:bg-violet-500/20 dark:hover:text-white" href="javascript:void(0)">Fashion</a>
                                    <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-gray-50 text-gray-600 rounded hover:bg-violet-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 dark:text-gray-100 dark:hover:bg-violet-500/20 dark:hover:text-white" href="javascript:void(0)">Jobs</a>
                                    <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-gray-50 text-gray-600 rounded hover:bg-violet-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 dark:text-gray-100 dark:hover:bg-violet-500/20 dark:hover:text-white" href="javascript:void(0)">Business</a>
                                    <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-gray-50 text-gray-600 rounded hover:bg-violet-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 dark:text-gray-100 dark:hover:bg-violet-500/20 dark:hover:text-white" href="javascript:void(0)">Corporate</a>
                                    <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-gray-50 text-gray-600 rounded hover:bg-violet-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 dark:text-gray-100 dark:hover:bg-violet-500/20 dark:hover:text-white" href="javascript:void(0)">E-commerce</a>
                                    <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-gray-50 text-gray-600 rounded hover:bg-violet-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 dark:text-gray-100 dark:hover:bg-violet-500/20 dark:hover:text-white" href="javascript:void(0)">Agency</a>
                                    <a class="mt-2 text-xs font-medium px-2 py-0.5 text-center bg-gray-50 text-gray-600 rounded hover:bg-violet-500 hover:text-white transition-all duration-200 ease-in dark:bg-gray-500/20 dark:text-gray-100 dark:hover:bg-violet-500/20 dark:hover:text-white" href="javascript:void(0)">Responsive</a>
                                </div>
                            </div>
                            <div class="mt-8">
                                <h6 class="mb-2 text-gray-900 text-16 dark:text-gray-50">Follow & Connect</h6>
                                <div class="w-full h-0.5 rounded-full bg-gray-100/60 dark:bg-gray-500/20">
                                    <div class="group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 w-[25%] h-0.5 ltr:rounded-l-full rtl:rounded-r-full" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <ul class="flex flex-wrap gap-3 mt-4">
                                    <li class="leading-9 text-center ease-in rounded-full w-9 h-9 bg-gray-50 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:text-white hover:transition-all dark:bg-gray-500/20 dark:text-white dark:hover:bg-violet-500/20 dark:hover:text-gray-50">
                                        <a href="javascript:void(0)"><i class="uil uil-facebook-f"></i></a>
                                    </li>
                                    <li class="leading-9 text-center ease-in rounded-full w-9 h-9 bg-gray-50 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:text-white hover:transition-all dark:bg-gray-500/20 dark:text-white dark:hover:bg-violet-500/20 dark:hover:text-gray-50">
                                        <a href="javascript:void(0)"><i class="uil uil-whatsapp"></i></a>
                                    </li>
                                    <li class="leading-9 text-center ease-in rounded-full w-9 h-9 bg-gray-50 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:text-white hover:transition-all dark:bg-gray-500/20 dark:text-white dark:hover:bg-violet-500/20 dark:hover:text-gray-50">
                                        <a href="javascript:void(0)"><i class="uil uil-twitter-alt"></i></a>
                                    </li>
                                    <li class="leading-9 text-center ease-in rounded-full w-9 h-9 bg-gray-50 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:text-white hover:transition-all dark:bg-gray-500/20 dark:text-white dark:hover:bg-violet-500/20 dark:hover:text-gray-50">
                                        <a href="javascript:void(0)"><i class="uil uil-dribbble"></i></a>
                                    </li>
                                    <li class="leading-9 text-center ease-in rounded-full w-9 h-9 bg-gray-50 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:text-white hover:transition-all dark:bg-gray-500/20 dark:text-white dark:hover:bg-violet-500/20 dark:hover:text-gray-50">
                                        <a href="javascript:void(0)"><i class="uil uil-envelope"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End grid -->

        </div>
    </div>


    <!-- start subscribe -->
    <section class="relative py-16 overflow-hidden bg-zinc-700 dark:bg-neutral-900">
        <div class="container mx-auto">
            <div class="grid items-center grid-cols-12 gap-5">
                <div class="col-span-12 lg:col-span-7">
                    <div class="text-center lg:text-start">
                        <h4 class="text-white">Get New Jobs Notification!</h4>
                        <p class="mt-1 mb-0 text-white/50 dark:text-gray-300">Subscribe &amp; get all related jobs notification.</p>
                    </div>
                </div>
                <div class="z-40 col-span-12 lg:col-span-5">
                    <form class="flex" action="#">
                        <input
                            type="text" class="w-full text-gray-100 bg-transparent rounded-md border-gray-50/30 ltr:border-r-0 rtl:border-l-0 ltr:rounded-r-none rtl:rounded-l-none placeholder:text-13 placeholder:text-gray-100 dark:text-gray-100 dark:bg-white/5 dark:border-neutral-600 focus:ring-0 focus:ring-offset-0"
                            id="subscribe" placeholder="Enter your email" >
                        <button class="text-white border-transparent btn ltr:rounded-l-none rtl:rounded-r-none group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 focus:ring focus:ring-custom-500/30" type="button" id="subscribebtn">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="absolute right-0 -top-10 -z-0 opacity-20">
            <img src="assets/images/subscribe.png" alt="" class="img-fluid">
        </div>
    </section>
    <!-- end subscribe -->
@endsection
