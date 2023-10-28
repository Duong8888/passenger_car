<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">


            <img src="https://i.imgur.com/GNi3im6.png" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-md">

            <div class="dropdown">

                <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown"  aria-expanded="false">

                @if(auth()->check())
                    <span class="hidden fw-medium xl:block">{{auth()->user()->name}}</span>
                @else
                    <span class="hidden fw-medium xl:block">Shawn L.</span>
                @endif

                </a>

                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock me-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>

            <p class="text-muted left-user-info">
            @foreach(auth()->user()->roles as $role)
                {{ $role->name }}
            @endforeach</p>

            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="#" class="text-muted left-user-info">
                        <i class="mdi mdi-cog"></i>
                    </a>
                </li>

                <li class="list-inline-item">
                    <a href="#">
                        <i class="mdi mdi-power"></i>
                    </a>
                </li>
            </ul>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">
                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Dashboard </span>

                    </a> --}}
                </li>
                <li>
                    <a href="{{ route('admin.revenue.index') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Thống kê doanh thu </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.category.index') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Quản lý danh mục </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.customer.index') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Quản lý khách hàng </span>
                    </a>
                </li>
                <li class="menu-title mt-2">Apps</li>

                <li>
                    <a href="{{ route('postsing') }}">
                        <i class="mdi mdi-calendar-blank-outline"></i>
                        <span> Quản lý tin tức </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('car.index')}}">
                        <i class="mdi mdi-forum-outline"></i>
                        <span> Quản lý xe </span>

                    </a>
                </li>
                @if(auth()->user()->hasAnyRole(['SupperAdmin', 'Admin', 'AdminPost']))
                    <li>
                        <a href="{{ route('postsing') }}">
                            <i class="mdi mdi-calendar-blank-outline"></i>
                            <span> Quản lý tin tức </span>
                        </a>
                    </li>
                @endif
                @if(auth()->user()->hasAnyRole(['SupperAdmin', 'Admin', 'Nhà xe']))
                    <li>
                        <a href="{{route('car.index')}}">
                            <i class="mdi mdi-forum-outline"></i>
                            <span> Quản lý xe </span>
                        </a>
                    </li>
                @endif


                @if(auth()->user()->hasAnyRole(['SupperAdmin']))
                    <li>
                        <a href="{{ route('permission.index') }}">
                            <i class="mdi mdi-briefcase-variant-outline"></i>
                            <span> Phân quyền user </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('rolePermission.index') }}">
                            <i class="mdi mdi-book-open-page-variant-outline"></i>
                            <span> Cài đặt quyền/vai trò </span>
                        </a>

                        <div class="collapse" id="report">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ route('admin.user.report') }}">Users Report</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.ticket.report') }}">Tickets Report</a>
                                </li>
                            </ul>
                        </div>

                    </li>
                @endif
                @if(auth()->user()->hasAnyRole(['SupperAdmin', 'Admin','AdminTicket']))
                    <li>
                        <a href="{{ route('ticket.index') }}" >
                            <i class="mdi mdi-texture"></i>
                            <span>Vé</span>
                        </a>
                    </li>
                @endif
                @if(auth()->user()->hasAnyRole(['SupperAdmin', 'Admin','Nhà xe']))
                    <li>
                        <a href="{{ route('service.index') }}">
                            <i class="mdi mdi-clipboard-outline"></i>
                            <span> Dịch vụ </span>
                        </a>
                    </li>
                @endif
                @if(auth()->user()->hasAnyRole(['SupperAdmin', 'Admin']))
                    <li>
                        <a href="{{ route('route.index') }}">
                            <i class="mdi mdi-table"></i>
                            <span> Route </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('route_staff_index') }}">
                            <i class="mdi mdi-table"></i>
                            <span> Quản lý nhà xe </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.user.report') }}">
                            <i class="mdi mdi-table"></i>
                            <span> Thống kê user </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.ticket.report') }}">
                            <i class="mdi mdi-table"></i>
                            <span> Thống kê vé </span>
                        </a>
                    </li>
                @endif


            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
