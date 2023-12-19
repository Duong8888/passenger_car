@extends('admin.layouts.master')
@section("title", "Đổi mật khẩu")
@section('content')
<div class="container mx-auto">
    <div class="flex justify-center">
        <div class="w-full md:w-1/2">
            <div class="bg-white shadow-md rounded p-3">
                <div class="text-xl font-bold mb-4"><h3>{{ __('Đổi mật khẩu') }}</h3></div>
                @if (Session::has('success'))
                    <div style="color: green;
                    font-size: 20px;" class="bg-green-100 border-l-4 border-green-500 text-green-700" role="alert">
                        <p>{{ Session::get('success') }}</p>
                    </div>
                @endif
                <form method="POST" action="{{ url('admin/change-password') }}" class="mb-4">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Email') }}</label><br>
                        <input disabled style="width: 50%;" id="email" value="{{$user->email}}" type="text" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="current_password" required autocomplete="current-password">
                    </div>

                    <div class="mb-4">
                        <label for="current_password" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Mật khẩu cũ') }}</label><br>
                        <input style="width: 50%;" id="current_password" type="password" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('current_password') border-red-500 @enderror" name="current_password" required autocomplete="current-password">
                        @error('current_password')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Mật khẩu mới') }}</label><br>
                        <input style="width: 50%;" id="password" type="password" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">
                        <br>
                        @error('password')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Nhập lại mật khẩu mới') }}</label><br>
                        <input style="width: 50%;" id="password_confirmation" type="password" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="flex items-center justify-between">
                        <button style="background: gray;
                        border: none;" type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            {{ __('Cập nhật') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection