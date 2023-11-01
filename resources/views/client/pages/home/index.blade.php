@extends('client.layout.master')

@section('content')
<div id="popupContainer" class="popup-container" style="display: none;
position: fixed;
width: 100%;
height: 100%;
background: rgba(0, 0, 0, 0.7);
z-index: 999;"  >
<div
    class="col-span-12 rounded-b-md lg:col-span-6 group-data-[theme-color=violet]:bg-violet-700 group-data-[theme-color=sky]:bg-sky-700 group-data-[theme-color=red]:bg-red-700 group-data-[theme-color=green]:bg-green-700 group-data-[theme-color=pink]:bg-pink-700 group-data-[theme-color=blue]:bg-blue-700 lg:rounded-b-none lg:ltr:rounded-r-lg rtl:rounded-l-lg" style="width: 50%; z-index: 1000;
    ">
    <div class="flex flex-col justify-center items-center h-screen p-12">
        <div class="text-center">
            <h5 class="text-[18.5px] text-white">Welcome Back !</h5>
            <p class="mt-3 text-white/80">Sign in to continue to Jobcy.</p>
        </div>
        <form onsubmit="return false;" class="mt-8">
            <div class="mb-5">
                <label for="number" class="text-white">Enter Your Phone Number</label>
                <input type="text" id="number"
                    class="w-full mt-1 group-data-[theme-color=violet]:bg-violet-400/40 group-data-[theme-color=sky]:bg-sky-400/40 group-data-[theme-color=red]:bg-red-400/40 group-data-[theme-color=green]:bg-green-400/40 group-data-[theme-color=pink]:bg-pink-400/40 group-data-[theme-color=blue]:bg-blue-400/40 py-2.5 rounded border-transparent placeholder:text-sm placeholder:text-gray-50 text-white"
                    name="number" placeholder="Phone..." oninput="validatePhoneNumber(this)" required>
                <div id="recaptcha-container"></div>
            </div>
            <div class="mb-5">
                <div class="fxt-transformY-50 fxt-transition-delay-4">
                    <button type="button"
                        class="bg-white border border-gray-300 text-gray-800 py-2 px-4 rounded-md"
                        onclick="sendOTP();">Send Code To My Phone
                    </button>
                </div>
            </div>
        </form>
        <div class="text-center">
            <p class="text-white">Click here to <a href="{{ route('home') }}"
                    class="text-white underline fw-medium">Back</a> to website</p>
            <div class="p-10">
                <a href="index.html">
                    <img src="client/images/logo-light.png" alt="" class="hidden mx-auto dark:block">
                    <img src="client/images/logo-dark.png" alt="" class="block mx-auto dark:hidden">
                </a>
                <button id="closePopupButton">Đóng</button>
            </div>
        </div>
    </div>
</div>
</div>
<div id="popupContainer2" class="popup-container" style="display: none;
position: fixed;
width: 100%;
height: 100%;
background: rgba(0, 0, 0, 0.7);
z-index: 1000;
padding:00px ">
  <div
  class="col-span-12 rounded-b-md lg:col-span-6 group-data-[theme-color=violet]:bg-violet-700 group-data-[theme-color=sky]:bg-sky-700 group-data-[theme-color=red]:bg-red-700 group-data-[theme-color=green]:bg-green-700 group-data-[theme-color=pink]:bg-pink-700 group-data-[theme-color=blue]:bg-blue-700 lg:rounded-b-none lg:ltr:rounded-r-lg rtl:rounded-l-lg" style="width: 50%;justify-content: center;
  ">
  <div class="flex flex-col justify-center h-full p-12">
      <div class="text-center">
          <h5 class="text-[18.5px] text-white">Now You Have To Verify Your Code.</h5>
          <p class="mt-3 text-white/80">We’ve sent a verification code to <span>Your Number</span></p>
      </div>
      <form onsubmit="return false;" method="post" class="mt-8">
          @csrf
          <div class="mb-5">
                  <input type="text" class="w-full mt-1 group-data-[theme-color=violet]:bg-violet-400/40 group-data-[theme-color=sky]:bg-sky-400/40 group-data-[theme-color=red]:bg-red-400/40 group-data-[theme-color=green]:bg-green-400/40 group-data-[theme-color=pink]:bg-pink-400/40 group-data-[theme-color=blue]:bg-blue-400/40 py-2.5 rounded border-transparent placeholder:text-sm placeholder:text-gray-50 text-white" id="verificationId" required="required" onkeyup="checkEnter(event)">
          </div>
          <div class="mb-5">
              <div class="fxt-transformY-50 fxt-transition-delay-4">
                  <button type="button" class="bg-white border border-gray-300 text-gray-800 py-2 px-4 rounded-md" onclick="verify()">Verify</button>
              </div>
          </div>
      </form>
      <div class="text-center">
          <p class="text-white">Click here to <a href="{{ route('home') }}" class="text-white underline fw-medium">Back</a> to website</p>
          <div class="p-10">
              <a href="index.html">
                  <img src="client/images/logo-light.png" alt=""
                      class="hidden mx-auto dark:block">
                  <img src="client/images/logo-dark.png" alt=""
                      class="block mx-auto dark:hidden">
              </a>
             
          </div>
      </div>
  </div>
