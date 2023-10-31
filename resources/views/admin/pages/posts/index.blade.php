@extends('admin.layouts.master')

@section('page-script')
    <!--Morris Chart-->
    <script src="{{asset('')}}admin/libs/morris.js06/morris.min.js"></script>
    <script src="{{asset('')}}admin/libs/raphael/raphael.min.js"></script>

    <!-- Dashboar init js-->
    <script src="{{asset('')}}admin/js/pages/dashboard.init.js"></script>
@endsection

@section('content')
    <div class="content">
        <!-- Start Content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-3">Posts List</h4>
                            <a href="{{ route('admin.posts.store') }}">Thêm bài viết mới</a>
                            @if ($message = Session::get('success'))
                                <div>
                                    <ul>
                                        <li>{{ $message }}</li>
                                    </ul>
                                </div>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Slug</th>
                                        <th>Category</th>
                                        <th>Author</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($data as $posts)
                                        <tr>
                                            <td>{{ $posts->title }}</td>
                                            <td><a href="{{ route('admin.posts.edit', ['id' => $posts->id]) }}">Xem chi
                                                    tiết</a></td>
                                            <td>{{ $posts->slug }}</td>
                                            <td>{{ $posts->category->category_name}}</td>
                                            <td>{{ $posts->user->name}}</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <div class="btn-group">
                                                        <i class="fe-settings dropdown-toggle font-18"
                                                           data-bs-toggle="dropdown" aria-haspopup="true"
                                                           aria-expanded="false"></i>
                                                        <div class="dropdown-menu" style="">
                                                            <a class="dropdown-item" href="{{route('admin.posts.edit',$posts->id)}}">Cập nhật</a>
                                                            <form action="{{route('admin.posts.destroy',$posts->id)}}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="dropdown-item" type="submit">Xóa</button>
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
                </div><!-- end col -->
            </div>
            <!-- end row -->
        </div> <!-- container -->
    </div> <!-- content -->

@endsection
