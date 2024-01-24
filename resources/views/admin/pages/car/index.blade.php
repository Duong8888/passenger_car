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

                        <button id="modal-btn" type="button" class="btn mb-2 btn-success waves-effect waves-light"
                                data-bs-toggle="modal"
                                data-bs-target="#con-close-modal">Thêm mới xe
                        </button>

                        <!-- /.modal -->
                        <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="route-action" data-action="{{route('admin.car.checkLicense')}}"></div>
                            <form id="form-main" class="modal-dialog modal-dialog modal-lg modal-dialog-scrollable"
                                  method="POST"
                                  action="{{route('admin.car.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">{{$titleCreate}}</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="field-1" class="form-label">Biển số *</label>
                                                    <input type="text" name="license_plate" class="form-control"
                                                           id="field-1"
                                                           placeholder="B52-198">
                                                    <span class="text-danger license_plate"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="field-2" class="form-label">Giá vé *</label>
                                                    <input type="number" name="price" class="form-control"
                                                           id="example-number"
                                                           placeholder="350.000">
                                                    <span class="text-danger price"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="field-2" class="form-label">Loại xe *</label>
                                                    <select class="form-select" name="capacity">
                                                        <option value="">chọn</option>
                                                        @foreach($type as $key => $value)
                                                            <option id="{{$value->id}}" value="{{$value->type_name}}">{{$value->type_name}} chỗ</option>
                                                        @endforeach
                                                    </select>
                                                    <span class="text-danger capacity"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" style="display: none">
                                            <div>
                                                <label class="form-label">Loại vé *</label>
                                            </div>
                                            <div class="col-md-5 d-flex">

                                                <div class="form-check mb-2 form-check-success">
                                                    <input class="form-check-input" checked id="y" value="1" name="type" type="radio">
                                                    <label class="form-check-label"  for="y">Có chọn ghế</label>
                                                </div>
                                                <div class="form-check mb-2 form-check-success px-4">
                                                    <input class="form-check-input" id="n" value="0" name="type" type="radio">
                                                    <label class="form-check-label"  for="n">Không chọn ghế</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div>
                                                    <label class="form-label">Dịch vụ</label>
                                                </div>
                                                <div class="mb-3 d-flex flex-wrap">
                                                    @foreach($service as $value)
                                                        <div class="form-check mb-2 form-check-success" style="margin-right: 25px">
                                                            <input class="form-check-input service" name="service[]" type="checkbox" value="{{$value->id}}" id="customckeck{{$value->id}}">
                                                            <label class="form-check-label" for="customckeck{{$value->id}}">{{$value->service_name}}</label>
                                                        </div>
                                                    @endforeach
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-5">
                                                <div>
                                                    <label class="form-label">Giờ Khởi hành *</label>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div>
                                                    <label class="form-label">Giờ đến *</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="show-item">
                                            <div class="row add-item mb-2">
                                                <div class="col-md-5">
                                                    <input class="form-control departure" name="departure[]" id=""
                                                           type="time" name="time" value="01:00">
                                                </div>
                                                <div class="col-md-5">
                                                    <input class="form-control arrival" name="arrival[]" id=""
                                                           type="time" name="time" value="05:00">
                                                </div>
                                                <div class="col-md-2 d-flex justify-content-between">
                                                    <button type="button"
                                                            class="btn-delete-time btn d-flex justify-content-center align-items-center btn-danger waves-effect waves-light">
                                                        <i class="fe-trash-2"></i></button>

                                                    <button type="button"
                                                            class="btn-add-time btn btn-success d-flex justify-content-center align-items-center waves-effect waves-light mx-2">
                                                        <i class="fe-plus-circle"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="text-danger time-car"></span>



                                        <div class="row mb-4">
                                            <label for="field-1" class="form-label">Ảnh xe *</label>
                                            <div id="uppy"></div>
                                            <span class="text-danger images"></span>
                                        </div>

                                        <div class="row mt-4">
                                            <label for="field-1" class="form-label">Mô tả</label>
                                            <div class="col-md-12">
                                                <div id="snow-editor" style="height: 300px;"
                                                     class="ql-container ql-snow">
                                                    <div class="ql-editor" data-gramm="false"
                                                         contenteditable="true"><!-- content Snow-editor--></div>
                                                    <div class="ql-clipboard" contenteditable="true"
                                                         tabindex="-1"></div>
                                                    <div class="ql-tooltip ql-hidden"><a class="ql-preview"
                                                                                         rel="noopener noreferrer"
                                                                                         target="_blank"
                                                                                         href="about:blank"></a><input
                                                            type="text" data-formula="e=mc^2"
                                                            data-link="https://quilljs.com"
                                                            data-video="Embed URL"><a
                                                            class="ql-action"></a><a class="ql-remove"></a></div>
                                                </div> <!-- end Snow-editor-->
                                                <span class="text-danger description"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary waves-effect"
                                                data-bs-dismiss="modal">Đóng
                                        </button>
                                        <button type="button" id="btn-main"
                                                class="btn btn-info waves-effect waves-light">Lưu
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div><!-- /.modal -->

                        <div class="table-responsive table-load">
                            <table class="table table-bordered mb-0">
                                <thead>
                                <tr>
                                    @foreach($colums as $key => $value)
                                        <th>{{$value}}</th>
                                    @endforeach
                                </tr>
                                </thead>
                                <tbody class="tbody">
                                @foreach($data as $key => $value)
                                    <tr>
                                        @foreach($colums as $keyColum => $valueColum)
                                            @if($keyColum === 'action')
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            Action <i class="mdi mdi-chevron-down"></i>
                                                        </button>
                                                        <div class="dropdown-menu" style="">
                                                            <a class="dropdown-item btn-update" id="{{$value->id}}" href="#">Sửa</a>
                                                            <a class="dropdown-item delete" data-id="{{$value->id}}" href="#">Xóa</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            @elseif($keyColum == 'route')
                                                @if($value->$keyColum != null)
                                                    <td><p>{{$value->$keyColum->departure}}
                                                            - {{$value->$keyColum->arrival}}</p></td>
                                                @else
                                                    <td><p>Chưa hoạt động.</p></td>
                                                @endif
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
    <link href="{{asset('admin/libs/quill/quill.core.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/libs/quill/quill.bubble.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/libs/quill/quill.snow.css')}}" rel="stylesheet" type="text/css"/>

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
    <script type="module" src="{{asset('admin/js/custom/car.js')}}"></script>

@endsection



