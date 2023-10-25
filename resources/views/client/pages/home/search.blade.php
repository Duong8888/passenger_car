<section class="relative py-64 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 group-data-[mode=dark]:bg-neutral-900 ">
    <div class="inset-0 absolute bg-[url('../images/home/img-01.html')] bg-center"></div>
    <div class="container relative mx-auto">
        <div class="grid items-center grid-cols-12 rtl:gap-10">
            <div class="col-span-12 col-start-2">
                <div class="mb-3 text-center ltr:mr-14 rtl:ml-14">
                    <h1 class="mb-3 text-5xl leading-tight text-white fw-semibold">Khám phá thế giới bằng xe bus</h1>
                    <p class="text-white text-17">"Hãy tìm xe và bắt đầu hành trình của bạn ngay hôm nay, để biết mọi cuộc hành trình đều đặc biệt!</p>
                </div>
                <form action="{{route('search')}}" method="GET">
                    <div class="registration-form">
                        <div class="grid grid-cols-12">
                            <div class="col-span-12 xl:col-span-4">
                                <div class="mt-3 rounded-l filter-search-form filter-border mt-md-0">
                                    <i class="uil uil-map-marker">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(96, 165, 250, 1);transform: ;msFilter:;"><path d="M12 5c-3.859 0-7 3.141-7 7s3.141 7 7 7 7-3.141 7-7-3.141-7-7-7zm0 12c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z"></path><path d="M12 9c-1.627 0-3 1.373-3 3s1.373 3 3 3 3-1.373 3-3-1.373-3-3-3z"></path></svg>
                                    </i>
                                    <select class="form-select rounded-l"  data-trigger name="departure" id="choices-single-location" aria-label="Default select example">
                                        @foreach($stops as $value)
                                            <option value="{{$value}}">{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><!--end col-->

                            <div class="col-span-12 xl:col-span-4">
                                <div class="mt-3 filter-search-form mt-lg-0">
                                    <i class="uil uil-clipboard-notes">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(235, 87, 87, 1);transform: ;msFilter:;"><circle cx="12" cy="12" r="4"></circle><path d="M13 4.069V2h-2v2.069A8.01 8.01 0 0 0 4.069 11H2v2h2.069A8.008 8.008 0 0 0 11 19.931V22h2v-2.069A8.007 8.007 0 0 0 19.931 13H22v-2h-2.069A8.008 8.008 0 0 0 13 4.069zM12 18c-3.309 0-6-2.691-6-6s2.691-6 6-6 6 2.691 6 6-2.691 6-6 6z"></path></svg>
                                    </i>
                                    <select class="form-select" data-trigger name="arrival" id="choices-single-categories" aria-label="Default select example">
                                        @foreach($stops as $value)
                                            <option value="{{$value}}">{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><!--end col-->
                            <div class="col-span-12 xl:col-span-3">
                                <div class="h-full mt-3">
                                    <button class="btn group-data-[theme-color=violet]:bg-violet-400 group-data-[theme-color=sky]:bg-sky-400 group-data-[theme-color=red]:bg-red-400 group-data-[theme-color=green]:bg-green-400 group-data-[theme-color=pink]:bg-pink-400 group-data-[theme-color=blue]:bg-blue-400 border rounded-lg border-transparent ltr:xl:rounded-l-none rtl:xl:rounded-r-none w-full py-[18px] text-white" style="border-radius: 0 !important;" type="submit"><i class="uil uil-search me-1"></i>Tìm kiếm</button>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </form>
            </div>
        </div>
    </div>
    <img src="{{asset('client/images/bg-shape.png')}}" alt="" class="absolute block -bottom-5 dark:hidden">
    <img src="{{asset('client/images/bg-shape-dark.png')}}" alt="" class="absolute hidden -bottom-5 dark:block">
</section>
