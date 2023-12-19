@extends('admin.layouts.master')
@section('title', "Phân quyền người dùng")
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
                    <h4 class="mt-0 header-title">Phân quyền cho user</h4>
                    <p class=" font-14 mb-3" style="color: red">
                        Lưu ý: chỉ Supper Admin mới có thể sử dụng trang này và cần nhìn rõ tránh phân quyền nhầm nha ...
                    </p>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success mt-1 mb-1" style="color: #004080; background-color: #cce5ff; font-size: 12px;">{{ $message }}</div>
                    @endif
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="text-align: center;vertical-align: middle;">
                        <thead>
                        <tr style="color: red">
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Role</th>
                            <th>Permission</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td style="white-space: pre-line;">
                                    @if ($user->getRoleNames()->count() > 0)
                                            @foreach ($user->getRoleNames() as $role)
                                                {{ $role }}
                                            @endforeach
                                        </p>
                                    @else
                                        <p>null</p>
                                    @endif
                                </td>
                                <td  style="white-space: pre-line;">
                                    @foreach ($user->getRoleNames() as $role)
                                        @php
                                            $permissionCount = 0;
                                        @endphp
                                        @foreach ($roles as $rol)
                                            @if ($rol->name == $role)
                                                @foreach ($rol->permissions as $permission)
                                                    {{ $permission->name }}
                                                    @php
                                                        $permissionCount++;
                                                    @endphp
                                                @endforeach
                                            @endif
                                        @endforeach
                                        @if ($permissionCount == 0)
                                            <p>null</p>
                                        @endif
                                    @endforeach
                                </td>

                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="btn-group">
                                            <i class="fe-settings dropdown-toggle font-18"
                                               data-bs-toggle="dropdown" aria-haspopup="true"
                                               aria-expanded="false"></i>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('admin.permission.edit',$user->id) }}">Phân Quyền</a>
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
</div>

@endsection
