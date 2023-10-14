@extends('admin.layouts.master')



@section('content')
<div class="content">
  <!-- Start Content-->
  <div class="container-fluid">

    <div class="row">


      <div class="col-xl-12">
        <div class="card">
          <div class="card-body">
            <h4 class="header-title mt-0 mb-3">Đang thêm xe</h4>
            {{-- <a href="{{ route('stop.index') }}" class="btn btn-primary">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M11.354 4.646a.5.5 0 0 1 0 .708L7.707 8l3.647 3.646a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 0 1 .708 0z" />
              </svg>
              Back
            </a> --}}
            <div class="table-responsive">

              <form action="{{ route('stop.store') }}" method="post" enctype="multipart/form-data" class="row">
                @csrf
                <div class="col-12">
                  <div class="mb-3">
                    <label for="name" class="form-label">Tên đường</label>
                    <input type="text" class="form-control" id="name" name="stopname">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Điểm đón hay trả</label>
                    <select name="stoptype" class="form-control">
                      <option>Thuộc loại nào ?</option>
                      @foreach (json_decode('{"0":"Điểm đón","1":"Điểm trả"}', true) as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Tuyến đường</label>
                    <select name="stoproute" class="form-control departure">
                      <option>Choosen Departure</option>
                      @foreach ($route as $data)
                        @if (!in_array($data->departure, $uniqueDepartures))
                        <option value="{{ $data->departure }}">{{ $data->departure }}</option>
                        @endif
                      @endforeach
                    </select>
                  </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
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

