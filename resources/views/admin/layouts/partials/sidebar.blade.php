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

<<<<<<< HEAD
                <li>
                    <a href="#email" data-bs-toggle="collapse">
                        <i class="mdi mdi-email-outline"></i>
                        <span> Email </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="email">
                        <ul class="nav-second-level">
                            <li>
                                <a href="email-inbox.html">Inbox</a>
                            </li>
                            <li>
                                <a href="email-templates.html">Email Templates</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="{{ route('stop.index') }}">
                        <i class="mdi mdi-clipboard-outline"></i>
                        <span> Quản lý các điểm dừng </span>
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
                    <a href="apps-projects.html">
                        <i class="mdi mdi-briefcase-variant-outline"></i>
                        <span> Projects </span>
                    </a>
                </li>

                <li>
                    <a href="#report" data-bs-toggle="collapse">
                        <i class="mdi mdi-book-open-page-variant-outline"></i>
                        <span>Report </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="report">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('admin.user.report') }}">Users Report</a>
                            </li>
                            <li>
                                <a href="contacts-profile.html">Profile</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title mt-2">Custom</li>

                <li>
                    <a href="#sidebarAuth" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-multiple-plus-outline"></i>
                        <span> Auth Pages </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAuth">
                        <ul class="nav-second-level">
                            <li>
                                <a href="auth-login.html">Log In</a>
                            </li>
                            <li>
                                <a href="auth-register.html">Register</a>
                            </li>
                            <li>
                                <a href="auth-recoverpw.html">Recover Password</a>
                            </li>
                            <li>
                                <a href="auth-lock-screen.html">Lock Screen</a>
                            </li>
                            <li>
                                <a href="auth-confirm-mail.html">Confirm Mail</a>
                            </li>
                            <li>
                                <a href="auth-logout.html">Logout</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarExpages" data-bs-toggle="collapse">
                        <i class="mdi mdi-file-multiple-outline"></i>
                        <span> Extra Pages </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarExpages">
                        <ul class="nav-second-level">
                            <li>
                                <a href="pages-starter.html">Starter</a>
                            </li>
                            <li>
                                <a href="pages-pricing.html">Pricing</a>
                            </li>
                            <li>
                                <a href="pages-timeline.html">Timeline</a>
                            </li>
                            <li>
                                <a href="pages-invoice.html">Invoice</a>
                            </li>
                            <li>
                                <a href="pages-faqs.html">FAQs</a>
                            </li>
                            <li>
                                <a href="pages-gallery.html">Gallery</a>
                            </li>
                            <li>
                                <a href="pages-404.html">Error 404</a>
                            </li>
                            <li>
                                <a href="pages-500.html">Error 500</a>
                            </li>
                            <li>
                                <a href="pages-maintenance.html">Maintenance</a>
                            </li>
                            <li>
                                <a href="pages-coming-soon.html">Coming Soon</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarLayouts" data-bs-toggle="collapse">
                        <i class="mdi mdi-dock-window"></i>
                        <span> Layouts </span>
                        <span class="menu-arrow"></span>

                    </a>
                    <div class="collapse" id="sidebarLayouts">
                        <ul class="nav-second-level">
                            <li>
                                <a href="layouts-horizontal.html">Horizontal</a>
                            </li>
                            <li>
                                <a href="layouts-preloader.html">Preloader</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title mt-2">Components</li>

                <li>
                    <a href="#sidebarReport" data-bs-toggle="collapse">
                        <i class="mdi mdi-briefcase-outline"></i>
                        <span>Report </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarReport">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('admin.user-report') }}">User Report</a>
                            </li>
                            <li>
                                <a href="">Ticket Report</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="widgets.html">
                        <i class="mdi mdi-gift-outline"></i>
                        <span> Widgets </span>
                    </a>
                </li>

                <li>
                    <a href="#sidebarExtendedui" data-bs-toggle="collapse">
                        <i class="mdi mdi-layers-outline"></i>
                        <span class="badge bg-info float-end">Hot</span>
                        <span> Extended UI </span>
                    </a>
                    <div class="collapse" id="sidebarExtendedui">
                        <ul class="nav-second-level">
                            <li>
                                <a href="extended-range-slider.html">Range Slider</a>
                            </li>
                            <li>
                                <a href="extended-sweet-alert.html">Sweet Alert</a>
                            </li>
                            <li>
                                <a href="extended-draggable-cards.html">Draggable Cards</a>
                            </li>
                            <li>
                                <a href="extended-tour.html">Tour Page</a>
                            </li>
                            <li>
                                <a href="extended-notification.html">Notification</a>
                            </li>
                            <li>
                                <a href="extended-treeview.html">Tree View</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarIcons" data-bs-toggle="collapse">
                        <i class="mdi mdi-shield-outline"></i>
                        <span> Icons </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarIcons">
                        <ul class="nav-second-level">
                            <li>
                                <a href="icons-feather.html">Feather Icons</a>
                            </li>
                            <li>
                                <a href="icons-mdi.html">Material Design Icons</a>
                            </li>
                            <li>
                                <a href="icons-dripicons.html">Dripicons</a>
                            </li>
                            <li>
                                <a href="icons-font-awesome.html">Font Awesome 5</a>
                            </li>
                            <li>
                                <a href="icons-themify.html">Themify</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="{{ route('ticket.index') }}" >
                        <i class="mdi mdi-texture"></i>
                        <span>Tickets</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('service.index') }}">
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

                <li>
                    <a href="#sidebarCharts" data-bs-toggle="collapse">
                        <i class="mdi mdi-chart-donut-variant"></i>
                        <span> Charts </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCharts">
                        <ul class="nav-second-level">
                            <li>
                                <a href="charts-flot.html">Flot Charts</a>
                            </li>
                            <li>
                                <a href="charts-morris.html">Morris Charts</a>
                            </li>
                            <li>
                                <a href="charts-chartjs.html">Chartjs Charts</a>
                            </li>
                            <li>
                                <a href="charts-chartist.html">Chartist Charts</a>
                            </li>
                            <li>
                                <a href="charts-sparklines.html">Sparkline Charts</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarMaps" data-bs-toggle="collapse">
                        <i class="mdi mdi-map-outline"></i>
                        <span> Maps </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarMaps">
                        <ul class="nav-second-level">
                            <li>
                                <a href="maps-google.html">Google Maps</a>
                            </li>
                            <li>
                                <a href="maps-vector.html">Vector Maps</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarMultilevel" data-bs-toggle="collapse">
                        <i class="mdi mdi-share-variant"></i>
                        <span> Multi Level </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarMultilevel">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#sidebarMultilevel2" data-bs-toggle="collapse">
                                    Second Level <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarMultilevel2">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="javascript: void(0);">Item 1</a>
                                        </li>
                                        <li>
                                            <a href="javascript: void(0);">Item 2</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarMultilevel3" data-bs-toggle="collapse">
                                    Third Level <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarMultilevel3">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="javascript: void(0);">Item 1</a>
                                        </li>
                                        <li>
                                            <a href="#sidebarMultilevel4" data-bs-toggle="collapse">
                                                Item 2 <span class="menu-arrow"></span>
                                            </a>
                                            <div class="collapse" id="sidebarMultilevel4">
                                                <ul class="nav-second-level">
                                                    <li>
                                                        <a href="javascript: void(0);">Item 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript: void(0);">Item 2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
=======
>>>>>>> fa5f13836c1d635f36cb02ef4fa71be455d34794
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
