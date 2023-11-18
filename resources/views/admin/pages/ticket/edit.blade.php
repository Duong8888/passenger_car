@extends('admin.layouts.master')

@section('page-script')
<!--Morris Chart-->
<script src="admin/libs/morris.js06/morris.min.js"></script>
<script src="admin/libs/raphael/raphael.min.js"></script>

<!-- Dashboar init js-->
<script src="admin/js/pages/dashboard.init.js"></script>
@endsection

@section('content')
<div class="content">

  <!-- Start Content-->
  <div class="container-fluid">

    <div class="row">


      <div class="col-xl-12">
        <div class="card">
          <div class="card-body">
            <h4 class="header-title mt-0 mb-3">Tickets Edit</h4>
            <a href="{{ route('admin.ticket.index') }}" class="btn btn-primary">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M11.354 4.646a.5.5 0 0 1 0 .708L7.707 8l3.647 3.646a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 0 1 .708 0z" />
              </svg>
              Back
            </a>
            <div class="table-responsive">

              <form action="{{ route('admin.ticket.update', $model->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                  <label for="name" class="form-label">Username</label>
                  <input type="text" class="form-control" id="name" name="username" value="{{ $model->username }}">
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label">Phone</label>
                  <input type="text" class="form-control" id="phone" name="phone" value="{{ $model->phone }}"> 
                </div>
                <div class="mb-3">
                  <label class="form-label">Status</label>
                 
                  <select name="status" class="form-control">
                    @if ($model->status == 0)
                        <option value="0" selected>Cancel</option>
                    @elseif ($model->status == 1)
                        <option value="1" selected>Pending</option>
                    @elseif ($model->status == 2)
                        <option value="2" selected>Success</option>
                    @endif
                    @if ($model->status != 0)
                        <option value="0">Cancel</option>
                    @endif
                    @if ($model->status != 1)
                        <option value="1">Pending</option>
                    @endif
                    @if ($model->status != 2)
                        <option value="2">Success</option>
                    @endif
                </select>
                </div>
                <div class="mb-3">
                  <label for="quantity" class="form-label">Quantity</label>
                  <input type="text" class="form-control" id="quantity" name="quantity" value="{{ $model->quantity }}">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" value="{{ $model->email }}">
                </div>
                <div class="mb-3">
                  <label for="price" class="form-label">Price</label>
                  <input type="text" class="form-control" id="price" name="total_price" value="{{ $model->total_price }}">
                </div>
                <div class="mb-3">
                  <label class="form-label">Payment Method</label>
                  <select name="payment_method" class="form-control">
                    @if ($model->payment_method == "Đã Thanh toán VNPAY")
                        <option value="Đã Thanh toán VNPAY" selected>Đã Thanh toán VNPAY</option>
                        <option value="thanh toán tại nhà xe">thanh toán tại nhà xe</option>
                    @elseif ($model->payment_method == "thanh toán tại nhà xe")
                        <option value="thanh toán tại nhà xe" selected>thanh toán tại nhà xe</option>
                        <option value="Đã Thanh toán VNPAY">Đã Thanh toán VNPAY</option>
                    @else
                        <option value="Đã Thanh toán VNPAY">Đã Thanh toán VNPAY</option>
                        <option value="thanh toán tại nhà xe">thanh toán tại nhà xe</option>
                    @endif
                </select>
                 
                </div>
               
                <div class="mb-3">
                  <label class="form-label">Passenger</label>
                  <select name="passenger_car_id" class="form-control">
                    <option value="{{ $passengerCar_relationship->id }}">{{ $passengerCar_relationship->license_plate }}</option>
                    @foreach ($passengerCar as $key => $data)
                    <option value="{{ $key + 1 }}">{{ $data->license_plate }}</option>
                    @endforeach
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Save Changed</button>
              </form>
            </div>
          </div>
        </div>

      </div><!-- end col -->

    </div>
    <!-- end row -->

  </div> <!-- container -->

</div> <!-- content -->
@endsection