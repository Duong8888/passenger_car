@extends('admin.layouts.master')
@section('content')
    @include('admin.layouts.notify-success')
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <td>Phone</td>
            <td>Action</td>
        </tr>
        <tbody>
        @foreach ($bookingUsers as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->phone}}</td>
                <td>
                    <a class="btn btn-danger" href="{{route('admin.booking.edit', ['booking' => $item->id])}}">Sửa</a>
                    <a class="btn btn-primary"
                       href="{{route('admin.booking.delete', ['booking' => $item->id])}}">Xóa</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <button class="btn btn-primary ml-5 "><a style="text-decoration: none; color: white;"
                                             href="{{route('admin.booking.add')}}">New Booking</a></button>
@endsection
