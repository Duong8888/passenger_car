@extends('admin.layouts.master')

@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">

                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-3">Sửa Bài viết</h4>
                            <a href="{{ route('admin.postsing') }}" class="btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                          d="M11.354 4.646a.5.5 0 0 1 0 .708L7.707 8l3.647 3.646a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 0 1 .708 0z"/>
                                </svg>
                                Back
                            </a>

                            <form action="{{ route('admin.posts.update', $model->id) }}" method="post"
                                  enctype="multipart/form-data" class="row">
                                @csrf
                                @method('put')


                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Title</label>
                                        <input class="form-control" type="text" name="title" value="{{ $model->title }}">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Slug</label>
                                        <input class="form-control" type="text" name="slug" value="{{ $model->slug }}">
                                    </div>
                                </div>

                                <div class="col-md-6 d-flex  justify-content-center align-items-center">
                                    <input type="file" hidden name="image" id="image">
                                    <label for="image" id="fileContent"
                                           class="rounded-1 w-100 h-100 d-flex  justify-content-center align-items-center">
                                        <img class="rounded" height="100%" width="100%" src="{{asset($model->image)}}" alt="">
x                                    </label>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Category_id</label>
                                    <input class="form-control" type="text" name="category_id"
                                           value="{{ $model->category_id }}">
                                </div>



                                <div class="mb-3">
                                    <label class="form-label">Subtitle</label>
                                    <textarea name="subtitle" id="editor1" rows="10"
                                              cols="80">{{ $model->content }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn float-end btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- end col -->

            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->
    <script src="{{ url('ckeditor/ckeditor.js') }}"></script>

    <script type="text/javascript">
        CKEDITOR.replace('editor1', {
            filebrowserUploadUrl: "{{ route('admin.upload', ['_token' => csrf_token()]) }}",
            filebrowserWindowWidth: '640',
            filebrowserWindowHeight: '480'
        });

        const inputImg = document.querySelector('#image');

        inputImg.addEventListener('change', (e) => {
            let file = e.target.files[0]

            if (!file) return
            let srcIamge = URL.createObjectURL(file)
            document.querySelector('#fileContent').innerHTML = `<img class="rounded" height="100%" width="100%" src="${srcIamge}">`;
        })

    </script>
    @section('page-script')

        <!--Morris Chart-->
        <script src="admin/libs/morris.js06/morris.min.js"></script>
        <script src="admin/libs/raphael/raphael.min.js"></script>

        <!-- Dashboar init js-->
        <script src="admin/js/pages/dashboard.init.js"></script>

    @endsection

@endsection

