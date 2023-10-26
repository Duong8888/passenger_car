@extends('admin.layouts.master')

@section('page-script')
    <!--Morris Chart-->
    <script src="admin/libs/morris.js06/morris.min.js"></script>
    <script src="admin/libs/raphael/raphael.min.js"></script>

    <!-- Dashboar init js-->
    <script src="admin/js/pages/dashboard.init.js"></script>

    <script src="{{asset('client/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

    <script src="{{asset('client/js/pages/job-list.init.js')}}"></script>
    <script type="module" src="{{asset('admin/js/custom/route.js')}}"></script>
@endsection

@section('page-style')
    <link rel="stylesheet" href="{{asset('client/libs/choices.js/public/assets/styles/choices.min.css')}}">
@endsection

@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-3">{{$title}}</h4>
                            <button id="modal-btn" type="button" class="btn mb-2 btn-success waves-effect waves-light"
                                    data-bs-toggle="modal" data-bs-target="#con-close-modal">Thêm tuyến đường
                            </button>


                            <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog"
                                 aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <form id="form-main" class="modal-dialog"
                                      method="POST"
                                      action="{{route('route.store')}}" >
                                    @csrf
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">{{$titleCreate}}</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <label for="field-1" class="form-label">Tuyến đường</label>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <div class="mt-3 filter-search-form mt-lg-0">
                                                            <i class="uil uil-clipboard-notes"></i>
                                                            <select class="form-select" data-trigger
                                                                    name="route-departure"
                                                                    id="choices-single-categories"
                                                                    aria-label="Default select example">
                                                                @foreach($dataRoute as $key => $value)
                                                                    <option value="{{$value->name}}">{{$value->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mt-3 filter-search-form mt-md-0 filter-border">
                                                        <i class="uil uil-map-marker"></i>
                                                        <select class="form-select" data-trigger
                                                                name="route-arrival"
                                                                id="choices-single-location"
                                                                aria-label="Default select example">
                                                            @foreach($dataRoute as $key => $value)
                                                                <option value="{{$value->name}}">{{$value->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="field-2" class="form-label">Điểm đón *</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="field-2" class="form-label">Điểm trả *</label>
                                                </div>
                                            </div>
                                            <div class="row show-item">
                                                <div class="col-md-6 col-departure">
                                                    <div class="mb-3 d-flex">
                                                        <input type="text" name="departure[]" class="form-control"
                                                               id="example-number"
                                                               placeholder="Đại học công nghệp ...">
                                                        <button type="button" class="close btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></button>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-arrival">
                                                    <div class="mb-3 d-flex">
                                                        <input type="text" name="arrival[]" class="form-control"
                                                               id="example-number"
                                                               placeholder="Hà Đông ...">
                                                        <button type="button" class="close btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button type="button"
                                                            class=" btn btn-success btn-departure waves-effect waves-light w-100"><i
                                                            class=" fas fa-plus-circle"></i></button>
                                                </div>
                                                <div class="col-md-6">
                                                    <button type="button"
                                                            class="btn btn-success btn-arrival waves-effect waves-light w-100"><i
                                                            class=" fas fa-plus-circle"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary waves-effect"
                                                    data-bs-dismiss="modal">Đóng
                                            </button>
                                            <button type="submit" id="btn-main"
                                                    class="btn btn-info waves-effect waves-light">Lưu
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- /.modal -->


                            <div class="table-responsive">
                                <table class="table table-bordered mb-0">
                                    <thead>
                                    <tr>
                                        <th>Điểm đầu</th>
                                        <th>Điểm cuối</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    @foreach ($data as $route)
                                        <tbody>
                                        <tr>
                                            <td>{{ $route->departure }}</td>
                                            <td>{{ $route->arrival }}</td>
                                            <td style="display: flex;">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                        Action <i class="mdi mdi-chevron-down"></i>
                                                    </button>
                                                    <div class="dropdown-menu" style="">
                                                        <a class="dropdown-item btn-update" id="1" href="#">Thông
                                                            tin</a>
                                                        <a class="dropdown-item btn-update" id="1" href="#">Sửa</a>
                                                        <a class="dropdown-item delete"
                                                           data-action="http://127.0.0.1:8000/admin/car/delete/1"
                                                           href="#">Xóa</a>
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                                <div class="float-end mt-4">
                                    {{ $data->links() }}
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- end col -->

            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->
@endsection
