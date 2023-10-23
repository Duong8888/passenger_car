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
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Phân quyền cho user</h4>
                    <p class=" font-14 mb-3" style="color: red">
                        Lưu ý: chỉ Supper Admin mới có thể sử dụng trang này và cần nhìn rõ tránh phân quyền nhầm nha ...
                    </p>
                    @if ($message = Session::get('success'))
                        <div>
                            <ul>
                                <li  style="color: rgb(43, 0, 255)">{{ $message }}</li>
                            </ul>
                        </div>
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
                                                <a class="dropdown-item" href="{{ route('permission.edit',$user->id) }}">Phân Quyền</a>
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
