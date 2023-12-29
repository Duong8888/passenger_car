@extends('admin.layouts.master')
@section('title', 'Danh sách đăng kí nhà xe')
@section('content')

    <div class="card">
        <div class="card-body">
            <div class="table">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <td>Phone</td>
                            <td>Tên nhà xe</td>
                            <td>Khu vực</td>
                            <td>Trạng thái</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                            <?php 
                                $color = "#6c757d";
                                if($item->status === "Đang xử lý"){
                                    $color = "#FF6633";
                                }else if($item->status === "Đã xử lý"){
                                    $color = "#00CC00";
                                }else if($item->status === "Đã hủy"){
                                    $color = "red";
                                }
                            ?>
                            <tr>
                                <td>#{{ $item->id }}</td>
                                <td>{{ $item->user_name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->passengerCar_name }}</td>
                                <td>{{ $item->province }}</td>
                                <td style="color: <?= $color;?>;">
                                    {{ $item->status }}
                                </td>
                                <td>
                                    <div class="dropdown float-end">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="detail/<?= $item->id ?>" class="dropdown-item">Xem chi tiết</a>
                                            <!-- item-->
                                            <a href="update/<?= $item->id ?>?type=edit" class="dropdown-item">Chỉnh sửa</a>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
