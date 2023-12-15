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
@endsection
