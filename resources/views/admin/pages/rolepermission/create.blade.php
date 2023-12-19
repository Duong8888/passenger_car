@extends('admin.layouts.master')
@section('title', "Thêm quyền và vai trò")
@section('page-style')
   <!-- third party css -->
<link href="{{ asset('admin/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{ asset ('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css') }}">
<!-- third party css end -->
@endsection
@section('page-script')
    <!-- third party js -->
    <script src="{{ asset('admin/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('admin/libs/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin/libs/pdfmake/build/vfs_fonts.js') }}"></script>
    <!-- Datatables init -->
    <script src="{{ asset('admin/js/pages/datatables.init.js') }}"></script>
@endsection
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.rolePermission.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="action" value="createRole">
                            <div id="basicwizard">
                                <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
                                    <li class="nav-item">
                                        <a href="#basictab2" data-bs-toggle="tab" data-toggle="tab"
                                            class="nav-link rounded-0 pt-2 pb-2">
                                            <i class="mdi mdi-face-profile me-1"></i>
                                            <span class="d-none d-sm-inline">Thêm quyền(role)</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content b-0 mb-0 pt-0">
                                    <div class="tab-pane active" id="basictab2">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="name"> Role name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="name" name="nameRole"
                                                            class="form-control" placeholder="Admin">
                                                            @error('nameRole')
                                                                <div class="alert alert-danger mt-1 mb-1" style="color: red;font-size: 12px;">{{ $message }}</div>
                                                            @enderror
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    @foreach ($permissions as $permission)
                                                        <div class="form-check mb-2 form-check-primary col-md-3">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="permissions[]" value="{{ $permission->name }}">
                                                            <label class="form-check-label" for="customckeck1">{{ $permission->name }}</label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>
                                    <ul class="list-inline wizard mb-0">
                                        <li class="next list-inline-item float-start">
                                            <a href="{{ route('admin.rolePermission.index') }}" class="btn btn-secondary">Quay lại</a>
                                        </li>
                                        <li class="next list-inline-item float-end">
                                            <button class="btn btn-secondary">Thêm</button>
                                        </li>
                                    </ul>

                                </div> <!-- tab-content -->
                            </div> <!-- end #basicwizard-->
                        </form>

                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success mt-1 mb-1" style="color: #004080; background-color: #cce5ff; font-size: 12px;">{{ $message }}</div>
                        @endif
                        <form action="{{ route('admin.rolePermission.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="action" value="createPermission">
                            <div id="basicwizard">
                                <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
                                    <li class="nav-item">
                                        <a href="#basictab" data-bs-toggle="tab" data-toggle="tab"
                                            class="nav-link rounded-0 pt-2 pb-2">
                                            <i class="mdi mdi-face-profile me-1"></i>
                                            <span class="d-none d-sm-inline">Thêm vai trò(permission)</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content b-0 mb-0 pt-0">
                                    <div class="tab-pane active" id="basictab">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row mb-3">
                                                    <label class="col-md-3 col-form-label" for="name"> Permission name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="name" name="name"
                                                            class="form-control" placeholder="Add post">
                                                            @error('name')
                                                                <div class="alert alert-danger mt-1 mb-1" style="color: red;font-size: 12px;">{{ $message }}</div>
                                                            @enderror
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>
                                    <ul class="list-inline wizard mb-0">
                                        <li class="next list-inline-item float-end">
                                            <button class="btn btn-secondary">Thêm</button>
                                        </li>
                                    </ul>

                                </div> <!-- tab-content -->
                            </div> <!-- end #basicwizard-->
                        </form>


                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->
            <div class="card">
                <div class="card-body">
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap col-xl-12">
                        <thead>
                        <tr style="color: red">
                            <th>Permission({{ $permissions->count() }})</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach ($permissions as $permission)
                                <tr>
                                    <td>
                                        {{ $permission->name }}
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="btn-group">
                                                <i class="fe-settings dropdown-toggle font-18"
                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"></i>
                                                <div class="dropdown-menu" style="">
                                                    <form action="{{ route('admin.rolePermission.delete',$permission->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button onclick="return confirm('Bạn chắc chắn muốn xóa thật chứ ?')" class="dropdown-item" type="submit">Xóa</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
