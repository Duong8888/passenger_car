@extends('admin.layouts.master')
@section('title', 'Sửa thông tin đăng kí nhà xe')
@section('content')

    <div class="content">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 style=" font-size: 40px;font-weight: bolder " class="header-title">Sửa thông tin đăng kí nhà xe</h4>
                            <form action="{{url('admin/contact/update-ting',[$users->id]) }}" method="POST"  enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $users->id }}">
                                <br>
                                <div class="form-group">
                                    <label for="user_name">Họ và Tên</label>
                                    <br>
                                    <input type="text" class="form-control" id="user_name" name="user_name" value="{{ $users->user_name }}">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="province">Địa Chỉ</label>
                                    <br>
                                    <input type="text" class="form-control" id="province" name="province" value="{{ $users->province }}">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="phone">Số Điện Thoại</label>
                                    <br>
                                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $users->phone }}">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <br>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ $users->email }}">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="number_card">Số chứng minh nhân dân</label>
                                    <br>
                                    <input type="text" class="form-control" id="number_card" name="number_card" value="{{ $users->number_card }}">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="rental_code">Mã số thuế</label>
                                    <br>
                                    <input type="text" class="form-control" id="rental_code" name="rental_code" value="{{ $users->rental_code }}">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="rental_code">Tên hãng xe</label>
                                    <br>
                                    <input type="text" class="form-control" id="passengerCar_name" name="passengerCar_name" value="{{ $users->passengerCar_name }}">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="images">Hình ảnh chứng thực</label>
                                    <br>
                                    @if($users->images)
                                        @foreach(json_decode($users->images) as $image)
                                            <img src="{{ $image->image }}" alt="Chứng thực">
                                        @endforeach
                                    @endif
                                </div>


                                <button type="submit" class="btn btn-primary">Cập nhật</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
