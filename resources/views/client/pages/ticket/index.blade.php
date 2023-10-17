@extends('client.layout.master')

@section('content')
<section class="py-20 bg-gray-50 dark:bg-neutral-700 ">
    <div class="container mx-auto">
        <div class="mb-5">
            <h4 class="mb-3 text-lg text-gray-900 dark:text-gray-50">Diverse and secure payment methods</h4>
        </div>

        <div class="flex justify-between">
            <div class="w-2/3 border p-4 w-full mr-1">
                <h5 class="mb-3 text-1 text-gray-900 dark:text-gray-50">Payment methods</h5>
                <div class=" w-full mb-5">
                    <input type="radio" id="option1" name="options" class="form-radio h-5 w-5 text-blue-600">
                    <label for="option1" class="ml-2 mb-3">Pay with VNPAY</label>
                    <p class="mb-5">The device needs to have a Banking Application (Mobile Banking) or VNPAY Wallet installed </p>
                    <div class="mb-5 show-infomation1"></div>
                </div>

                <div class="w-full mb-5">
                    <input type="radio" id="option2" name="options" class="form-radio h-5 w-5 text-blue-600">
                    <label for="option2" class="ml-2">
                        Pay at the garage</label>
                    <p class="mb-5">Please go to the bus office and pay the staff at the counter to get your ticket</p>
                    <div class="mb-5 show-infomation2"></div>
                </div>

                <div class=" w-full mb-5">
                    <input type="radio" id="option3" name="options" class="form-radio h-5 w-5 text-blue-600">
                    <label for="option3" class="ml-2 mb-3">Momo wallet</label>
                    <p class="mb-5">Your phone must have the MoMo application installed </p>
                    <div class="mb-5 show-infomation3"></div>
                </div>
            </div>
            <div class="w-1/3">
                <div class="mb-5 border p-4">
                    <h5 class="mb-3 text-1 text-gray-900 dark:text-gray-50">
                        Trip information</h5>
                    <h6 class="mb-3 text-1 text-gray-900 dark:text-gray-50">Passenger Name</h6>
                    <p class="mb-3">{{ session('value')[0]['username'] }}</p>
                    <h6 class="mb-3 text-1 text-gray-900 dark:text-gray-50">Phone</h6>
                    <p class="mb-3">{{ session('value')[0]['phone'] }}</p>
                    <h6 class="mb-3 text-1 text-gray-900 dark:text-gray-50">Email</h6>
                    <p class="mb-3">{{ session('value')[0]['email'] }}</p>
                    <hr class="border border-gray-300">
                    <h6 class="mb-3 text-1 text-gray-900 dark:text-gray-50">Departure</h6>
                    <p class="mb-3">{{ session('value')[0]['departure'] }}</p>
                    <h6 class="mb-3 text-1 text-gray-900 dark:text-gray-50">Arrival</h6>
                    <p class="mb-3">{{ session('value')[0]['arrival'] }}</p>
                </div>
                <div class="flex mb-5 p-4 justify-between">
                    <h4 class="mb-3 text-1 text-gray-900 dark:text-gray-50">Tổng tiền</h4>
                    <p>{{number_format(session('value')[0]['total_price']) }}đ</p>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed bottom-0 left-0 right-0 p-4 bg-white shadow-md flex justify-center offline-ticket hidden">
        <button data-action="{{ route('client.ticket.end-payment-ticket') }}" data-session="{{ json_encode(session('value'))  }}" style="background: yellow ; width: 50%; padding: 10px;margin:5px" class="finish-ticket-offline">Booking</button>
        <h6 class="mb-3 text-lg text-gray-900 dark:text-gray-50">Click Book to finish payment</h6>
    </div>

    <form action="{{ route('client.ticket.vnpay-method') }}" method="POST" class="fixed bottom-0 left-0 right-0 p-4 bg-white shadow-md flex justify-center vnpay-ticket hidden">
        @csrf
        <button name="redirect" style="background: yellow ; width: 50%; padding: 10px;margin:5px" id="payment-vnp" class="btn bg-dark text-gray-900" id="payment-vnp" type="submit" >Thanh toán VNPay</button>
        <input type="hidden" value="{{ json_encode(session('value')) }}" name="session">
        
        <h6 class="mb-3 text-lg text-gray-900 dark:text-gray-50">Click Book to finish payment</h6>
    </form>

    <form method="Post" action="{{ route('client.ticket.momo-method') }}" class="fixed bottom-0 left-0 right-0 p-4 bg-white shadow-md flex justify-center momo-ticket hidden">
        @csrf
        <button type="submit" name="redirect" style="background: yellow ; width: 50%; padding: 10px;margin:5px">Momo Payment</button>
        <input type="hidden" value="{{ json_encode(session('value')) }}">
        <h6 class="mb-3 text-lg text-gray-900 dark:text-gray-50">Click to finish payment</h6>
    </form>
</section>

@endsection
@section('page-script')
<script src="{{ asset('client/js/custom/Payment-detail.js') }}"></script>
@endsection