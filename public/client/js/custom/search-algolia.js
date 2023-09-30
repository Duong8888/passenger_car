$(document).ready(function () {
    const departure = $('select[name="departure"]');
    const arrival = $('select[name="arrival"]');
    const baseUrl = 'search';
    const dataList = $('.list-route');
    let skeleton = `
    <div role="status" class="w-full p-4 space-y-4 border border-gray-200 divide-y divide-gray-200 rounded shadow animate-pulse dark:divide-gray-700 md:p-6 dark:border-gray-700">
        <div class="flex items-center justify-between">
            <div>
                <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
                <div class="w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
            </div>
            <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div>
        </div>
        <div class="flex items-center justify-between pt-4">
            <div>
                <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
                <div class="w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
            </div>
            <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div>
        </div>
        <div class="flex items-center justify-between pt-4">
            <div>
                <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
                <div class="w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
            </div>
            <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div>
        </div>
        <div class="flex items-center justify-between pt-4">
            <div>
                <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
                <div class="w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
            </div>
            <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div>
        </div>
        <div class="flex items-center justify-between pt-4">
            <div>
                <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24 mb-2.5"></div>
                <div class="w-32 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
            </div>
            <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-700 w-12"></div>
        </div>
        <span class="sr-only">Loading...</span>
    </div>
    `;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    departure.on('change', function (e) {
        departure.val(e.target.value);
        search();
    });

    arrival.on('change', function (e) {
        arrival.val(e.target.value);
        search();
    });
    console.log(arrival.val());
    function search(){
        dataList.html('');
        dataList.append(skeleton);
        $.ajax({
            url: baseUrl,
            method: 'GET',
            data: {
                departure: departure.val(),
                arrival: arrival.val()
            },
            success: function (response) {
                console.log(response.dataRoute);
                dataList.html('');
                $.each(response.data,function (index,item){
                    dataList.append(`
                                    <div class="relative overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                        <div class="p-6">
                                            <div class="grid grid-cols-12 gap-5">
                                                <div class="col-span-12 lg:col-span-1">
                                                    <div class="px-2 mb-4 text-center mb-md-0">
                                                        <a href="company-details.html"><img src="assets/images/featured-job/img-01.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-10">
                                                    <h5 class="mb-1 fs-17"><a href="job-details.html" class="dark:text-gray-50">Dương Đẹp Trai 102</a>
                                                        <small class="font-normal text-gray-500 dark:text-gray-300"></small>
                                                    </h5>
                                                    <ul class="mb-0 lg:gap-3 gap-y-3">
                                                        <li>
                                                            <p class="mb-0 mt-4 text-sm text-gray-500 dark:text-gray-300">${response.dataRoute.departure} - ${response.dataRoute.arrival}</p>
                                                        </li>
                                                        <li>
                                                            <p class="mb-0 text-sm text-gray-500 dark:text-gray-300">Gế ngồi ${item.capacity}</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <div class="px-4 py-3 bg-gray-50 dark:bg-neutral-700">
                                            <div class="grid grid-cols-12">
                                                <div class="col-span-12 lg:col-span-6">
                                                    <ul class="flex flex-wrap gap-2 text-gray-700 dark:text-gray-50">
                                                        <li><i class="uil uil-tag"></i> Giá Vé :</li>
                                                        <li>${response.dataRoute.price.toLocaleString('en-US')}đ</li>
                                                    </ul>
                                                </div>
                                                <!--end col-->
                                                <div class="col-span-12 mt-2 lg:col-span-6 lg:mt-0">
                                                    <div class="ltr:lg:text-right rtl:lg:text-left dark:text-gray-50">
                                                        <a href="#applyNow" data-bs-toggle="modal">Chi tiết <i class="mdi mdi-chevron-double-right"></i></a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>

                                    </div>
                    `);
                })
            },
            error: function (error) {
                console.log(error);
                dataList.html('');
                dataList.append(`
                    <div class="text-center">
                       Tuyến đường chưa có xe hoạt động .
                    </div>
                `)
            }
        })


    }
});
