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
                    <div class="row">

                        {{-- <form action="{{ route('rolePermission.update',$role->id) }}" method="post"
                            enctype="multipart/form-data" class="row">
                          @csrf
                          @method('put')
                            <h4 class="header-title col-md-12" style="align-content: center">Vai trò</h4>
                                @foreach ($permissions as $permission)
                                    <div class="form-check mb-2 form-check-primary col-md-2">
                                        <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $permission->name }}"
                                            @if($role->hasPermissionTo($permission->name)) checked @endif>
                                        <label class="form-check-label" for="customckeck1">{{ $permission->name }}</label>
                                    </div>
                                @endforeach
                            <div class="mb-3">
                                <button type="submit" class="btn float-end btn-primary">Update</button>
                            </div>
                        </form> --}}
                     <!-- end row-->


                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('rolePermission.update',$role->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div id="basicwizard">
                                        <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
                                            <li class="nav-item">
                                                <a href="#basictab2" data-bs-toggle="tab" data-toggle="tab"
                                                    class="nav-link rounded-0 pt-2 pb-2">
                                                    <i class="mdi mdi-face-profile me-1"></i>
                                                    <span class="d-none d-sm-inline">Sửa quyền(role)</span>
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="tab-content b-0 mb-0 pt-0">
                                            <div class="tab-pane active" id="basictab2">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="row mb-12 mb-3">
                                                                <input type="text" id="name" name="nameRole"
                                                                    class="form-control" value="{{ $role->name }}" readonly>
                                                                    @error('nameRole')
                                                                        <div class="alert alert-danger mt-1 mb-1" style="color: red;font-size: 12px;">{{ $message }}</div>
                                                                    @enderror
                                                        </div>
                                                        <div class="row mb-3">
                                                            @foreach ($permissions as $permission)
                                                                <div class="form-check mb-2 form-check-primary col-md-2">
                                                                    <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $permission->name }}"
                                                                        @if($role->hasPermissionTo($permission->name)) checked @endif>
                                                                    <label class="form-check-label" for="customckeck1">{{ $permission->name }}</label>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->
                                            </div>
                                            <ul class="list-inline wizard mb-0">
                                                <li class="next list-inline-item float-end">
                                                    <button class="btn btn-secondary">Cập nhật</button>
                                                </li>
                                            </ul>

                                        </div> <!-- tab-content -->
                                    </div> <!-- end #basicwizard-->
                                </form>

                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->

                </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection


