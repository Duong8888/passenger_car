@extends('admin.layouts.master')
@section('title', "Sửa nhà xe")
@section('content')

<form action="{{ route('admin.route_staff_edit',['id'=>$users->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <h1 class="ml-5 mb-3">Sửa thôn tin nhà xe</h1>
    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-1 mb-1" style="color: #004080; background-color: #cce5ff; font-size: 12px;">{{ $message }}</div>
    @endif
    <div class="mb-3 ml-5">  
        <label class="form-label">Tên nhà xe</label>
        <input type="text" class="form-control" value="{{$users->name}}" name="name">
    </div>
    <div class="mb-3 ml-5">  
        <label class="form-label">Email</label>
        <input  type="text" value="{{$users->email}}" class="form-control" name="email">
    </div>

    <div class="mb-3 ml-5">  
        <label class="form-label">Số điện thoại</label>
        <input type="number"value="{{$users->phone}}" class="form-control" name="phone">
    </div>
   
    <button class="ml-3 ml-5 btn btn-primary" type="submit">Sửa</button> 
    <button  class="btn btn-primary ml-5 "><a style="text-decoration: none; color: white;" href="{{route('admin.route_staff_index')}}">quay lại</a></button>
</form>



@endsection