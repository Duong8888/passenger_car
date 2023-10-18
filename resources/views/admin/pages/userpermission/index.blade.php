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
                    <h4 class="mt-0 header-title">Danh sách các điểm dừng</h4>
                    <p class="text-muted font-14 mb-3"></p>
                    {{-- <a href="{{ route('stop.create') }}" style="margin:200px;">Thêm mới</a> --}}
                    <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
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
                            <tr>
                                <td>Phan'z Nam'z</td>
                                <td>a@gmail.com</td>
                                <td>0123456789</td>
                                <td>User</td>
                                <td>Null</td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="btn-group">
                                            <i class="fe-settings dropdown-toggle font-18"
                                               data-bs-toggle="dropdown" aria-haspopup="true"
                                               aria-expanded="false"></i>
                                            <div class="dropdown-menu" style="">
                                                <a class="dropdown-item" href="">Cập nhật</a>
                                                <form action="" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="dropdown-item" type="submit">Xóa</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
