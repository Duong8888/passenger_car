
@extends('client.layout.master')

@section('content')
<div class="main-content">
    <div class="page-content">

        <section class="pt-28 lg:pt-44 pb-28 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 dark:bg-neutral-900 bg-[url('../images/home/page-title.html')] bg-center bg-cover relative" >
            <div class="container mx-auto">
                <div class="grid">
                    <div class="col-span-12">
                        <div class="text-center text-white">
                            <h3 class="mb-4 text-[26px]">My Profile</h3>
                            <div class="page-next">
                                <nav class="inline-block" aria-label="breadcrumb text-center">
                                    <ol class="flex justify-center text-sm font-medium uppercase">
                                        <li><a href="index.html">Home</a></li>
                                        <li><i class="bx bxs-chevron-right align-middle px-2.5"></i><a href="javascript:void(0)">My Profile</a></li>
                                        <li class="active" aria-current="page"><i class="bx bxs-chevron-right align-middle px-2.5"></i>My Profile</li>
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
            <section class="py-20">
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 gap-y-10 lg:gap-10">
                        <div class="col-span-12 lg:col-span-4">
                            <div class="border rounded border-gray-100/50 dark:border-neutral-600">
                                <div class="p-5 border-b border-gray-100/50 dark:border-neutral-600">
                                    <div class="text-center">
                                        {{-- <img src="{{asset( $user->image)}}" alt="" class="w-20 h-20 p-1 mx-auto border-2 rounded-full border-gray-200/20"> --}}
                                        {{-- <h6 class="mt-4 mb-2 text-lg text-gray-900 dark:text-gray-50">{{ $user->name }}</h6> --}}
                                        {{-- <p class="mb-4 text-gray-500 dark:text-gray-300">Developer</p> --}}
                                        <ul class="flex flex-wrap justify-center gap-2 mb-0">
                                            <li class="w-10 h-10 text-lg leading-10 transition-all duration-300 ease-in-out rounded bg-violet-500/20 text-violet-500 hover:bg-violet-500 hover:text-white">
                                                <a href="javascript:void(0)" class="social-link rounded-3 "><i class="uil uil-facebook-f"></i></a>
                                            </li>
                                            <li class="w-10 h-10 text-lg leading-10 transition-all duration-300 ease-in-out rounded bg-sky-500/20 text-sky-500 hover:bg-sky-500 hover:text-white">
                                                <a href="javascript:void(0)" class="social-link rounded-3 btn-soft-info"><i class="uil uil-twitter-alt"></i></a>
                                            </li>
                                            <li class="w-10 h-10 text-lg leading-10 text-green-500 transition-all duration-300 ease-in-out rounded bg-green-500/20 hover:bg-green-500 hover:text-white">
                                                <a href="javascript:void(0)" class="social-link rounded-3 btn-soft-success"><i class="uil uil-whatsapp"></i></a>
                                            </li>
                                            <li class="w-10 h-10 text-lg leading-10 text-red-500 transition-all duration-300 ease-in-out rounded bg-red-500/20 hover:bg-red-500 hover:text-white">
                                                <a href="javascript:void(0)" class="social-link rounded-3 btn-soft-danger"><i class="uil uil-phone-alt"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                {{-- <div class="p-5">
                                    <div class="pb-5 border-b border-gray-100/50 dark:border-neutral-600">
                                        <h6 class="mb-5 font-semibold text-gray-900 text-17 dark:text-gray-50">Documents</h6>
                                        <ul class="">
                                            <li>
                                                <div class="flex items-center mt-4 ">
                                                    <div class="text-2xl text-gray-500 shrink-0">
                                                        <i class="uil uil-file"></i>
                                                    </div>
                                                    <div class="ml-4">
                                                        <h6 class="mb-0 text-gray-900 text-16 dark:text-gray-50">Resume.pdf</h6>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300">1.25 MB</p>
                                                    </div>
                                                    <div class="ml-auto text-xl">
                                                        <a href="assets/images/dark-logo.html" download="" class="text-gray-500 fs-20"><i class="uil uil-import"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="flex items-center mt-4 ">
                                                    <div class="text-2xl text-gray-500 shrink-0">
                                                        <i class="uil uil-file"></i>
                                                    </div>
                                                    <div class="ml-4">
                                                        <h6 class="mb-0 text-gray-900 text-16 dark:text-gray-50">Cover-letter.pdf</h6>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300">1.25 MB</p>
                                                    </div>
                                                    <div class="ml-auto text-xl">
                                                        <a href="assets/images/dark-logo.html" download="" class="text-gray-500 fs-20"><i class="uil uil-import"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </div> --}}
                                <div class="p-5 pt-5">
                                    <h6 class="mb-3 font-semibold text-gray-900 text-17 dark:text-gray-50">Search</h6>
                                    <ul class="mb-0">
                                        <li class="pb-3">
                                            <div class="flex">
                                                <form role="search" method="GET" id="searchform" action="{{route('route_clientindex_search')}}">
                                                    <input type="text" name="key" id="s" placeholder="Nhập từ khóa...">
                                                    <button class="fa-search" type="submit" id="searchsubmit" >Tìm kiếm</button>
                                                </form>
                                            </div>
                                        </li>
                                        {{-- <li class="pb-3">
                                            <div class="flex">
                                                <label class="w-32 font-medium text-gray-900 dark:text-gray-50">Phone Number</label>
                                                <div> --}}
                                                    {{-- <p class="mb-0 text-gray-500 dark:text-gray-300">{{ user->pho$ne }}</p> --}}
                                                {{-- </div>
                                            </div>
                                        </li> --}}
                                        {{-- <li class="pb-3">
                                            <div class="flex">
                                                <label class="w-32 font-medium text-gray-900 dark:text-gray-50">Location</label>
                                                <div>
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">New Caledonia</p>
                                                </div>
                                            </div>
                                        </li> --}}
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-8">
                            <div class="border rounded border-gray-100/50 dark:border-neutral-600 nav-tabs bottom-border-tab">
                                <div class="px-6 py-0 border-b border-gray-100/50 dark:border-neutral-600">
                                
                                    <ul class="items-center text-sm font-medium text-center text-gray-700 nav md:flex">
                                        <li class="active" role="presentation">
                                            <button class="inline-block w-full py-4 px-[18px] dark:text-gray-50 active"  data-tw-toggle="tab" type="button" data-tw-target="overview-tab">
                                                Overview
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="inline-block w-full py-4 px-[18px] dark:text-gray-50" data-tw-toggle="tab" type="button" data-tw-target="settings-tab">
                                                Settings
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                    
                                    <div class="p-6 tab-content">
                                        <div class="block w-full tab-pane" id="overview-tab">
                                            <table class="table" >
                                                <thead>
                                                
                                                </thead>
                                                <tbody>
                                                @foreach ($tickets as $item)
                                                    <div style="display:flex; flex-direction: row; justify-content: space-between; ">
                                                    <div class="ve" style="font-size:25px ">
                                                    <p>{{$item->username}}</p>
                                                    <p>{{$item->passenger_car_id}}</p> 
                                                    <p>{{$item->total_price}}</p> 
                                                    </div>
                                                    <div class="ve1" style="font-size:20px">
                                                        <p>{{$item->payment_method}}</p> 
                                                    <p>{{$item->status}}</p>
                                                    </div>
                                                    </div>
                                        @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="hidden w-full tab-pane" id="settings-tab">
                                            <div class="pt-1 space-x-1">
                                                <table class="table" >
                                                    <thead>
                                                    
                                                    </thead>
                                                    <tbody>
                                                    @foreach ($tickets as $item)
                                                        <div style="display:flex; flex-direction: row; justify-content: space-between; ">
                                                        <div class="ve" style="font-size:25px ">
                                                        <p>{{$item->username}}</p>
                                                        <p>{{$item->passenger_car_id}}</p> 
                                                        <p>{{$item->total_price}}</p> 
                                                        </div>
                                                        <div class="ve1" style="font-size:20px">
                                                            <p>{{$item->payment_method}}</p> 
                                                        <p>{{$item->status}}</p>
                                                        </div>
                                                        </div>
                                            @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                
                                
                            </div>
                        </div>
                        {{-- <div class="col-span-12 lg:col-span-8">
                            <div class="border rounded border-gray-100/50 dark:border-neutral-600 nav-tabs bottom-border-tab">
                                <div class="px-6 py-0 border-b border-gray-100/50 dark:border-neutral-600">

                                    <ul class="items-center text-sm font-medium text-center text-gray-700 nav md:flex">
                                        <li class="active" role="presentation">
                                            <button class="inline-block w-full py-4 px-[18px] dark:text-gray-50 active"  data-tw-toggle="tab" type="button" data-tw-target="overview-tab">
                                                Vé đã đi
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="inline-block w-full py-4 px-[18px] dark:text-gray-50" data-tw-toggle="tab" type="button" data-tw-target="settings-tab">
                                                Vé đã hủy
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                                 
                           <div class="p-6 tab-content">
                         <div class="block w-full tab-pane" id="overview-tab">
                            <div class="mt-2 space-y-8">
                                <table class="table" >
                                    <thead>
                                    
                                    </thead>
                                    <tbody>
                                    @foreach ($tickets as $item)
                                        <div style="display:flex; flex-direction: row; justify-content: space-between; ">
                                        <div class="ve" style="font-size:25px ">
                                        <p>{{$item->username}}</p>
                                        <p>{{$item->passenger_car_id}}</p> 
                                        <p>{{$item->total_price}}</p> 
                                        </div>
                                        <div class="ve1" style="font-size:20px">
                                            <p>{{$item->payment_method}}</p> 
                                        <p>{{$item->status}}</p>
                                        </div>
                                        </div>
                            @endforeach
                                    </tbody>
                                </table>
                            </div>

                    </div> 
                --}}



                {{-- <div class="">
                    <div class="hidden w-full tab-pane" id="settings-tab">
                       <div >
                           <table class="table" >
                               <thead>
                               
                               </thead>
                               <tbody>
                               @foreach ($tickets as $item)
                                   <div style="display:flex; flex-direction: row; justify-content: space-between; ">
                                   <div class="ve" style="font-size:25px ">
                                   <p>{{$item->username}}</p>
                                   <p>{{$item->passenger_car_id}}</p> 
                                   <p>{{$item->total_price}}</p> 
                                   </div>
                                   <div class="ve1" style="font-size:20px">
                                       <p>{{$item->payment_method}}</p> 
                                   <p>{{$item->status}}</p>
                                   </div>
                                   </div>
                       @endforeach
                               </tbody>
                           </table>
                       </div>

               </div> 
           </div>  
            </div>                                 --}}

    {{-- <div class="hidden w-full tab-pane" id="settings-tab">
        <div class="pt-8 space-x-8">
            <form action="#">
                <div>
                    <h5 class="mb-3 text-gray-900 fs-17 fw-semibold dark:text-gray-50">My Account</h5>
                    <div class="text-center">
                        <div class="relative mb-4">
                            <img src="assets/images/user/img-02.jpg" class="w-40 h-40 p-1 mx-auto border-2 rounded-full border-gray-100/50 dark:border-neutral-600" id="profile-img" alt="">
                            <div class="absolute w-8 h-8 leading-8 text-center rounded-full shadow-md bottom-2 right-[42%] z-40 bg-gray-50 dark:bg-neutral-700 dark:text-white">
                                <input id="profile-img-file-input" type="file" class="hidden" onchange="previewImg()">
                                <label for="profile-img-file-input" class="">
                                    <i class="uil uil-edit"></i>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <div class="grid grid-cols-12 gap-5">
                            <div class="col-span-12 lg:col-span-6">
                                <div class="mb-3">
                                    <label for="firstName" class="text-sm text-gray-900 dark:text-gray-50">First Name</label>
                                    <input type="text" class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600" id="firstName" value="Jansh">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-span-12 lg:col-span-6">
                                <div class="mb-3">
                                    <label for="lastName" class="text-sm text-gray-900 dark:text-gray-50">Last Name</label>
                                    <input type="text" class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600" id="lastName" value="Dickens">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-span-12 lg:col-span-6">
                                <div class="mb-3">
                                    <label for="choices-single-categories" class="text-sm text-gray-900 dark:text-gray-50">Account Type</label>
                                    <div class="mt-1">
                                        <select class="form-select" data-trigger
                                            name="choices-single-categories"
                                            id="choices-single-categories"
                                            aria-label="Default select example">
                                            <option value="4">Accounting</option>
                                            <option value="1">IT & Software</option>
                                            <option value="3">Marketing</option>
                                            <option value="5">Banking</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-span-12 lg:col-span-6">
                                <div class="mb-3">
                                    <label for="email" class="text-sm text-gray-900 dark:text-gray-50">Email</label>
                                    <input type="text" class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600" id="email" value="Jansh@gmail.com">
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <!--end account-->
                <div class="mt-4">
                    <h5 class="mb-3 font-semibold text-gray-900 text-17 dark:text-gray-50">Profile</h5>
                    <div class="grid grid-cols-12 gap-5">
                        <div class="col-span-12">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label dark:text-gray-300">Introduce Yourself</label>
                                <textarea class="w-full mt-1 text-sm rounded border-gray-100/50 dark:bg-transparent dark:border-neutral-600 dark:text-gray-300" id="exampleFormControlTextarea1" rows="5">Developer with over 5 years' experience working in both the public and private sectors. Diplomatic, personable, and adept at managing sensitive situations. Highly organized, self-motivated, and proficient with computers. Looking to boost students’ satisfactions scores for International University. Bachelor's degree in communications.</textarea>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-span-12 lg:col-span-6">
                            <div class="mb-3">
                                <label for="languages" class="text-sm text-gray-900 dark:text-gray-50">Languages</label>
                                <input type="text" class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600" id="languages" value="English, German, French">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-span-12 lg:col-span-6">
                            <div class="mb-3">
                                <label for="choices-single-location" class="text-sm text-gray-900 dark:text-gray-50">Location</label>
                                <div class="mt-1">
                                    <select class="form-select" data-trigger
                                        name="choices-single-location" id="choices-single-location"
                                        aria-label="Default select exam
                                        ple">
                                        <option value="ME">Montenegro</option>
                                        <option value="MS">Montserrat</option>
                                        <option value="MA">Morocco</option>
                                        <option value="MZ">Mozambique</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-span-12">
                            <div class="mb-3 ">
                                <div class="mb-3">
                                    <label for="formFileLg" class="inline-block mb-2 text-neutral-700 dark:text-neutral-200">Large file input example</label >
                                    <input class="relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded border border-gray-100/50 bg-clip-padding pr-3 py-[0.32rem] font-normal leading-[2.15] text-neutral-700 transition duration-300 ease-in-out file:mr-2 file:-my-[0.32rem] file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-gray-100/30 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                        id="formFileLg" type="file" />
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end profile-->
                <div class="mt-4">
                    <h5 class="mb-3 font-semibold text-gray-900 text-17 dark:text-gray-50">Social Media</h5>
                    <div class="grid grid-cols-12 gap-5">
                        <div class="col-span-12 lg:col-span-6">
                            <div class="mb-3">
                                <label for="facebook" class="text-sm text-gray-900 dark:text-gray-50">Facebook</label>
                                <input type="text" class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600" id="facebook" value="https://www.facebook.com/">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-span-12 lg:col-span-6">
                            <div class="mb-3">
                                <label for="twitter" class="text-sm text-gray-900 dark:text-gray-50">Twitter</label>
                                <input type="text" class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600" id="twitter" value="https://www.twitter.com/">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-span-12 lg:col-span-6">
                            <div class="mb-3">
                                <label for="linkedin" class="text-sm text-gray-900 dark:text-gray-50">Linkedin</label>
                                <input type="text" class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600" id="linkedin" value="https://www.linkedin.com/">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-span-12 lg:col-span-6">
                            <div class="mb-3">
                                <label for="whatsapp" class="text-sm text-gray-900 dark:text-gray-50">Whatsapp</label>
                                <input type="text" class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600" id="whatsapp" value="https://www.whatsapp.com/">
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end socia-media-->
                <div class="mt-4">
                    <h5 class="mb-3 font-semibold text-17 dark:text-gray-50">
                        Change Password
                    </h5>
                    <div class="grid grid-cols-12 gap-5">
                        <div class="col-span-12">
                            <div class="mb-3">
                                <label for="current-password-input" class="text-sm text-gray-900 dark:text-gray-50">Current
                                    password</label>
                                <input type="password" class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600" placeholder="Enter Current password" id="current-password-input">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-span-12 lg:col-span-6">
                            <div class="mb-3">
                                <label for="new-password-input" class="text-sm text-gray-900 dark:text-gray-50">New
                                    password</label>
                                <input type="password" class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600" placeholder="Enter new password" id="new-password-input">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-span-12 lg:col-span-6">
                            <div class="mb-3">
                                <label for="confirm-password-input" class="text-sm text-gray-900 dark:text-gray-50">Confirm Password</label>
                                <input type="password" class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600" placeholder="Confirm Password" id="confirm-password-input">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-span-12">
                            <div class="form-check">
                                <input class="align-middle rounded cursor-pointer focus:ring-0 focus:ring-offset-0 bg-gray-50 border-gray-100/50 checked:bg-violet-500 checked:border-transparent dark:bg-transparent dark:border-neutral-600 dark:checked:bg-violet-500 dark:checked:border-transparent" type="checkbox" value="" id="verification">
                                <label class="ml-2 align-middle dark:text-gray-300" for="verification">
                                    Enable Two-Step Verification via email
                                </label>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end Change-password-->
                <div class="mt-8 text-right">
                    <a href="javascript:void(0)" class="text-white btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 border-transparent focus:ring group-data-[theme-color=violet]:focus:ring-violet-500/20 group-data-[theme-color=sky]:focus:ring-sky-500/20 group-data-[theme-color=red]:focus:ring-red-500/20 group-data-[theme-color=green]:focus:ring-green-500/20 group-data-[theme-color=pink]:focus:ring-pink-500/20 group-data-[theme-color=blue]:focus:ring-blue-500/20">Update</a>
                </div>
            </form>
        </div>
    </div> --}}
    
            </section>
  
    </div>
</div>
  <!-- End grid -->
        {{-- <section class="relative py-16 overflow-hidden bg-zinc-700 dark:bg-neutral-900">
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
        </section> --}}
@endsection
