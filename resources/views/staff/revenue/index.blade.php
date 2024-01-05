@extends('admin.layouts.master')
@section('title', "Thống kê doanh thu")
@section('page-style')
<!-- third party css -->
<link href="{{ asset('admin/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{ asset ('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css') }}">
{{-- thongke --}}
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
{{-- endthongke --}}
@endsection
@section('page-script')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script> --}}
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.12/jspdf.plugin.autotable.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
 <!-- third party js -->
 <script src="{{ asset('admin/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('admin/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
 <script src="{{ asset('admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
 <script src="{{ asset('admin/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
 <script src="{{ asset('admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
 <script src="{{ asset('admin/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
 <script src="{{ asset('admin/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
 <script src="{{ asset('admin/libs/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
 <script src="{{ asset('admin/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
 <script src="{{ asset('admin/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
 <script src="{{ asset('admin/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>
 <script src="{{ asset('admin/libs/pdfmake/build/pdfmake.min.js') }}"></script>
 <script src="{{ asset('admin/libs/pdfmake/build/vfs_fonts.js') }}"></script>
 <!-- Datatables init -->
 <script src="{{ asset('admin/js/pages/datatables.init.js') }}"></script>
{{-- thongke --}}
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script type="module">
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
        lineColors: ['#819C79', '#10fc87', '#FF6541'],
        pointFillColors: ['#ffffff'],
        pointStrokeColors: ['black'],
        fillOpacity: 0.3,
        hideHover: 'auto',
        parseTime: false,
        xkey: 'date',
        ykeys: [],
        behaveLikeLine: true,
        labels: [],
    });

    function chart30daysorder() {
        var _token = $('input[name="_token"]').val();
        $.ajax({
            url: "{{ route('admin.revenueStaff.dayrevenue') }}",
            method: "POST",
            dataType: "JSON",
            data: { _token: _token },

            success: function(data) {
                console.log(data);
                var ykeys = ['quantity', 'total_price'];
                var labels = ['Số lượng vé', 'Doanh thu'];
                chart.options.ykeys = ykeys;
                chart.options.labels = labels;
                chart.setData(data);
                var tableBody = $('#tableBody');
                tableBody.empty(); 
                var dateDisplayed = false;
                $.each(data, function(index, day) {
                    $.each(day.cars, function(index, car) {
                        var row = `<tr>`;
                        row += `
                            <td>${car.license_plate}</td>
                            <td>${car.quantity}</td>
                            <td>${car.total_price.toLocaleString()} đ</td>
                        `;
                        if (!dateDisplayed) {
                            row += `<td rowspan="${day.cars.length}">${day.date}</td>`;
                            dateDisplayed = true;
                        }
                        row += `</tr>`;
                        tableBody.append(row);
                    });
                    dateDisplayed = false;
                });
                $('#exportButton').off('click').on('click', function() {
                    exportDataToCSV(data);
                });
                $('#exportPDFButton').off('click').on('click', function() {
                    exportDataToPDF(data);
                });
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

                var tableBody = $('#tableBody');
                tableBody.empty(); 
                var dateDisplayed = false;
                $.each(data, function(index, day) {
                    $.each(day.cars, function(index, car) {
                        var row = `<tr>`;
                        row += `
                            <td>${car.license_plate}</td>
                            <td>${car.quantity}</td>
                            <td>${car.total_price.toLocaleString()} đ</td>
                        `;
                        if (!dateDisplayed) {
                            row += `<td rowspan="${day.cars.length}">${day.date}</td>`;
                            dateDisplayed = true;
                        }
                        row += `</tr>`;
                        tableBody.append(row);
                    });
                    dateDisplayed = false;
                });
                $('#exportButton').off('click').on('click', function() {
                    exportDataToCSV(data);
                });
                $('#exportPDFButton').off('click').on('click', function() {
                    exportDataToPDF(data);
                });
            }
        })
    })
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
                var tableBody = $('#tableBody');
                tableBody.empty(); 
                var dateDisplayed = false;
                $.each(data, function(index, day) {
                    $.each(day.cars, function(index, car) {
                        var row = `<tr>`;
                        row += `
                            <td>${car.license_plate}</td>
                            <td>${car.quantity}</td>
                            <td>${car.total_price.toLocaleString()} đ</td>
                        `;
                        if (!dateDisplayed) {
                            row += `<td rowspan="${day.cars.length}">${day.date}</td>`;
                            dateDisplayed = true;
                        }
                        row += `</tr>`;
                        tableBody.append(row);
                    });
                    dateDisplayed = false;
                });
                $('#exportButton').off('click').on('click', function() {
                    exportDataToCSV(data);
                });
                $('#exportPDFButton').off('click').on('click', function() {
                    exportDataToPDF(data);
                });
            }
        });
    });
    function exportDataToCSV(data) {
        var csvContent = "\uFEFF";
        var header = "Biển số xe,Số lượng vé,Doanh thu,Thời gian\n";
        csvContent += header;
        data.forEach(function(day) {
            day.cars.forEach(function(car) {
                var licensePlate = `"${car.license_plate.replace(/"/g, '""')}"`;
                var quantity = car.quantity;
                var total_price = `"${car.total_price.toLocaleString()} đ"`;
                var date = day.date ? `"${day.date}"` : "";

                var row = `${licensePlate},${quantity},${total_price},${date}\n`;
                csvContent += row;
            });
        });
        var blob = new Blob([csvContent], { type: "text/csv;charset=utf-8" });
        saveAs(blob, "Thống kê doanh thu");
    }

    function exportDataToPDF(data) {
        var doc = new jsPDF('p', 'pt');
        var columns = ['Bien so xe', 'So luong ve', 'Doanh thu', 'Thoi gian'];
        var rows = [];
        $.each(data, function(index, day) {
            $.each(day.cars, function(index, car) {
                var row = [
                    car.license_plate,
                    car.quantity,
                    car.total_price.toLocaleString() + `d`,
                    day.date
                ];
                rows.push(row);
            });
        });
        doc.autoTable({
            head: [columns],
            body: rows,
        });
        doc.save('Thống kê doanh thu.pdf');
    }

});
</script>
{{-- endthongke --}}
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <p class="title_thongke" style="text-align: center;font-size: 20px;font-weight: bold;">Thông kê doanh thu</p>
                <form autocomplete="off" class="mb-4 mt-4">
                    @csrf
                    <div class="row align-items-end">
                        <div class="col-md-3">
                            <p>Từ ngày: <input type="date" id="datepicker" class="form-control"></p>
                          
                        </div>
                        <div class="col-md-3">
                            <p>Đến ngày: <input type="date" id="datepicker2" class="form-control"></p>
                        </div>
                        <div class="col-md-3">
                            <p>Lọc theo:
                                <select class="dashboard-filter form-control" data-url="{{route('admin.revenueStaff.filter_by_select')}}">
                                    <option>--Chọn--</option>
                                    <option value="7ngay">7 ngày qua</option>
                                    <option value="thangtruoc">Tháng trước</option>
                                    <option value="thangnay">Tháng này</option>
                                    <option value="365ngayqua">365 ngày qua</option>
                                </select>
                            </p>
                        </div>
                        <div class="col-md-3">
                            <p><input type="button" data-url="{{route('admin.revenueStaff.filter_by_date')}}" id="btn-dashboard-filter" class="btn btn-primary btn-sm form-control" value="Lọc kết quả"></p>
                        </div>
                    </div>
                </form>
                <div class="col-md-12">
                    <div id="myfirstchart" style="height: 568px"></div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div>
                    <button type="button" id="exportButton" class="btn btn-success waves-effect waves-light">
                        Xuất Excel<span class="btn-label-right"><i class="fa-solid fa-file-excel"></i></span>
                    </button>
                    <button type="button" id="exportPDFButton" class="btn btn-danger waves-effect waves-light">
                        Xuất Pdf<span class="btn-label-right"><i class="fa-solid fa-file-pdf"></i></span>
                    </button>
                </div>
                
                <table class="table table-striped table-bordered dt-responsive nowrap mt-1" style="text-align: center;vertical-align: middle;">
                    <thead>
                    <tr style="color: red">
                        <th>Biển số xe</th>
                        <th>Số lượng vé</th>
                        <th>Doanh thu</th>
                        <th>Thời gian</th>
                    </tr>
                    </thead>
                    <tbody id="tableBody">
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</div>
@endsection
