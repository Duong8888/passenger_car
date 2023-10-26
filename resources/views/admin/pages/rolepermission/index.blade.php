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
                    <h4 class="mt-0 header-title">Phân quyền (Role)</h4>
                    <a class="dropdown-item" href="{{ route('rolePermission.create') }}">Thêm quyền</a>
                    @if ($message = Session::get('success'))
                        <div>
                            <ul>
                                <p  style="color: rgb(43, 0, 255)">{{ $message }}</p>
                            </ul>
                        </div>
                    @endif

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
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
                                                    <a class="dropdown-item" href="{{ route('rolePermission.edit',$role->id) }}">Cập nhật</a>
                                                    <form action="{{ route('rolePermission.destroy',$role->id) }}" method="POST">
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
</div>

@endsection
