<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a class="brand-link">
        <i class="fas fa-dolly-flatbed"></i>
        <span class="brand-text font-weight-light">
            <strong>Sistem Logistik</strong>
        </span><br>
        <span class="brand-text font-weight-light">By Habibie</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                                                                                                                                                                                                                                                                                                                                                                                                                                                               with font-awesome or any other icon font library -->
                <li class="nav-item ">
                    <p class="d-none">{{ $level = auth::user()->level }}</p>
                    @if ($level == '1')
                        <a href="/beranda" class="nav-link ">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/beranda" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Laporan Keuangan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="./index2.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Laporan Pengiriman</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="./index3.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Laporan Komplain</p>
                                </a>
                            </li>
                        </ul>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-user-shield"></i>
                        <p>
                            Menu Admin
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <div>
                            <li class="nav-item">
                                <a href="/user" class="nav-link">
                                    <i class="fas fa-users-cog"></i>
                                    <p>User</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/settings" class="nav-link">
                                    <i class="fab fa-app-store-ios"></i>
                                    <p>Setting</p>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>
                </li>
                @endif
                @if ($level == '1' || $level == '2')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-user-tie"></i>
                            <p>
                                Supervisor Menu
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <div>
                                <li class="nav-item">
                                    <a href="/laporanspv" class="nav-link">
                                        <i class="far fa-file-alt"></i>
                                        <p>Laporan</p>
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </li>
                @endif
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-user-tag"></i>
                        <p>
                            Staff
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <div>
                            <li class="nav-item">
                                <a href="/frontline" class="nav-link">
                                    <i class="fas fa-cash-register"></i>
                                    <p>Front Line</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/warehouse" class="nav-link">
                                    <i class="fas fa-warehouse"></i>
                                    <p>Gudang</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/kurir" class="nav-link">
                                    <i class="fas fa-truck-loading"></i>
                                    <p>Kurir</p>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
