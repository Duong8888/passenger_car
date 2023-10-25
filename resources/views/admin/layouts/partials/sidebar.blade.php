<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">

            <img src="admin/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-md">
            <div class="dropdown">
                <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown"  aria-expanded="false">Nguyễn Ánh Dương</a>
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

            <p class="text-muted left-user-info">Admin Head</p>

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

{{--                <li class="menu-title">Navigation</li>--}}

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

{{--                <li>--}}
{{--                    <a href="#email" data-bs-toggle="collapse">--}}
{{--                        <i class="mdi mdi-email-outline"></i>--}}
{{--                        <span> Email </span>--}}
{{--                        <span class="menu-arrow"></span>--}}
{{--                    </a>--}}
{{--                    <div class="collapse" id="email">--}}
{{--                        <ul class="nav-second-level">--}}
{{--                            <li>--}}
{{--                                <a href="email-inbox.html">Inbox</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="email-templates.html">Email Templates</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}

                <li>
                    <a href="{{ route('ticket.index') }}" >
                        <i class="mdi mdi-texture"></i>
                        <span>Tickets</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('service.index') }}" data-bs-toggle="collapse">
                        <i class="mdi mdi-clipboard-outline"></i>
                        <span> Services </span>
                        {{-- <span class="menu-arrow"></span> --}}
                    </a>
                    {{-- <div class="collapse" id="sidebarTasks">
                        <ul class="nav-second-level">
                            <li>
                                <a href="task-kanban-board.html">Kanban Board</a>
                            </li>
                            <li>
                                <a href="task-details.html">Details</a>
                            </li>
                        </ul>
                    </div> --}}
                </li>

                <li>
                    <a href="{{ route('route.index') }}">
                        <i class="mdi mdi-table"></i>
                        <span> Route </span>
                    </a>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
