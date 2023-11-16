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
                            <h4 class="header-title mt-0 mb-3">Tickets List</h4>
                            <a href="{{ route('admin.ticket.create') }}">
                                <button type="button" class="btn btn-success waves-effect waves-light mb-4">Create New
                                    Ticket
                                </button>
                            </a>
                            <a href="{{ route('admin.ticket.create') }}">
                                <button type="button" class="btn btn-success waves-effect waves-light mb-4">Create New
                                    Ticket
                                </button>
                            </a>
                            <a href="{{ route('admin.ticket.create') }}">
                                <button type="button" class="btn btn-success waves-effect waves-light mb-4">Create New
                                    Ticket
                                </button>
                            </a>
                            @if ($message = Session::get('success'))
                                <div>
                                    <ul>
                                        <li>{{ $message }}</li>
                                    </ul>
                                </div>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-bordered mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Username</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    @foreach ($data as $ticket)
                                        <tbody>
                                        <tr>
                                            <td>{{ $ticket->id }}</td>
                                            <td>{{ $ticket->username }}</td>
                                            <td>{{ $ticket->phone }}</td>
                                            <td>{{ $ticket->email }}</td>
                                            <td>{{ $ticket->quantity }}</td>
                                            <td>
                                                @if ($ticket->status == 0 )
                                                    <span class="badge bg-danger">Pending</span>
                                                @elseif($ticket->status == 1)
                                                    <span class="badge bg-success">Success</span>
                                                @endif
                                            </td>
                                            <td>{{ $ticket->total_price }}</td>

                                            <td style="display: flex;">
                                                <a class="btn btn-primary"
                                                   href="{{ route('admin.ticket.edit', $ticket->id) }}">Edit</a>
                                                <form action="{{ route('admin.ticket.destroy', $ticket->id) }}"
                                                      method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button onclick="return confirm('Are you sure ?')"
                                                            class="btn btn-warning">Delete
                                                    </button>
                                                </form>

                                            </td>
                                        </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                                <div class="float-end mt-2">
                                    {{ $data->links() }}
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- end col -->

            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->
@endsection
