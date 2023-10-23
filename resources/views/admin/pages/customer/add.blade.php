@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if (session('msgSuccess'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            {{ session('msgSuccess') }}
                        </div>
                    @endif
                    @if (session('msgError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            {{ session('msgError') }}
                        </div>
                    @endif
                    <div class="d-flex justify-content-between align-items-center mb-3  ">

                        <h5 class="mt-0">Tạo mới </h5>
                        <a href="{{ route('admin.customer.index') }}" class="btn btn-primary">Tất cả khách hàng</a>
                    </div>

                    <form action="{{ route('admin.customer.store') }}" method="POST">
                        @csrf
                        <div class="row mb-2">
                            <div class="col-lg-12 mb-3">
                                <label for="name" class="form-label">Họ và tên:<span
                                        class="text-danger">*</span></label>
                                <input type="text " id="name" name="name" value="{{ old('name') }}"
                                    class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-lg-6 mb-2   ">
                                <label for="phone" class="form-label">Số điện thoại:<span
                                        class="text-danger">*</span></label>
                                <input type="text " id="phone" name="phone" value="{{ old('phone') }}"
                                    class="form-control @error('phone') is-invalid @enderror">
                                @error('phone')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-lg-6 mb-2   ">
                                <label for="email" class="form-label">Email:<span class="text-danger">*</span></label>
                                <input type="text " id="email" name="email" value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-lg-6 mb-2   ">
                                <label for="departure_point" class="form-label">Điểm suất phát:<span
                                        class="text-danger">*</span></label>
                                <input type="text " id="departure_point" name="departure_point"
                                    value="{{ old('departure_point') }}"
                                    class="form-control @error('departure_point') is-invalid @enderror">
                                @error('departure_point')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-lg-6 mb-2   ">
                                <label for="destination" class="form-label">Điểm đến:<span
                                        class="text-danger">*</span></label>
                                <input type="text " id="destination" name="destination" value="{{ old('destination') }}"
                                    class="form-control @error('destination') is-invalid @enderror">
                                @error('destination')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                        <div class="d-flex justify-content-end">

                            <button type="submit" class="btn btn-primary">Tạo mới</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
