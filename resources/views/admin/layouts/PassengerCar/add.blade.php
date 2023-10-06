@extends('admin.layouts.master')
@section('content')

<form action="{{ route('route_passengerCar_add') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <h1 class="ml-5 mb-3">Quản lý nhà xe</h1>
    
    <div class="mb-3 ml-5">  
        <label class="form-label">Biển số xe</label>
        <input type="text" class="form-control" name="license_plate">
    </div>
    <div class="mb-3 ml-5">  
        <label class="form-label">Số chỗ ngồi</label>
        <input type="text" class="form-control" name="capacity">
    </div>

    <div class="mb-3 ml-5">  
        <label class="form-label">Mô tả</label>
        <input type="text" class="form-control" name="description">
    </div>

    <div class="mb-3 ml-5">  
        <label for="example-select" class="form-label">Transport Unit Id</label>
        <select class="form-select" id="example-select" name="transport_unit_id">
            <option>Chọn Id</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>

    <div class="mb-3 ml-5">  
        <label for="example-select" class="form-label">Route Id</label>
        <select class="form-select" id="example-select" name="route_id">
            <option>Chọn Id</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>

   
    <button class="ml-3 ml-5 btn btn-primary" type="submit">Thêm</button> 
    <button  class="btn btn-primary ml-5 "><a style="text-decoration: none; color: white;" href="{{route('route_passengerCar_index')}}">List Passenger Car</a></button>
</form>



@endsection


