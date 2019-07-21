<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin">
      <div class="sidebar-brand-icon">
        <i class="fas fa-birthday-cake"></i>
      </div>
      <div class="sidebar-brand-text mx-3">TeaCake</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('admin') ? 'active' : null}}">
      <a class="nav-link" href="admin">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Components</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Custom Components:</h6>
          <a class="collapse-item" href="buttons.html">Buttons</a>
          <a class="collapse-item" href="cards.html">Cards</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Utilities</span>
      </a>
      <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Custom Utilities:</h6>
          <a class="collapse-item" href="utilities-color.html">Colors</a>
          <a class="collapse-item" href="utilities-border.html">Borders</a>
          <a class="collapse-item" href="utilities-animation.html">Animations</a>
          <a class="collapse-item" href="utilities-other.html">Other</a>
        </div>
      </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pages</span>
      </a>
      <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Login Screens:</h6>
          <a class="collapse-item" href="login.html">Login</a>
          <a class="collapse-item" href="register.html">Register</a>
          <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
          <div class="collapse-divider"></div>
          <h6 class="collapse-header">Other Pages:</h6>
          <a class="collapse-item" href="404.html">404 Page</a>
          <a class="collapse-item" href="blank.html">Blank Page</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Loại sản phẩm Menu -->
    <li class="nav-item {{ Request::is(('admin/loaisp/*')) ? 'active' : null}}">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLoaiSP" aria-expanded="true" aria-controls="collapseLoaiSP">
        <i class="fas fa-bread-slice"></i>
        <span>Loại sản phẩm</span>
      </a>
      <div id="collapseLoaiSP" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item {{ Request::is('admin/loaisp/themloai') ? 'active' : null}}" href="admin/loaisp/themloai">Thêm loại sản phẩm</a>
          <a class="collapse-item {{ Request::is('admin/loaisp/xemloai') ? 'active' : null}}" href="admin/loaisp/xemloai">Xem loại sản phẩm</a>  
        </div>
      </div>
    </li>

    <!-- Nav Item - Sản phẩm Menu -->
    <li class="nav-item  {{ Request::is(('admin/sanpham/*')) ? 'active' : null}}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSanPham" aria-expanded="true" aria-controls="collapseSanPham">
          <i class="fas fa-hamburger"></i>
          <span>Sản phẩm</span>
        </a>
        <div id="collapseSanPham" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item {{Request::is(('admin/sanpham/themsanpham')) ? 'active' : null}}" href="admin/sanpham/themsanpham">Thêm sản phẩm</a>
            <a class="collapse-item {{ Request::is('admin/sanpham/xemsanpham') ? 'active' : null}}" href="admin/sanpham/xemsanpham">Xem sản phẩm</a>  
          </div>
        </div>
      </li>

    <!-- Nav Item - Charts -->

    <li class="nav-item  {{ Request::is(('admin/users/*')) ? 'active' : null}}">
      <a class="nav-link" href="admin/users/xemtaikhoan">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Quản lý nhân viên</span></a>
    </li>

    {{-- <li class="nav-item  {{ Request::is(('admin/don-hang/*')) ? 'active' : null}}">
      <a class="nav-link" href="admin/don-hang/xu-ly-don-hang">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Đơn đặt hàng</span></a>
    </li> --}}

    <!-- Nav Item - Đơn đặt hàng -->
    <li class="nav-item  {{ Request::is(('admin/don-hang/*')) ? 'active' : null}}">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDonHang" aria-expanded="true" aria-controls="collapseDonHang">
        <i class="fas fa-hamburger"></i>
        <span>Đơn hàng</span>
      </a>
      <div id="collapseDonHang" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item {{Request::is(('admin/don-hang/xu-ly-don-hang')) ? 'active' : null}}" href="admin/don-hang/xu-ly-don-hang">Xử lý đơn đặt hàng</a>
          <a class="collapse-item {{ Request::is('admin/don-hang/xem-don-hang-da-duyet') ? 'active' : null}}" href="admin/don-hang/xem-don-hang-da-duyet">Xem đơn hàng</a>  
        </div>
      </div>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link" href="tables.html">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>