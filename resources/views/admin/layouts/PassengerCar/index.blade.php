
@extends('admin.layouts.master')
@section('content')
  
    <div class="card">
        <div class="card-body">
            <div class="dropdown float-end">
                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-dots-vertical"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                </div>
            </div>
          

            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                   <tr>
        <th>Id</th>
        <th>License plate</th>
        <th>Capacity</th>
        <td>Description</td>
        <td>User id</td>
        <td>Route id</td>
        <td>Action</td>
    </tr>
                    </thead>
                    <tbody>
                        @foreach ($passenger_cars as $item)
                     <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->license_plate}}</td>
            <td>{{$item->capacity}}</td>
            <td>{{$item->description}}</td>
            <td>{{$item->user_id}}</td>
            <td>{{$item->route_id}}</td>
            <td>
                <a class="btn btn-danger" href="{{route('route_passengerCar_edit',['id'=>$item->id])}}">Sửa</a>
                <a class="btn btn-primary" href="{{route('route_user_delete',['id'=>$item->id])}}">Xóa</a>
            </td>
            </tr>  
             @endforeach
                    </tbody>
                </table>
                <button  class="btn btn-primary ml-5 "><a style="text-decoration: none; color: white;" href="{{route('route_passengerCar_add')}}">New Product</a></button>
            </div>
        </div>

    </div>
   

@endsection
 