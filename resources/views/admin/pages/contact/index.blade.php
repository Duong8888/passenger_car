@extends('admin.layouts.master')
@section('title', 'Danh sách đăng kí nhà xe')
@section('content')

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
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
                            <tr>
                                <td>#{{ $item->id }}</td>
                                <td>{{ $item->user_name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->passengerCar_name }}</td>
                                <td>{{ $item->province }}</td>
                                <td>
                                    <?php
                                    if ($item->status == 'Chưa xử lý') {
                                        $status = 'Chưa xử lý';
                                        $selected = 'selected';
                                        $disable = "";
                                        $style = 'background-color: #FF5733; color: #FFFFFF;';
                                    } elseif ($item->status == 'Đang xử lý') {
                                        $status = 'Đang xử lý';
                                        $selected = 'selected';
                                        $style = 'background-color: #FFC300; color: #000000;';
                                        $disable = "";
                                    } else {
                                        $status = 'Đã xử lý';
                                        $selected = 'selected';
                                        $style = 'background-color: #00FF40; color: #000000;';
                                        $disable = "disabled";
                                    }
                                    ?>
                                    <form action="{{ route('admin.route_contact_edit', $item->id) }}" method="post"
                                        class="js-update-contact" class="btn btn-primary ml-5 ">
                                        @csrf
                                        <select class="js-select-status-contact status-ChuaXuLy" style="<?= $style ?>"
                                            name="status" class="js-select-status-contact">
                                                <option class="form-control"
                                                    style="background-color: #FF5733; color: #FFFFFF;" <?php if ($status == 'Chưa xử lý') {
                                                        echo $selected;
                                                    } ?>
                                                    <?php if ($disable) {
                                                        echo $disable;
                                                    } ?>
                                                    value="Chưa xử lý">
                                                    Chưa xử lý
                                                </option>
                                                <option class="form-control"
                                                    style="background-color: #FFC300; color: #000000;" <?php if ($status == 'Đang xử lý') {
                                                        echo $selected;
                                                    } ?>
                                                    <?php if ($disable) {
                                                        echo $disable;
                                                    } ?>
                                                    value="Đang xử lý">
                                                    Đang xử lý
                                                </option>
                                            <option class="form-control" style="background-color: #00FF40; color: #000000;"
                                                <?php if ($status == 'Đã xử lý') {
                                                    echo $selected;
                                                } ?> value="Đã xử lý">
                                                Đã xử lý
                                            </option>
                                        </select>
                                    </form>
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
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Hủy đăng kí</a>
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
