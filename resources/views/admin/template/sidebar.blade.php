<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('template-admin') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE of me</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image" style="height: 40px; width: 50px;">
                <img src="{{ asset('template-admin') }}/dist/img/Meo-Ngao.jpg" style="width: 100%; height: 100%; border-radius: 50%;" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Luu Phuong</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('category.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Category
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('product.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Product
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('customer.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Customer
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('employees.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Employees
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
