<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link" 
        href="{{ route('dashboard') }}"
      >
        <i class="bi bi-grid"></i><span>Trang chủ</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-heading">Trang</li>

    <li class="nav-item">
      <a class="nav-link collapsed"  
        href="{{ route('products.index') }}"
      >
      <i class="bi bi-menu-button-wide"></i><span>Sản phẩm</span>
      </a>
    </li><!-- End sản phẩm Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" 
        href="{{ route('categories.index') }}"
      >
        <i class="bi bi-journal-text"></i><span>Danh mục</span>
      </a>
    </li><!-- End danh mục Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" 
        href="{{ route('manufactures.index') }}"
      >
        <i class="bi bi-layout-text-window-reverse"></i><span>Nhà cung cấp</span>
      </a>
    </li><!-- End Contact Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" 
        href="{{ route('statistics.index') }}"
      >
        <i class="bi bi-bar-chart"></i><span>Thống kê</span>
      </a>
      <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="charts-chartjs.html">
            <i class="bi bi-circle"></i><span>Chart.js</span>
          </a>
        </li>
      </ul>
    </li><!-- End Register Page Nav -->
    
    <li class="nav-item">
      <a class="nav-link collapsed" 
        href="{{ route('users.index') }}"
      >
        <i class="bi bi-person"></i><span>Người dùng</span>
      </a>
    </li><!-- End Error 404 Page Nav -->
    
    <li class="nav-item">
      <a class="nav-link collapsed" 
        href="{{ route('bills.index') }}"
      >
        <i class="bi bi-card-list"></i><span>Hoá đơn</span>
      </a>
    </li><!-- End Blank Page Nav -->
    
    <li class="nav-item">
      <a class="nav-link collapsed" 
        {{-- href="{{ route('login') }}" --}}
      >
        <i class="bi bi-box-arrow-in-right"></i><span>Đăng xuất</span>
      </a>
    </li><!-- End Login Page Nav -->
  </ul>
    
 </aside><!-- End Sidebar-->