
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
                            <a href="{{ route('posts.store') }}">Thêm bài viết mới</a>
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
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Slug</th>
                                        <th>Category_id</th>
                                        <th>Author_id</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($data as $posts)
                                        <tr>
                                            <td>{{ $posts->id }}</td>
                                            <td>{{ $posts->title }}</td>
                                            <td class="chill">{!! $posts->subtitle !!} </td>
                                            <style>
                                                .chill{
                                                    width: 500px;
                                                    overflow: hidden;
                                                    text-overflow: ellipsis;
                                                    line-height: 25px;
                                                    -webkit-line-clamp: 3;
                                                    height: 75px;
                                                    display: -webkit-box;
                                                    -webkit-box-orient: vertical;
                                                }
                                            </style>
                                            <td>{{ $posts->slug }}</td>
                                            <td>{{ $posts->category_id }}</td>
                                            <td>{{ $posts->author_id }}</td>
                                            <td style="display: flex;">
                                                <a class="btn btn-primary" href="{{ route('posts.edit', ['id' => $posts->id]) }}">Edit</a>

                                                <form action="{{ route('posts.destroy', $posts->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('Are you sure ?')" class="btn btn-warning">Delete</button>
                                                </form>
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