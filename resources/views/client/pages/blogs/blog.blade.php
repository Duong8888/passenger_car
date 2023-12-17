@extends('client.layout.master')
@section('content')

        <div class="page-content">
            <!-- Start grid -->
            <section class="pt-28 lg:pt-44 pb-28 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 dark:bg-neutral-900 bg-[url('../images/home/page-title.html')] bg-center bg-cover relative" >
                <div class="container mx-auto">
                    <div class="grid">
                        <div class="col-span-12">
                            <div class="text-center text-white">
                                <h3 class="mb-4 text-[26px]">Tin Tức</h3>
                                <div class="page-next">
                                    <nav class="inline-block" aria-label="breadcrumb text-center">
                                        <ol class="flex justify-center text-sm font-medium uppercase">
                                            <li><a href="index.html">Trang chủ</a></li>
                                            <li><i class="bx bxs-chevron-right align-middle px-2.5"></i><a href="javascript:void(0)">Tin Tức</a></li>
                                            {{-- <li class="active" aria-current="page"><i class="bx bxs-chevron-right align-middle px-2.5"></i>Contact</li> --}}
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


            </section>
            <section class="py-16">
                <div class="container mx-auto">
                    <div class="col-span-12" style="margin-top: 30px;">
                        <div>
                            <h4 class="text-[22.5px] items-center text-gray-900 dark:text-gray-50 ">Tất cả bài viết</h4>
                        </div>
                    </div><!--end col-->
                    <div class="flex flex-wrap items-center grid-cols-12 gap-5 mt-8">
                        @foreach($posts as $key => $value)
                                <div class="" style="width: 32%;border: 2px solid floralwhite; padding: 20px;border-radius: 10px;">
                                    <div class="relative mb-3 overflow-hidden rounded">
                                        <a href="{{ route('blog', ['id' => $value->id]) }}"><img src="{{$value->image}}" alt="Blog" class="duration-500 ease-in-out scale-110 rounded hover:-translate-x-2 hover:transition-all" style="width: 100%;height: 300px;object-fit: cover"></a>
                                    </div>
                                    <p class="mb-2 text-gray-500 dark:text-gray-300">
                                        <b>{{$value->category->category_name}}</b>
                                        - {{date('d/m/Y',strtotime($value->created_at))}}</p>
                                    <h5 class="mb-3 text-gray-900 dark:text-gray-50 w-64 truncate"><a
                                            href="{{ route('blog', ['id' => $value->id]) }}">{{$value->title}}</a></h5>
                                    <p class="text-gray-500 dark:text-gray-300">

                                    </p>
                                    <div class="flex items-center mt-4">
                                        <div class="shrink-0">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8Iqk1ZFa-q1t0mxhxGAOPqCSzzdJEzG2UgQ&usqp=CAU" alt=""
                                                 class="rounded-full h-14 w-14">
                                        </div>
                                        <div class="ltr:ml-3 rtl:mr-3 grow">
                                            <a href="javascript:;" class="text-gray-900 dark:text-gray-50"><h6
                                                    class="mb-0 fs-16">{{$value->user->name}}</h6></a>
                                            <p class="mb-0 text-gray-500 dark:text-gray-300">Nhà Xe</p>
                                        </div>
                                    </div>
                                </div><!--end col-->
                        @endforeach
                    </div>
                    <div style="padding: 20px 0" class="d-flex justify-content-center align-items-center">
                        {{ $posts->links('vendor.pagination.custom')}}
                    </div>
                </div>
            </section>
            <!-- End grid -->
            x
        </div>
    </div>

    <style>
        .page-item.active .page-link{
            z-index: 3;
            color: #fff !important  ;
            background-color: #000000 !important;
            border-color: #000000 !important;
            border-radius: 50%;
            padding: 6px 12px;
        }
        .page-link{
            z-index: 3;
            color: #000000 !important;
            background-color: #fff;
            border-color: #000000;
            border-radius: 50%;
            padding: 6px 12px !important;
        }
        .page-item:first-child .page-link{
            border-radius: 10% !important;
        }
        .page-item:last-child .page-link{
            border-radius: 10% !important;
        }
        .pagination li{
            padding: 3px;
        }
        .disabled .page-link{
            color: #212529 !important;
            opacity: 0.5 !important;
        }
    </style>

@endsection
