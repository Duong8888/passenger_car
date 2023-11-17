@extends('client.layout.master')

@section('content')
<section class="py-28 dark:bg-neutral-800">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 gap-5">
            <div class="">
                <h3 class="mb-3 text-3xl text-blue-600 ">Đặt chỗ thành công</h3>
            </div>
        </div>
        <div class="flex justify-between">
            <div style="width: 60%;">
                <p>Chúng tôi đã gửi thông tin chuyến đi đến email <span style="color: blue">{{
                        session('value')[0]['email'] }}</span> bạn hãy kiểm tra lại nhé </p>
                <p style="margin-top: 100px; font-size: 20px;font-weight: bold;">Thông tin vé</p>
                <table style="border-collapse: collapse; width: 100%;">
                    <tr>
                        <th
                            style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; background-color: #f2f2f2;">
                            Nhà xe</th>
                        <th
                            style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd; background-color: #f2f2f2;">
                            Tuyến Đường</th>

                    </tr>
                    <tr>
                        @foreach ($data as $value)
                        <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">Xe {{
                            $value->license_plate }}</td>
                        @endforeach
                        <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">{{
                            session('value')[0]['route_departure']}}-{{ session('value')[0]['route_arrival']}}</td>

                    </tr>
                </table>
                <hr>

                <div style="background-color: #f2f2f2; padding: 10px; margin-bottom: 20px;">
                    <p style="margin: 0;">Điểm đón</p>
                    <p>{{ session('value')[0]['departure']}}</p>
                    <p>Đón lúc: {{ session('value')[0]['time_departure']}}</p>
                </div>
                <hr>
                <div style="background-color: #e6e6e6; padding: 10px; margin-top: 20px;">
                    <p style="margin: 0;">Điểm trả</p>
                    <p>{{ session('value')[0]['arrival']}}</p>
                    <p>Đón lúc: {{ session('value')[0]['time_arrival']}}</p>
                </div>

              
               
            </div>

            <div style="width: 30%">
                <div
                    style="border: 1px solid #000; padding: 10px; display: flex; flex-direction: column; justify-content: space-between;">
                    <div style="margin-bottom: 10px;">
                        <p style="margin: 0; font-size: 14px;">Hành Khách :</p>
                        <p style="margin: 0; font-size: 16px;">{{ session('value')[0]['username'] }}</p>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p style="margin: 0; font-size: 14px;">Số điện thoại :</p>
                        <p style="margin: 0; font-size: 16px;">{{ session('value')[0]['phone'] }}</p>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p style="margin: 0; font-size: 14px;">Email :</p>
                        <p style="margin: 0; font-size: 16px;">{{ session('value')[0]['email'] }}</p>
                    </div>
                </div>
                <div
                    style="border: 1px solid #000; padding: 10px; display: flex; flex-direction: column; justify-content: space-between;margin-top: 50px">
                    <h3>Thông tin giao dịch</h3>
                    <div style="margin-bottom: 10px;">
                        <p style="margin: 0; font-size: 14px;">Hình thức thanh toán: đã thanh toán qua vnpay</p>
                    </div>
                    <div style="margin-bottom: 30px;">
                        <p style="margin: 0; font-size: 14px;">Trạng thái: Đã Thanh Toán Thành Công</p>
                       
                    </div>
                   
                    <div style="margin-bottom: 10px;">
                        <p class="showTotalPrice" style="margin: 0; font-size: 14px; font-size: 20px;font-weight: bold;">
                            {{number_format(session('value')[0]['total_price']) }}đ</p>
                     
                    </div>
                    
                </div>
            </div>
        </div>
       

    </div>
</section>
@endsection
@section('page-script')
<script src="{{ asset('client/js/custom/finish.js') }}"></script>
<script src="{{asset('client/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

<script src="{{asset('client/js/pages/job-list.init.js')}}"></script>

<script src="{{asset('client/js/pages/dropdown%26modal.init.js')}}"></script>


@endsection

