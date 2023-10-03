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
                        <h4 class="header-title mt-0 mb-3">Route List</h4>
                        <a href="{{ route('route.create') }}">Create New Route</a>
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
                                        <th>Slug</th>
                                      
                                        <th>Departure</th>
                                        <th>Arrival</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @foreach ($data as $route)
                                <tbody>
                                    <tr>
                                        <td>{{ $route->id }}</td>
                                        <td>{{ $route->slug }}</td>
                                        
                                        <td>{{ $route->departure }}</td>
                                        <td>{{ $route->arrival }}</td>
                                        <td>{{ $route->price }}</td>
                                        <td style="display: flex;">
                                            <a class="btn btn-primary"
                                                href="{{ route('route.edit', $route->id) }}">Edit</a>
                                            <form action="{{ route('route.destroy', $route->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button onclick="return confirm('Are you sure ?')"
                                                    class="btn btn-warning">Delete</button>
                                            </form>

                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>

            </div><!-- end col -->

        </div>
        <!-- end row -->

    </div> <!-- container -->

</div> <!-- content -->
@endsection