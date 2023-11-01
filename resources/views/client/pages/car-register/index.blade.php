@extends('client.layout.master')

@section('content')
    <!-- Start grid -->
    <section class="pt-16">
        <div class="container mx-auto">
            <div class="grid items-center grid-cols-8 mt-5 lg:gap-8 gap-y-8">
                <div class="col-span-12 lg:col-span-6 center-content">
                    <div class="mt-4">
                        <h3 class="mb-2 text-3xl text-gray-900 dark:text-white">Get in touch</h3>
                        <p class="text-gray-500 dark:text-gray-300">Start working with Jobcy that can provide everything you need to generate
                            awareness, drive traffic, connect.</p>
                        <form method="post" onsubmit="return validateForm()" class="mt-4 contact-form" name="myForm" id="myForm">
                            <span id="error-msg"></span>
                            <div class="grid grid-cols-12 gap-5">
                                <div class="col-span-12">
                                    <div class="mb-3">
                                        <label for="nameInput" class="text-gray-900 dark:text-gray-50">Name</label>
                                        <input type="text" name="name" id="name" class="w-full mt-1 rounded border-gray-100/50 placeholder:text-sm placeholder:text-gray-400 dark:bg-transparent dark:border-gray-800 focus:ring-0 focus:ring-offset-0 dark:text-gray-200" placeholder="Enter your name">
                                    </div>
                                </div><!--end col-->
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="mb-3">
                                        <label for="emailInput" class="text-gray-900 dark:text-gray-50">Email</label>
                                        <input type="email" class="w-full mt-1 rounded border-gray-100/50 placeholder:text-sm placeholder:text-gray-400 dark:bg-transparent dark:border-gray-800 focus:ring-0 focus:ring-offset-0 dark:text-gray-200" id="emaiol" name="email" placeholder="Enter your email">
                                    </div>
                                </div><!--end col-->
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="mb-3">
                                        <label for="subjectInput" class="text-gray-900 dark:text-gray-50">Subject</label>
                                        <input type="text" class="w-full mt-1 rounded border-gray-100/50 placeholder:text-sm placeholder:text-gray-400 dark:bg-transparent dark:border-gray-800 focus:ring-0 focus:ring-offset-0 dark:text-gray-200" id="subjectInput" name="subject" placeholder="Enter your subject">
                                    </div>
                                </div><!--end col-->
                                <div class="col-span-12">
                                    <div class="mb-3">
                                        <label for="meassageInput" class="text-gray-900 dark:text-gray-50">Your Message</label>
                                        <textarea class="w-full mt-1 rounded border-gray-100/50 placeholder:text-sm placeholder:text-gray-400 dark:bg-transparent dark:border-gray-800 focus:ring-0 focus:ring-offset-0 dark:text-gray-200" id="meassageInput" placeholder="Enter your message" name="comments" rows="3"></textarea>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                            <div class="text-right">
                                <button type="submit" id="submit" name="submit" class="text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500"> Send Message <i class="uil uil-message ms-1"></i></button>
                            </div>
                        </form><!--end form-->
                    </div>
                </div><!--end col-->
            </div>
        </div>

    </section>
    <!-- End grid -->

    <script src="{{asset('admin/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

@endsection
@section('page-script')
    <script src="{{asset('client/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

    <script src="{{asset('client/js/pages/job-list.init.js')}}"></script>

    <script src="{{asset('client/js/pages/dropdown%26modal.init.js')}}"></script>

@endsection
