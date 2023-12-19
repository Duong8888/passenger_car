@extends('admin.layouts.master')
@section("title", "Danh sách nhà xe")
@section('content')

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
                    <thead>
                       <tr>
                           <th>Id</th>
                           <th>Name</th>
                           <th>Email</th>
                           <td>Phone</td>
                           <td>Chức vụ</td>
                           <td>Action</td>
                       </tr>
                    </thead>
                    <tbody>
                       @foreach ($users as $item)
                       @if($item->user_type == 'staff')
                        <tr>
                           <td>{{$item->id}}</td>
                           <td>{{$item->name}}</td>
                           <td>{{$item->email}}</td>
                           <td>{{$item->phone}}</td>
                           <td>Nhà xe</td>
                           <td>
                               <a class="btn btn-danger" href="{{route('admin.route_staff_edit',['id'=>$item->id])}}">Sửa</a>
                               <a class="btn btn-primary" href="{{route('admin.route_staff_delete',['id'=>$item->id])}}">Xóa</a>
                           </td>
                           </tr>
                           @endif
             @endforeach
                    </tbody>
                </table>
                {{-- <button  class="btn btn-primary ml-5 mt-3"><a style="text-decoration: none; color: white;" href="{{route('admin.route_staff_add')}}">Thêm nhà xe</a></button> --}}
            </div>
        </div>

    </div>


@endsection