</div>
</div>
    <!-- Tìm kiếm -->
    @include('client.pages.home.search')
    <!-- End tìm kiếm -->
    <!-- danh sách xe -->
    <section class="py-20 bg-gray-50 dark:bg-neutral-700">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 gap-5">
                <div class="mb-5 text-center">
                    <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50">Tuyến đường phổ biến</h3>
                    <p class="mb-5 text-gray-500 whitespace-pre-line dark:text-gray-300"></p>
                </div>
            </div>
            <div class="nav-tabs chart-tabpill">
                <div class="tab-content">
                    <div class="block w-full tab-pane" id="recent-job">
                        <div class="pt-8 ">
                            <div class="space-y-8">
                                <!--  -->
                                @foreach ($passengerCars as $car)
                                    @foreach ($car->workingTime as $workingTime)
                                    {{--  --}}
                                    <div
                                        class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600 ">
                                        <div
                                            class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                            <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i
                                                    class="mdi mdi-star"></i></a>
                                        </div>
                                        <div class="p-4">
                                            <div class="grid items-center grid-cols-12">
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="mb-4 text-center mb-md-0">
                                                        <a href="company-details.html">
                                                            <img style="width: 55%;" src="{{asset($car->albums[0]->path)}}" alt="anh0001" class="mx-auto img-fluid rounded-3"></a>
                                                        {{-- Ảnh: <img src="{{ $car->albums->first()->path }}" alt="Ảnh xe"> --}}
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">
                                                    <div class="mb-2 mb-md-0">


                                                        <h5 class="mb-1 fs-18"><a href="job-details.html"
                                                                                  class="text-gray-900 dark:text-gray-50">{{$car->user->name}}</a>
                                                        <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Ghế ngồi {{ $car->capacity }} chỗ</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-3">

                                                        <div class="mb-2 lg:flex">
                                                            <div class="flex-shrink-0">
                                                                <i style="font-size: 11px;padding-left: 2px"
                                                                class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 fa-solid fa-circle-dot"></i>
                                                            </div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                    style="font-weight: bold;"> {{ \Carbon\Carbon::parse($workingTime->departure_time)->format('H:i') }} -- {{ \Carbon\Carbon::parse($workingTime->arrival_time)->format('H:i') }}</span></p>
                                                        </div>

                                                </div>

                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div>
                                                        <div class="mb-2 lg:flex" style="margin-left: -35px">
                                                            <div class="flex-shrink-0">
                                                                <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                            </div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300" style="font-weight: bold;"><span
                                                                    style="font-weight: bold;">{{ $car->route->departure }}</span>
                                                            --> {{ $car->route->arrival }}</p>
                                                        </div>
                                                        <p style=" font-weight: bold;"
                                                           class="mb-2 text-gray-500 dark:text-gray-300"><span
                                                                style="color: #1890ff;">{{ number_format( $car->price, 0, ',', ',') }}đ</span>
                                                        </p>
                                                        {{-- Giá: {{ $car->route->price }} <br> --}}
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-2">
                                                    <div class="flex flex-wrap gap-1.5">
                                                        <a href="{{route('passengerCar.detail',['id'=>$car->id,'time'=>$workingTime->id])}}" class="badge text-sky-500 text-13 px-2 py-0.5 font-medium rounded">Thông tin chi tiết </a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12 lg:col-span-4">
                                                    <div>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span
                                                                class="text-gray-900 dark:text-gray-50">Biển số xe :</span> {{$car->license_plate}}
                                                        </p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 lg:col-span-6">

                                                </div>
                                                <!--end col-->
                                                <div class="col-span-3 lg:col-span-2">
                                                    <div class="text-start text-md-end dark:text-gray-50">
                                                        <form action="{{ URL::to('passengerCar-detail') }}"
                                                              method="POST">
                                                            @csrf
                                                            <input type="text" hidden name='passenger_id'
                                                                   value="{{$car->id}}">
                                                            <input type="text" hidden name='image_id'
                                                                   value="{{$car->album_id}}">
                                                            <input type="text" hidden name='route_id'
                                                                   value="{{$car->route_id}}">
                                                            <button><i class="mdi mdi-chevron-double-right"></i>Đặt vé
                                                                ngay
                                                            </button>
                                                        </form>

                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                    @endforeach
                                @endforeach

                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="mt-8">
                <div class="grid grid-cols-1">
                    <div class="text-center">
                        <a href="job-categories.html"
                           class="text-white border-transparent group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 btn focus:ring focus:ring-custom-500/20">Xem
                            thêm<i class="uil uil-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Nhà xe --}}
    <section class="py-20 dark:bg-neutral-800">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 gap-5">
                <div class="text-center">
                    <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50">Nhà xe</h3>
                    <p class="mb-5 text-gray-500 whitespace-pre-line dark:text-gray-300">Một số nhà xe có lượt đặt vé cao trong các tháng vừa qua.</p>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-5">
                @foreach ($users as $nhaxe)
                    <div class="col-span-12 md:col-span-6 lg:col-span-3">
                        <div class="mt-4">
                            <div class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                                <div class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.4] mx-auto dark:bg-violet-900">
                                    {{-- <i class="uim uim-layers-alt"></i> --}}
                                    <img src="{{ $nhaxe->image }}" alt="nhaxe" style="height: 100%;width: 100%;">
                                </div>
                                <div class="mt-4 text-center">
                                    <a href="job-categories.html" class="text-gray-900">
                                        <h5 class="text-lg dark:text-gray-50">{{ $nhaxe->name }}</h5>
                                    </a>
                                    <p class="mt-1 font-medium text-gray-500 dark:text-gray-300">{{ $nhaxe->created_at->format('d-m-Y') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
@section('page-script')
<script>
    var openButton = document.getElementById("openPopupButton");
    var closeButton = document.getElementById("closePopupButton");

    openButton.addEventListener("click", function () {
        popupContainer.style.display = "block";
    });

  
    closeButton.addEventListener("click", function () {
        popupContainer.style.display = "none";
    });
</script>
    <script src="{{asset('client/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

    <script src="{{asset('client/js/pages/job-list.init.js')}}"></script>

    <script src="{{asset('client/js/pages/dropdown%26modal.init.js')}}"></script>

@endsection

