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
    @include('client.layout.partials.header')


    @yield('content')



    <!-- Footer Start -->
    @include('client.layout.partials.footer')
    <!-- end Footer -->
    <script>
        const infoUser = @json(auth()->user());
    const urlNotification = '{{route('notifications.loadMessage')}}';
    </script>
    @include('client.layout.partials.script')
    @yield('page-script')
</body>



</html>

