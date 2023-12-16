@extends('admin.layouts.master')

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
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Phân quyền (Role)</h4>
                    <a class="dropdown-item" href="{{ route('admin.rolePermission.create') }}">Thêm quyền</a>
                    @if ($message = Session::get('success'))
                        <div>
                            <ul>
                                <p  style="color: rgb(43, 0, 255)">{{ $message }}</p>
                            </ul>
                        </div>
                    @endif

                    {{-- <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                        <thead>
                        <tr style="color: red">
                            <th>Role({{ $roles->count() }})</th>
                            <th>Permission({{ $permissions->count() }})</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach ($roles as $role)
                                @php
                                    $permissionCount = 0;
                                @endphp
                                <tr>
                                    <td>
                                        {{ $role->name }}
                                    </td>
                                    <td>
                                        @foreach ($role->permissions as $permission)
                                            {{ $permission->name }} <label style="color: red">|</label>
                                            @php
                                                $permissionCount++;
                                            @endphp
                                        @endforeach
                                            @if ($permissionCount == 0)
                                                <p>null</p>
                                            @endif
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="btn-group">
                                                <i class="fe-settings dropdown-toggle font-18"
                                                   data-bs-toggle="dropdown" aria-haspopup="true"
                                                   aria-expanded="false"></i>
                                                <div class="dropdown-menu" style="">
                                                    <a class="dropdown-item" href="{{ route('admin.rolePermission.edit',$role->id) }}">Cập nhật</a>
                                                    <form action="{{ route('admin.rolePermission.destroy',$role->id) }}" method="POST">
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
                    </table> --}}

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
