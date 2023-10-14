<div class="mt-4">
    <h5 class="mb-3 font-semibold text-17 dark:text-gray-50">
      Đổi mật khẩu
    </h5>
    <div class="grid grid-cols-12 gap-5">
        <div class="col-span-12">
            <div class="mb-3">
                <label for="current-password-input" class="text-sm text-gray-900 dark:text-gray-50">Mật khẩu hiện tại</label>
                <input type="password" class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600" placeholder="Mật khẩu hiện tại" id="current-password-input" name="current_password">
                @error('current_password')
                <div class="alert alert-danger mt-1 mb-1" style="color: red;font-size: 12px;">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <!--end col-->
        <div class="col-span-12 lg:col-span-6">
            <div class="mb-3">
                <label for="new-password-input" class="text-sm text-gray-900 dark:text-gray-50">Mật khẩu mới</label>
                <input type="password" class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600" placeholder="Mật khẩu mới" id="new-password-input" name="new_password">
                @error('new_password')
                <div class="alert alert-danger mt-1 mb-1" style="color: red;font-size: 12px;">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <!--end col-->
        <div class="col-span-12 lg:col-span-6">
            <div class="mb-3">
                <label for="confirm-password-input" class="text-sm text-gray-900 dark:text-gray-50">Xác nhận lại mật khẩu</label>
                <input type="password" class="w-full mt-1 text-gray-500 border rounded border-gray-100/50 text-13 dark:bg-transparent dark:border-neutral-600" placeholder="Xác nhận lại mật khẩu" id="confirm-password-input" name="new_password_confirmation">
                @error('new_password_confirmation')
                <div class="alert alert-danger mt-1 mb-1" style="color: red;font-size: 12px;">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <!--end col-->
        <div class="col-span-12">
            <div class="form-check">
                <input class="align-middle rounded cursor-pointer focus:ring-0 focus:ring-offset-0 bg-gray-50 border-gray-100/50 checked:bg-violet-500 checked:border-transparent dark:bg-transparent dark:border-neutral-600 dark:checked:bg-violet-500 dark:checked:border-transparent" type="checkbox" value="" id="verification">
                <label class="ml-2 align-middle dark:text-gray-300" for="verification">
                  kích hoạt xác minh qua số điện thoại
                </label>
                <button class="mt-8 text-right" style="float: right"><p class="text-white btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 border-transparent focus:ring group-data-[theme-color=violet]:focus:ring-violet-500/20 group-data-[theme-color=sky]:focus:ring-sky-500/20 group-data-[theme-color=red]:focus:ring-red-500/20 group-data-[theme-color=green]:focus:ring-green-500/20 group-data-[theme-color=pink]:focus:ring-pink-500/20 group-data-[theme-color=blue]:focus:ring-blue-500/20">Update</p></button>
                {{-- <style>.{float: left; display: flex;align-items: center;align-content: center}</style> --}}
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->
</div>
