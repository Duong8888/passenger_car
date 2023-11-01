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

                        <h5 class="mt-0">Chỉnh sửa </h5>
                        <a href="{{ route('admin.revenue.index') }}" class="btn btn-primary">Thống kê doanh thu</a>
                    </div>
                    
                    <form action="{{ route('admin.revenue.update', $revenue->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row mb-2">
                            <div class="col-lg-6 mb-3">
                                <label for="name" class="form-label">Product name:<span
                                        class="text-danger">*</span></label>
                                <input type="text " id="name" name="name"
                                    value="{{ old('name') ?? $revenue->name }}" placeholder="Ticket, Accessary...v.v"
                                    class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-lg-6 mb-2   ">
                                <label for="customer_name" class="form-label">Customer name:<span
                                        class="text-danger">*</span></label>
                                <input type="text " id="customer_name" name="customer_name"
                                    value="{{ old('customer_name') ?? $revenue->customer_name }}"
                                    class="form-control @error('customer_name') is-invalid @enderror">
                                @error('customer_name')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-lg-6 mb-2   ">
                                <label for="price" class="form-label">Price:<span class="text-danger">*</span></label>
                                <input type="text " id="price" name="price"
                                    value="{{ old('price') ?? $revenue->price }}"
                                    class="form-control @error('price') is-invalid @enderror">
                                @error('price')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-lg-6 mb-2   ">
                                <label for="created_at" class="form-label">Created_at:<span
                                        class="text-danger">*</span></label>
                                <input type="date" id="created_at" name="created_at"
                                    value="{{ explode(' ', $revenue->created_at)[0] ?? date('Y-m-d') }}"
                                    class="form-control @error('created_at') is-invalid @enderror">
                                @error('created_at')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">

                            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
