@extends('admin.layouts.master')
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
                           <td>Tên nhà xe</td>
                           <td>Khu vực</td>
                           <td>Trạng thái</td>
                       </tr>
                    </thead>
                    <tbody>
                       @foreach ($users as $item)
                        <tr>
                           <td>{{$item->id}}</td>
                           <td>{{$item->fullName}}</td>
                           <td>{{$item->email}}</td>
                           <td>{{$item->phone}}</td>
                           <td>{{$item->passengerCar_name}}</td>
                           <td>{{$item->province}}</td>

                           <td>
                            @if($item->status == 'Chưa xử lý')
                            <form  action="{{route('admin.route_contact_edit',$item->id)}}" method="post" class="js-update-contact" class="btn btn-primary ml-5 " >
                                @csrf
                                <select class="js-select-status-contact status-ChuaXuLy" style="background-color: #FF5733; color: #FFFFFF;" name="status" class="js-select-status-contact">


                                    <option class="form-control" style="background-color: #FF5733; color: #FFFFFF;" @if($item->status == 'Chưa xử lý') selected @endif
                                        value="Chưa xử lý">
                                            Chưa xử lý
                                    </option>
                                    <option class="form-control" style="background-color: #FFC300; color: #000000;" @if($item->status == 'Đang xử lý') selected @endif value="Đang xử lý">
                                            Đang xử lý
                                    </option>
                                    <option class="form-control" style="background-color: #00FF40; color: #000000; " @if($item->status == 'Đã xử lý') selected @endif value="Đã xử lý">
                                            Đã xử lý
                                    </option>
                            </select>

                            </form>
                            @elseif($item->status == 'Đang xử lý')
                            <form action="{{route('admin.route_contact_edit',$item->id)}}" method="post" class="js-update-contact">
                                @csrf
                                <select style="background-color: #FFC300; color: #000000;" name="status" class="js-select-status-contact">


                                    <option class="form-control" style="background-color: #FF5733; color: #FFFFFF;" @if($item->status == 'Chưa xử lý') selected @endif
                                        value="Chưa xử lý">
                                            Chưa xử lý
                                    </option>
                                    <option class="form-control" style="background-color: #FFC300; color: #000000;" @if($item->status == 'Đang xử lý') selected @endif value="Đang xử lý">
                                            Đang xử lý
                                    </option>
                                    <option class="form-control" style="background-color: #00FF40; color: #000000; " @if($item->status == 'Đã xử lý') selected @endif value="Đã xử lý">
                                            Đã xử lý
                                    </option>
                            </select>

                            </form>
                            @else
                            <form action="{{route('admin.route_contact_edit',$item->id)}}" method="post" class="js-update-contact" >
                                @csrf
                                <select style="background-color: #00FF40; color: #000000;" name="status" class="js-select-status-contact">


                                    <option class="form-control" style="background-color: #FF5733; color: #FFFFFF;" @if($item->status == 'Chưa xử lý') selected @endif
                                        value="Chưa xử lý">
                                            Chưa xử lý
                                    </option>
                                    <option class="form-control" style="background-color: #FFC300; color: #000000;" @if($item->status == 'Đang xử lý') selected @endif value="Đang xử lý">
                                            Đang xử lý
                                    </option>
                                    <option class="form-control" style="background-color: #00FF40; color: #000000; " @if($item->status == 'Đã xử lý') selected @endif value="Đã xử lý">
                                            Đã xử lý
                                    </option>
                            </select>

                            </form>
                            @endif

                            </td>

                           </tr>
             @endforeach
                    </tbody>
                </table>
                <!-- <button  class="btn btn-primary ml-5 "><a style="text-decoration: none; color: white;" href="{{route('admin.route_staff_add')}}">New Product</a></button> -->
            </div>
        </div>

    </div>



@endsection
