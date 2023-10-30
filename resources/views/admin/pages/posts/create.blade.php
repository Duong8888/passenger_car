@extends('admin.layouts.master')

@section('content')
    <div class="content">


        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">


                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-3">Posts Create</h4>
                            <a href="{{ route('admin.postsing') }}" class="btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                          d="M11.354 4.646a.5.5 0 0 1 0 .708L7.707 8l3.647 3.646a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 0 1 .708 0z"/>
                                </svg>
                                Back
                            </a>

                            <form action="{{ route('admin.posts.store') }}" method="post" enctype="multipart/form-data"
                                  class="row">
                                @csrf
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Title</label>
                                        <input class="form-control" type="text" name="title" id="title" value=""
                                               size="50" onkeyup="ChangeToSlug();">
                                    </div>


                                    <div class="mb-3">
                                        <label class="form-label">Slug</label>
                                        <input class="form-control" type="text" name="slug" id="slug" value=""
                                               size="50">
                                    </div>
                                </div>

                                <div class="col-md-6 d-flex  justify-content-center align-items-center">
                                    <input type="file" hidden name="image" id="image">
                                    <label for="image" id="fileContent"
                                           class="rounded-1 w-100 h-100 d-flex  justify-content-center align-items-center">
                                        <i class="fe-image font-28 icon-img" style="transform: scale(2);"></i>
                                    </label>
                                </div>
                                <input hidden name="author_id" value="{{auth()->user()->id}}">


                                <div class="mb-3">
                                    <label class="form-label">Category</label>
                                    <select class="form-select" name="category_id">
                                        @foreach($category as $key => $value)
                                            <option value="{{$value->id}}">{{$value->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Content</label>
                                    <textarea name="content" id="editor1" rows="10" cols="80"></textarea>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary float-end">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div><!-- end col -->

            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->
    <script src="{{url('ckeditor/ckeditor.js') }}"></script>

    <script type="text/javascript">
        CKEDITOR.replace('editor1', {
            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
            filebrowserWindowWidth: '640',
            filebrowserWindowHeight: '480'
        });
    </script>
    <script>
        function ChangeToSlug() {
            var title, slug;

            //Lấy text từ thẻ input title
            title = document.getElementById("title").value;

            //Đổi chữ hoa thành chữ thường
            slug = title.toLowerCase();

            //Đổi ký tự có dấu thành không dấu
            slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
            slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
            slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
            slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
            slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
            slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
            slug = slug.replace(/đ/gi, 'd');
            //Xóa các ký tự đặt biệt
            slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
            //Đổi khoảng trắng thành ký tự gạch ngang
            slug = slug.replace(/ /gi, "-");
            //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
            //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
            slug = slug.replace(/\-\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-/gi, '-');
            slug = slug.replace(/\-\-/gi, '-');
            //Xóa các ký tự gạch ngang ở đầu và cuối
            slug = '@' + slug + '@';
            slug = slug.replace(/\@\-|\-\@|\@/gi, '');
            //In slug ra textbox có id “slug”
            document.getElementById('slug').value = slug;
        }

        const inputImg = document.querySelector('#image');

        inputImg.addEventListener('change', (e) => {
            let file = e.target.files[0]

            if (!file) return
            let srcIamge = URL.createObjectURL(file)
            document.querySelector('#fileContent').innerHTML = `<img class="rounded" height="100%" width="100%" src="${srcIamge}">`;
        })


    </script>

@endsection

@section('page-script')

    <!--Morris Chart-->
    <script src="{{asset('admin/libs/morris.js06/morris.min.js')}}"></script>
    <script src="{{asset('admin/libs/raphael/raphael.min.js')}}"></script>

    <!-- Dashboar init js-->
    <script src="{{asset('admin/js/pages/dashboard.init.js')}}"></script>

@endsection
