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


      <div class="col-xl-8">
        <div class="card">
          <div class="card-body">
            <h4 class="header-title mt-0 mb-3">Services Update</h4>
            <div class="table-responsive">

              <form action="{{ route('service.update', $model->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                  <label for="name" class="form-label">Service Name</label>
                  <input type="text" class="form-control" id="name" name="sericename"  value="{{ $model->service_name }}">
                  @error('sericename')
                  <div class="alert alert-danger mt-1 mb-1" style="color: red;font-size: 12px;">{{ $message }}</div>
                  @enderror
                </div>
                <a href="{{ route('service.index') }}" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-arrow-left" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M11.354 4.646a.5.5 0 0 1 0 .708L7.707 8l3.647 3.646a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 0 1 .708 0z" />
                    </svg>
                    Back
                  </a>
                <button type="submit" class="btn btn-primary">Update</button>
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
