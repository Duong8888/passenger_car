@extends('admin.layouts.master')
@section('content')
    @include('admin.layouts.notify-success')
    <form class="needs-validation" action="{{ route('admin.booking.store') }}" method="POST"
          enctype="multipart/form-data">
        @csrf
        <h1 class="ml-5 mb-3">Quản lý booking</h1>

        @include('admin.bookings.form-fields')

        <button class="ml-3 ml-5 btn btn-primary" type="Submit">Thêm</button>
        <button type="button" class="btn btn-primary ml-5 "><a style="text-decoration: none; color: white;"
                                                 href="{{route('admin.booking.index')}}">List Booking</a></button>
    </form>
@endsection

