@extends('client.layout.master')
@section('content')
<div class="main-content">
    <div class="page-content">

        <section class="pt-28 lg:pt-44 pb-28 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 dark:bg-neutral-900 bg-[url('../images/home/page-title.html')] bg-center bg-cover relative" >
            <div class="container mx-auto">
                <div class="grid">
                    <div class="col-span-12">
                        <div class="text-center text-white">
                            <h3 class="mb-4 text-[26px]">Blog</h3>
                            <div class="page-next">
                                <nav class="inline-block" aria-label="breadcrumb text-center">
                                    <ol class="flex justify-center text-sm font-medium uppercase">
                                        <li><a href="index.html">Home</a></li>
                                        <li><i class="bx bxs-chevron-right align-middle px-2.5"></i><a href="javascript:void(0)">Blog</a></li>
                                        <li class="active" aria-current="page"><i class="bx bxs-chevron-right align-middle px-2.5"></i>Blog</li>
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
                <div class="grid items-center grid-cols-12 gap-y-5 lg:gap-5">

                    <div class="col-span-12">
                        <div class="mb-4">
                            <h4 class="text-[22.5px] text-gray-900 dark:text-gray-50"></h4>
                        </div>
                    </div><!--end col-->
                    <div class="col-span-12 lg:col-span-7">
                        <div class="relative mb-3 overflow-hidden rounded">
                            <a href="blog-details.html"><img src="assets/images/blog/img-04.jpg" alt="Blog" class="w-full duration-500 ease-in-out scale-110 rounded hover:-translate-x-2 hover:transition-all"></a>
                        </div>
                    </div><!--end col-->
                    <div class="col-span-12 lg:col-span-5">
                        <!-- Post-->
                        <article class="relative">
                            <div class="ml-4">
                                <p class="text-gray-500 dark:text-gray-300"><b>Product</b> - Aug 01, 2021</p>
                                <h5 class="mb-3 text-[18.55px] dark:text-gray-50"><a href="blog-details.html">Stack designer Olivia Murphy offers freelancing advice</a></h5>
                                <p class="text-gray-500 dark:text-gray-300">
                                    Objectively pursue diverse catalysts for change for interoperable meta-services. Distinctively re-engineer revolutionary meta-services and premium architectures. Intrinsically incubate intuitive opportunities and real-time potentialities. Appropriately communicate one-to-one technology.
                                </p>
                                <div class="flex items-center mt-4">
                                    <div class="shrink-0">
                                        <img src="assets/images/user/img-01.jpg" alt="" class="rounded-full w-14 h-14">
                                    </div>
                                    <div class="ltr:ml-3 rtl:mr-3 grow">
                                        <a href="blog-author.html" class="dark:text-gray-50"><h6 class="mb-0 fs-16">James Lemire </h6></a>
                                        <p class="mb-0 dark:text-gray-300">Product Manager</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Post end-->
                    </div><!--end col-->
                </div>

                <div class="grid items-center grid-cols-12 gap-5 mt-8">
                    @foreach ($posts as $post)
                    <div class="col-span-12">

                    </div><!--end col-->
                    <div class="col-span-12 lg:col-span-6">
                        <div class="relative mb-3 overflow-hidden rounded">
                            <a href="{{route('blog',$post->id)}}"><img src="assets/images/blog/img-06.jpg" alt="Blog" class="w-full duration-500 ease-in-out scale-110 rounded hover:-translate-x-2 hover:transition-all"></a>
                        </div>
                        <p class="mb-2 text-gray-500 dark:text-gray-300"><b>Fashion</b> - July 29, 2021</p>
                        <h5 class="mb-3 text-gray-900 dark:text-gray-50"><a href="{{route('blog',$post->id)}}">{{ $post->title }}</a></h5>
                        <div class="text-gray-900 dark:text-gray-50 blogshow" >
                            {!!$post->subtitle!!}
                        </div>

                    </div><!--end col-->

                    <div class="col-span-12 lg:col-span-6">
                        <div class="relative mb-3 overflow-hidden rounded">
                            <a href="{{route('blog',$post->id)}}"><img src="assets/images/blog/img-05.jpg" alt="Blog" class="w-full duration-500 ease-in-out scale-110 rounded hover:-translate-x-2 hover:transition-all"></a>
                        </div>
                        <p class="mb-2 text-gray-500 dark:text-gray-300"><b>Business </b> - July 25, 2021</p>
                        <h5 class="mb-3 text-gray-900 dark:text-gray-50"><a href="{{route('blog',$post->id)}}">{{ $post->title }}</a></h5>
                        <div class="text-gray-500 dark:text-gray-300 blogshow">
                            {!!$post->subtitle!!}
                        </div>

                    </div><!--end col-->
                    @endforeach

                </div>
                <ul class="flex justify-center gap-2 mt-14">
                    <li class="w-12 h-12 text-center border rounded-full cursor-default border-gray-100/50 dark:border-zinc-600 dark:border-gray-100/20">
                        <a class="cursor-auto" href="javascript:void(0)" tabindex="-1">
                            <i class="mdi mdi-chevron-double-left text-16 leading-[2.8] dark:text-gray-50"></i>
                        </a>
                    </li>
                    <li class="w-12 h-12 text-center text-white border border-transparent rounded-full cursor-pointer group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">
                        <a class="text-16 leading-[2.8]" href="javascript:void(0)">1</a>
                    </li>
                    <li class="w-12 h-12 text-center text-gray-900 transition-all duration-300 border rounded-full cursor-pointer border-gray-100/50 dark:border-zinc-600 hover:bg-gray-100/30 focus:bg-gray-100/30 dark:border-gray-100/20 dark:text-gray-50 dark:hover:bg-gray-500/20">
                        <a class="text-16 leading-[2.8]" href="javascript:void(0)">2</a>
                    </li>
                    <li class="w-12 h-12 text-center text-gray-900 transition-all duration-300 border rounded-full cursor-pointer border-gray-100/50 dark:border-zinc-600 hover:bg-gray-100/30 focus:bg-gray-100/30 dark:border-gray-100/20 dark:text-gray-50 dark:hover:bg-gray-500/20">
                        <a class="text-16 leading-[2.8]" href="javascript:void(0)">3</a>
                    </li>
                    <li class="w-12 h-12 text-center text-gray-900 transition-all duration-300 border rounded-full cursor-pointer border-gray-100/50 dark:border-zinc-600 hover:bg-gray-100/30 focus:bg-gray-100/30 dark:border-gray-100/20 dark:text-gray-50 dark:hover:bg-gray-500/20">
                        <a class="text-16 leading-[2.8]" href="javascript:void(0)">4</a>
                    </li>
                    <li class="w-12 h-12 text-center text-gray-900 transition-all duration-300 border rounded-full cursor-pointer border-gray-100/50 dark:border-zinc-600 hover:bg-gray-100/30 focus:bg-gray-100/30 dark:border-gray-100/20 dark:text-gray-50 dark:hover:bg-gray-500/20">
                        <a href="javascript:void(0)" tabindex="-1">
                            <i class="mdi mdi-chevron-double-right text-16 leading-[2.8]"></i>
                        </a>
                    </li>
                </ul>
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
