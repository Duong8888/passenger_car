@extends('client.layout.master')
@section("title", "Thông báo đặt xe")
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
                       $email }}</span> bạn hãy kiểm tra lại nhé </p>
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
                        @if ($id !== '')
                           @foreach ($data as $value)
                        <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">Xe {{
                            $value->license_plate }}</td>
                        @endforeach  
                        @else
                        <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">Xe {{
                            $data }}</td>
                        @endif
                       
                        <td style="padding: 8px; text-align: left; border-bottom: 1px solid #ddd;">{{
                           $route_departure}}-{{ $route_arrival}}</td>

                    </tr>
                </table>
                <hr>

                <div style="background-color: #f2f2f2; padding: 10px; margin-bottom: 20px;">
                    <p style="margin: 0;">Điểm đón</p>
                    <p>{{  $departure}}</p>
                    <p>Đón lúc: {{ $time_departure}}</p>
                </div>
                <hr>
                <div style="background-color: #e6e6e6; padding: 10px; margin-top: 20px;">
                    <p style="margin: 0;">Điểm trả</p>
                    <p>{{ $arrival}}</p>
                    <p>Đón lúc: {{ $time_arrival}}</p>
                </div>
                @if ($id !== '')
                <button  id="cancel-ticket" style="display: block; margin: 0 auto; background-color: red; color: white; width: 100% ; margin-top: 50px; padding: 10px ">Hủy Vé</button>
                @endif
              
            </div>

            <div style="width: 30%">
                <div
                    style="border: 1px solid #000; padding: 10px; display: flex; flex-direction: column; justify-content: space-between;">
                    <div style="margin-bottom: 10px;">
                        <p style="margin: 0; font-size: 14px;">Hành Khách :</p>
                        <p style="margin: 0; font-size: 16px;">{{  $username }}</p>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p style="margin: 0; font-size: 14px;">Số điện thoại :</p>
                        <p style="margin: 0; font-size: 16px;">{{  $phone }}</p>
                    </div>
                    <div style="margin-bottom: 10px;">
                        <p style="margin: 0; font-size: 14px;">Email :</p>
                        <p style="margin: 0; font-size: 16px;">{{ $email }}</p>
                    </div>
                </div>
                <div
                    style="border: 1px solid #000; padding: 10px; display: flex; flex-direction: column; justify-content: space-between;margin-top: 50px">
                    <h3>Thông tin giao dịch</h3>
                    <div style="margin-bottom: 10px;">
                        <p style="margin: 0; font-size: 14px;">Hình thức thanh toán: thanh toán tại nhà xe</p>
                    </div>
                    <div style="margin-bottom: 30px;">
                        <p style="margin: 0; font-size: 14px;">Trạng thái: Trong Chờ Đợi</p>

                    </div>

                    <div style="margin-bottom: 10px;">
                        <p class="showTotalPrice" style="margin: 0; font-size: 14px; font-size: 20px;font-weight: bold;">
                            {{number_format($total_price) }}đ</p>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div id="popup" class="fixed inset-0 flex items-center justify-center bg-gray-500 bg-opacity-50 hidden w-80 h-96 z-50">
        <div class="bg-white p-6 rounded relative">
            <div class="flex justify-between items-center">
                <p>Chọn lý do hủy đơn hàng </p>
                <button class="top-0 right-0 text-gray-500 hover:text-gray-700 exit">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="flex items-center gap-x-3">
                <div class="rounded mx-auto mt-4">
                    <div class="rounded dark:border-neutral-600 nav-tabs bottom-border-tab col-span-12 lg:col-span-12 lg:col-start-12">
                        <div class="tab-content">
                            <div class="block w-full tab-pane p-4">
                                <input type="radio" id="option1" name="options" value="Tôi bận nên không đi nữa" class="mr-2">
                                <label for="option1">Tôi bận nên không đi nữa</label><br>
                                <input type="radio" id="option2" name="options" value="Tôi đặt nhầm giờ/ngày" class="mr-2">
                                <label for="option2">Tôi đặt nhầm giờ/ngày</label><br>
                                <input type="radio" id="option3" name="options" value="Tôi đặt nhầm tuyến đường" class="mr-2">
                                <label for="option3">Tôi đặt nhầm tuyến đường</label><br>
                                <input type="radio" id="option4" name="options" value="Hãng xe không có tiện ích cần thiết" class="mr-2">
                                <label for="option4">Hãng xe không có tiện ích cần thiết</label><br>
                                <input type="radio" id="option5" name="options" value="Tôi muốn đón dọc đường/trung chuyển nhưng nhà xe không đón" class="mr-2">
                                <label for="option5">Tôi muốn đón dọc đường/trung chuyển nhưng nhà xe không đón</label><br>
                                <input type="radio" id="option6" name="options" value="Bất khả kháng vì sức khỏe" class="mr-2">
                                <label for="option6">Bất khả kháng vì sức khỏe</label><br>
                                <button data-id="{{$id }}" data-action="{{ route('client.ticket.cancel-ticket') }}" id="cancled">Xác nhận hủy chuyến</button><br>
                                <button class="exit">Quay lại</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
<script>
    localStorage.removeItem("startTime");
</script>
@endsection
@section('page-script')
<script src="{{ asset('client/js/custom/finish.js') }}"></script>
<script src="{{asset('client/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

<script src="{{asset('client/js/pages/job-list.init.js')}}"></script>

<script src="{{asset('client/js/pages/dropdown%26modal.init.js')}}"></script>


@endsection

