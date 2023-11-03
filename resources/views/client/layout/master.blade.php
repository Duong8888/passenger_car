<!DOCTYPE html>
<html lang="en" dir="ltr" data-mode="light" class="scroll-smooths group" data-theme-color="violet">

<head>
    <meta charset="utf-8" />
    <title>index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Tailwind Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="Themesbrand" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{csrf_token()}}">

    @include('client.layout.partials.style')
    @yield('page-style')
</head>


<body class="bg-white dark:bg-neutral-800">
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
    @include('client.layout.partials.header')


    @yield('content')



    <!-- Footer Start -->
    @include('client.layout.partials.footer')
    <!-- end Footer -->
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
    <script>
        const infoUser = @json(auth()->user());
    const urlNotification = '{{route('notifications.loadMessage')}}';
    </script>
    @include('client.layout.partials.script')
    @yield('page-script')
</body>



</html>

