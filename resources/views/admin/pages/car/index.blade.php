@extends('admin.layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex mb-4 justify-content-between">
                            <h4 class="mt-0 header-title">{{$title}}</h4>
                        </div>

                        <button type="button" class="btn mb-2 btn-success waves-effect waves-light"
                                data-bs-toggle="modal"
                                data-bs-target="#con-close-modal">Thêm mới xe
                        </button>

                        <!-- /.modal -->
                        <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog modal-full-width modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">{{$titleCreate}}</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6 bg-black">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="field-1" class="form-label">Điểm đi</label>
                                                        <select class="form-select" data-trigger name="choices-single-location" id="choices-single-location" aria-label="Default select example">
                                                            <option value="AF">Afghanistan</option>
                                                            <option value="AX">&Aring;land Islands</option>
                                                            <option value="AL">Albania</option>
                                                            <option value="DZ">Algeria</option>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 bg-blue">
                                                qqqqq
                                            </div>




                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="field-1" class="form-label">Điểm đến</label>
                                                    <select class="form-select " data-trigger name="choices-single-categories" id="choices-single-categories" aria-label="Default select example">
                                                        <option value="4">Accounting</option>
                                                        <option value="1">IT & Software</option>
                                                        <option value="3">Marketing</option>
                                                        <option value="5">Banking</option>
                                                    </select>

                                                </div>
                                            </div>



                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="field-1" class="form-label">Biển số</label>
                                                    <input type="text" class="form-control" id="field-1"
                                                           placeholder="John">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="field-1" class="form-label">Hello</label>
                                                    <input type="text" class="form-control" id="field-1"
                                                           placeholder="John">
                                                </div>
                                            </div>


                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="field-2" class="form-label">Tuyến đường</label>
                                                    <input type="text" class="form-control" id="field-2"
                                                           placeholder="Doe">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="field-1" class="form-label">Name</label>
                                                    <input type="text" class="form-control" id="field-1"
                                                           placeholder="John">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="field-2" class="form-label">Surname</label>
                                                    <input type="text" class="form-control" id="field-2"
                                                           placeholder="Doe">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="field-3" class="form-label">Address</label>
                                                    <input type="text" class="form-control" id="field-3"
                                                           placeholder="Address">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div>
                                                    <label class="form-label">Giờ Khởi hành</label>
                                                    <div class="input-group clockpicker" data-placement="top"
                                                         data-align="top" data-autoclose="true">
                                                        <input type="text" class="form-control" value="13:14">
                                                        <span class="input-group-text"><i
                                                                class="mdi mdi-clock-outline"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div>
                                                    <label class="form-label">Giờ đến</label>
                                                    <div class="input-group clockpicker" data-placement="top"
                                                         data-align="top" data-autoclose="true">
                                                        <input type="text" class="form-control" value="13:14">
                                                        <span class="input-group-text"><i
                                                                class="mdi mdi-clock-outline"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="field-6" class="form-label">Zip</label>
                                                    <input type="text" class="form-control" id="field-6"
                                                           placeholder="123456">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div id="snow-editor" style="height: 300px;"
                                                     class="ql-container ql-snow">
                                                    <div class="ql-editor" data-gramm="false" contenteditable="true">
                                                        <!-- content Snow-editor--></div>
                                                    <div class="ql-clipboard" contenteditable="true"
                                                         tabindex="-1"></div>
                                                    <div class="ql-tooltip ql-hidden"><a class="ql-preview"
                                                                                         rel="noopener noreferrer"
                                                                                         target="_blank"
                                                                                         href="about:blank"></a><input
                                                            type="text" data-formula="e=mc^2"
                                                            data-link="https://quilljs.com" data-video="Embed URL"><a
                                                            class="ql-action"></a><a class="ql-remove"></a></div>
                                                </div> <!-- end Snow-editor-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary waves-effect"
                                                data-bs-dismiss="modal">Đóng
                                        </button>
                                        <button type="button" class="btn btn-info waves-effect waves-light">Lưu thay
                                            đôi
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.modal -->

                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead>
                                <tr>
                                    @foreach($colums as $key => $value)
                                        <th>{{$value}}</th>
                                    @endforeach
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $key => $value)
                                    <tr>
                                        @foreach($colums as $keyColum => $valueColum)
                                            @if($keyColum === 'action')
                                                <td>
                                                    <div class="btn-group mb-2">
                                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">Action <i
                                                                class="mdi mdi-chevron-down"></i></button>
                                                        <div class="dropdown-menu" style="">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            @elseif($keyColum == 'user')
                                                <td>{{$value->$keyColum->name}}</td>
                                            @elseif($keyColum == 'route')
                                                <td>{{$value->$keyColum->departure}}
                                                    - {{$value->$keyColum->arrival}}</td>
                                            @else
                                                <td>{{$value->$keyColum}}</td>
                                            @endif
                                        @endforeach
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="mt-4 d-flex justify-content-end">
                                {{ $data->links() }}
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div> <!-- end row -->

    </div>
@endsection
@section('page-style')

    <!-- Plugins css -->
    <link href="{{asset('admin/libs/spectrum-colorpicker2/spectrum.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/libs/clockpicker/bootstrap-clockpicker.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('admin/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <!-- Plugins css -->
    <link href="{{asset('admin/libs/quill/quill.core.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/libs/quill/quill.bubble.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/libs/quill/quill.snow.css')}}" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="{{asset('client/libs/choices.js/public/assets/styles/choices.min.css')}}">


@endsection

@section('page-script')
    <!-- Plugins js-->
    <script src="{{asset('admin/libs/flatpickr/flatpickr.min.js')}}"></script>
    <script src="{{asset('admin/libs/spectrum-colorpicker2/spectrum.min.js')}}"></script>
    <script src="{{asset('admin/libs/clockpicker/bootstrap-clockpicker.min.js')}}"></script>
    <script src="{{asset('admin/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>

    <!-- Plugins js -->
    <script src="{{asset('admin/libs/quill/quill.min.js')}}"></script>

    <!-- Init js-->
    <script src="{{asset('admin/js/pages/form-quilljs.init.js')}}"></script>

    <!-- Init js-->
    <script src="{{asset('admin/js/pages/form-pickers.init.js')}}"></script>

    <script src="{{asset('client/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>
    <script src="{{asset('client/js/pages/job-list.init.js')}}"></script>
    <script src="{{asset('client/js/pages/dropdown%26modal.init.js')}}"></script>
@endsection



