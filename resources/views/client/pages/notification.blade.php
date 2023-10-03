@extends('client.layout.master')
@section('content')
    <section
        class="relative py-64 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 group-data-[mode=dark]:bg-neutral-900 ">
        <div class="inset-0 absolute bg-[url('../images/home/img-01.html')] bg-center"></div>
    </section>

        <button class="btn btn-success send" type="button">Send</button>
@endsection
