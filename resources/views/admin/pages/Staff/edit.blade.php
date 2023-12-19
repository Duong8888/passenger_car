@extends('admin.layouts.master')
@section('content')

<form action="{{ route('admin.route_staff_edit',['id'=>$users->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <h1 class="ml-5 mb-3">Sửa nhà xe</h1>
    
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