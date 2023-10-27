@extends('admin.layouts.master')
@section('content')

<div class="content">
    <div class="row" >
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('permission.update',$user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div id="basicwizard">
                            <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
                                <li class="nav-item">
                                    <a href="#basictab2" data-bs-toggle="tab" data-toggle="tab"
                                        class="nav-link rounded-0 pt-2 pb-2">
                                        <i class="mdi mdi-face-profile me-1"></i>
                                        <span class="d-none d-sm-inline">Phân quyền cho user</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content b-0 mb-0 pt-0">
                                <div class="tab-pane active" id="basictab2">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="example-select" class="form-label">Tên người dùng</label>
                                                <input type="text" id="name" name="nameRole" class="form-control" value="{{ $user->name }}" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-select" class="form-label">Các quyền</label>
                                                <select name="role" class="form-select" id="example-select">
                                                    @foreach($roles as $role)
                                                        <option value="{{ $role->name }}" @if(in_array($role->id, $roleId)) selected @endif>{{ $role->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->
                                </div>
                                <ul class="list-inline wizard mb-0">
                                    <li class="next list-inline-item float-start">
                                        <a href="{{ route('permission.index') }}" class="btn btn-secondary">Quay lại</a>
                                    </li>
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


@endsection

