@extends('admin.layouts.master')
@section('title', "Thống kê liên hệ")
@section('page-style')
<!-- third party css -->
{{-- thongke --}}
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
{{-- endthongke --}}
@endsection
@section('page-script')
 <!-- third party js -->
{{-- thongke --}}
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script>
    $( function() {
      $( "#datepicker" ).datepicker({
        prevText:"Tháng trước",
        nextText:"Tháng sau",
        dateFormat:"yy-mm-dd",
        dayNamesMin: ["Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7", "Chủ nhật"],
        duration: "slow"
      });
      $( "#datepicker2" ).datepicker({
        prevText:"Tháng trước",
        nextText:"Tháng sau",
        dateFormat:"yy-mm-dd",
        dayNamesMin: ["Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7", "Chủ nhật"],
        duration: "slow"
      });
    });
    // ajax
    $(document).ready(function(){
        chart30daysorder();
        var chart = new Morris.Area({
            element: 'myfirstchart',
            lineColors: ['#A4ADD3', '#10fc87', '#FF0000', '#A4ADD3'],
            pointFillColors: ['#ffffff'],
            pointStrokeColors: ['black'],
            fillOpacity: 0.3,
            hideHover: 'auto',
            parseTime: false,
            xkey: 'created_at',
            ykeys: ['count','status_Chưa_xử_lý', 'status_Đã_xử_lý'],
            behaveLikeLine: true,
            labels: ['Số lượt liên hệ', 'Chưa xử lý', 'Đã xử lý']
        });
            
        function chart30daysorder() {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: "{{ route('admin.contactStaff.dayrevenue') }}",
                method: "POST",
                dataType: "JSON",
                data: { _token: _token },

                success: function(data) {
                    console.log(data);
                    chart.setData(data);
                }
            });
        }

    $('.dashboard-filter').change(function(){
        var dashboard_value = $(this).val();
        var _token = $('input[name="_token"]').val();
        var url = $(this).data('url');
        $.ajax({
            url: url,
            method: "POST",
            dataType: "JSON",
            data: { dashboard_value:dashboard_value,_token:_token },

            success: function(data){
                chart.setData(data);
            }
        })
    })
        // 
    $('#btn-dashboard-filter').click(function(){
        var _token = $('input[name="_token"]').val();
        var form_date = $('#datepicker').val();
        var to_date = $('#datepicker2').val();
        var url = $(this).data('url');
        $.ajax({
            url: url,
            method: "POST",
            dataType: "JSON",
            data: { form_date: form_date, to_date: to_date, _token: _token },

            success: function(data){
                chart.setData(data);
            }
        });
    });
});
</script>
{{-- endthongke --}}
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <p class="title_thongke" style="text-align: center;font-size: 20px;font-weight: bold;">Thông kê liên hệ</p>
                <form autocomplete="off" class="mb-4 mt-4">
                    @csrf
                    {{-- <input type="text" hidden data-url="{{route('admin.contactStaff.dayrevenue')}}"> --}}
                    <div class="row align-items-end">
                        <div class="col-md-3">
                            <p>Từ ngày: <input type="text" id="datepicker" class="form-control"></p>
                        </div>
                        <div class="col-md-3">
                            <p>Đến ngày: <input type="text" id="datepicker2" class="form-control"></p>
                        </div>
                        <div class="col-md-3">
                            <p>Lọc theo: 
                                <select class="dashboard-filter form-control" data-url="{{route('admin.contactStaff.filter_by_select')}}">
                                    <option>--Chọn--</option>
                                    <option value="7ngay">7 ngày qua</option>
                                    <option value="thangtruoc">Tháng trước</option>
                                    <option value="thangnay">Tháng này</option>
                                    <option value="365ngayqua">365 ngày qua</option>
                                </select>
                            </p>
                        </div>
                        <div class="col-md-3">
                            <p><input type="button" data-url="{{route('admin.contactStaff.filter_by_date')}}" id="btn-dashboard-filter" class="btn btn-primary btn-sm form-control" value="Lọc kết quả"></p>
                        </div>
                    </div>
                </form>
                <div class="col-md-12">
                    <div id="myfirstchart" style="height: 568px"></div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
