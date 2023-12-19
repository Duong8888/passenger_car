@extends('admin.layouts.master')
@section('title', "Sửa tuyến đường")
@section('page-script')
<script>
    ClassicEditor
         .create(document.querySelector('#description'))
         .catch(error =>{
         })
 </script>
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
            <h4 class="header-title mt-0 mb-3">Route Edit</h4>
            <a href="{{ route('route.index') }}" class="btn btn-primary">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M11.354 4.646a.5.5 0 0 1 0 .708L7.707 8l3.647 3.646a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 0 1 .708 0z" />
              </svg>
              Back
            </a>
            <div class="table-responsive">

              <form action="{{ route('route.update', $model->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label class="form-label">Slug</label>
                    <input class="form-control" type="text" name="slug" value="{{ $model->slug }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="content" class="description" id="description">
                        {{$model->description}}
                    </textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Departure</label>
                    <input class="form-control" type="text" name="departure" value="{{ $model->departure }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Arrival</label>
                    <input class="form-control" type="text" name="arrival" value="{{ $model->arrival }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input class="form-control" type="text" name="price" value="{{ $model->price }}">
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