	<!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">
                        <span>Dashboard</span>
                    </li>
                    <li class="submenu">
                        <a href="#" class="noti-dot">
                            <i class="la la-dashboard"></i>
                            <span> Dashboard</span> <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li><a class="active" href="{{ route('home') }}">Admin Dashboard</a></li>
                            <li><a href="{{ route('em/dashboard') }}">Employee Dashboard</a></li>
                        </ul>
                    </li>
                    @if (Auth::user()->role_name=='Admin')
                        <li class="menu-title"> <span>Authentication</span> </li>
                        <li class="submenu">
                            <a href="#">
                                <i class="la la-user-secret"></i> <span> User Controller</span> <span class="menu-arrow"></span>
                            </a>
                            <ul style="display: none;">
                                <li><a href="{{ route('userManagement') }}">All User</a></li>
                                <li><a href="{{ route('activity/log') }}">Activity Log</a></li>
                                <li><a href="{{ route('activity/login/logout') }}">Activity User</a></li>
                            </ul>
                        </li>
                    @endif
                    <li class="menu-title"> <span>Message</span> </li>
                    <li class="submenu">
                        <a href="#">
                            <i class="la la-user"></i> <span> Message</span> <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li class="active" ><a  class="active" href="{{ route('all/employee/card') }}">Message</a></li>
                        </ul>
                    </li>
                    <li class="menu-title"> <span>Tarification</span> </li>
                    <li class="submenu"> <a href="#"><i class="la la-money"></i>
                        <span> Les tarifications </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="#"> Lister les tarifications </a></li>
                            <li><a href="#"> Ajouter des tarification </a></li>
                        </ul>
                    </li>
                    <li class="menu-title"> <span>Planification</span> </li>
                    <li><a href="termination.html"><i class="la la-times-circle"></i> <span>Les planifications</span></a></li>
                    <li class="menu-title"> <span>Devis</span> </li>
                    <li><a href="termination.html"><i class="la la-times-circle"></i> <span>Les devis</span></a></li>

                    <li class="menu-title"> <span>Role</span> </li>
                    <li> <a href="assets.html"><i class="la la-object-ungroup">
                        </i> <span>Les roles</span></a>
                    </li>
                    <li class="menu-title"> <span>Permission</span> </li>
                    <li class="submenu"> <a href="#"><i class="la la-user"></i>
                        <span> Les permissions </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="profile.html"> sous Menu 1 </a></li>
                        </ul>
                    </li>
                    <li class="menu-title"> <span>User</span> </li>
                    <li><a href="termination.html"><i class="la la-times-circle"></i> <span>Les utilisateurs</span></a></li>

                </ul>
            </div>
        </div>
    </div>	<!-- /Sidebar -->
