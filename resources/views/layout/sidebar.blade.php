<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('dashboard.index') }}" aria-expanded="false"><i
                            class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('device.index') }}" aria-expanded="false"><i class="mdi mdi-database"></i><span
                            class="hide-menu">Masterdata</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('management-user.index') }}"
                        aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">User
                            Management</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('transaction.index') }}" aria-expanded="false"><i
                            class="mdi mdi-transfer"></i><span class="hide-menu">Logger</span></a></li>
                <br><br>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('login.index') }}" aria-expanded="false"><i class="mdi mdi-logout"></i><span
                            class="hide-menu">Log Out</span></a></li>
            </ul>

        </nav>
    </div>
</aside>
