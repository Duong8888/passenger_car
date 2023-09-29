@extends('admin.layouts.master')
@section('content')
    @include('admin.layouts.notify-success')
    <form action="{{ route('admin.booking.update',['booking' => $booking->id]) }}" method="POST"
          enctype="multipart/form-data">
        @csrf
        <h1 class="ml-5 mb-3">Sửa booking</h1>

        @include('admin.bookings.form-fields')

        <button class="ml-3 ml-5 btn btn-primary" type="submit">Sửa</button>
        <button class="btn btn-primary ml-5 "><a style="text-decoration: none; color: white;"
                                                 href="{{route('admin.booking.index')}}">List Booking</a></button>
    </form>

@endsection

