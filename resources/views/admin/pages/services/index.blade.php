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

    <!-- Start Content-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-3">Services List</h4>
                        <a href="{{ route('service.create') }}">Create New Services</a>
                        @if ($message = Session::get('success'))
                            <div>
                                    <p style="color: blue;background-coler:red;">{{ $message }}</p>
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Username</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @foreach ($services as $service)
                                    <tbody>
                                    <tr>
                                        <td>{{ $service->id }}</td>
                                        <td>{{ $service->service_name }}</td>
                                        <td style="display: flex;">
                                            <a class="btn btn-primary" style="margin-right: 5px" href="{{ route('service.edit', $service->id) }}">Edit</a>
                                            <form action="{{ route('service.destroy', $service->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button onclick="return confirm('Are you sure ?')" class="btn btn-warning">Delete</button>
                                            </form>

                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
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
