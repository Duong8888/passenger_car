@extends('admin.layouts.master')
@section('page-script')
<!--Morris Chart-->
<script src="admin/libs/morris.js06/morris.min.js"></script>
<script src="admin/libs/raphael/raphael.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('admin/js/custom/user-report.js') }}"></script>
<!-- Dashboar init js-->
<script src="admin/js/pages/dashboard.init.js"></script>
@endsection
@section('content')
<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <canvas id="myChart"></canvas>
            </div><!-- end col -->
        </div>
        <!-- end row -->
    </div> <!-- container -->

</div> <!-- content -->
@endsection