@extends('admin.layouts.master')
@section('content')
{{-- 
<form action="{{ route('route_user_add') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <h1 class="ml-5 mb-3">Quản lý người dùng</h1>
    
    <div class="mb-3 ml-5">  
        <label class="form-label">Tên người dùng</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3 ml-5">  
        <label class="form-label">Email</label>
        <input type="text" class="form-control" name="email">
    </div>

    <div class="mb-3 ml-5">  
        <label class="form-label">Số điện thoại</label>
        <input type="number" class="form-control" name="phone">
    </div>
   
    <button class="ml-3 ml-5 btn btn-primary" type="submit">Thêm</button> 
    <button  class="btn btn-primary ml-5 "><a style="text-decoration: none; color: white;" href="{{route('route_user_index')}}">List Users</a></button>
</form> --}}

<div class="card">
    <div class="card-body">
        <div class="dropdown float-end">
            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-dots-vertical"></i>
            </a>
                {{-- <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                </div> --}}
        </div>
      

        <div class="table-responsive">
            <table class="table mb-0">
                <form action="{{ route('route_adminmanagement_edit',['id'=>$users->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h1 class="ml-5 mb-3">Quản lý người dùng</h1>
                    
                    <div class="mb-3 ml-5">  
                        <label class="form-label">Tên người dùng</label>
                        <input type="text" class="form-control" value="{{$users->name}}" name="name">
                    </div>
                    <div class="mb-3 ml-5">  
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" value="{{$users->email}}" name="email">
                    </div>
                
                    <div class="mb-3 ml-5">  
                        <label class="form-label">Số điện thoại</label>
                        <input type="number"  class="form-control" name="phone" value="{{$users->phone}}">
                    </div>
                    <div class="mb-3 ml-5">  
                        <label for="example-select" class="form-label">Phân Quyền</label>
                        <select class="form-select" id="example-select" name="user_type" value="{{$users->user_type}}">
                            <option>Chọn quyền</option>
                            <option>Admin</option>
                            <option>Staff</option>
                        </select>
                    </div>
                   
                    <button class="ml-3 ml-5 btn btn-primary" type="submit">Sửa</button> 
                    <button  class="btn btn-primary ml-5 "><a style="text-decoration: none; color: white;" href="{{route('route_adminmanagement_index')}}">List Admin Management</a></button>
                </form>
            </table>
        </div>
    </div>

</div>

@endsection