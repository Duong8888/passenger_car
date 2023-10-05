<!DOCTYPE html>
<html lang="en" dir="ltr" data-mode="light" class="scroll-smooths group" data-theme-color="violet">

<!-- Mirrored from themesdesign.in/jobcy-tailwind/layout/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 13:45:12 GMT -->
<head>
    <meta charset="utf-8" />
    <title>index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Tailwind Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="" name="Themesbrand" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{csrf_token()}}">

    @include('client.layout.partials.style')
    {{-- @yield('page-style') --}}
</head>


<body class="bg-white dark:bg-neutral-800">
@include('client.layout.partials.header')


@yield('content')



<!-- Footer Start -->
@include('client.layout.partials.footer')
<!-- end Footer -->
@include('client.layout.partials.script')
@yield('page-script')
</body>

<!-- Mirrored from themesdesign.in/jobcy-tailwind/layout/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 13:45:12 GMT -->
</html>
