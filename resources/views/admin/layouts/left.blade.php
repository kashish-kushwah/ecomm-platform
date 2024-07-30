<!-- Sidebar wrapper start -->
<nav id="sidebar" class="sidebar-wrapper">

  <!-- App brand starts -->
  <div class="app-brand px-3 py-2 d-flex align-items-center">
    <a href="index.html">
      <img src="{{asset('admin-assets/images/logo.svg')}}" class="logo" alt="Bootstrap Gallery" />
    </a>
  </div>
  <!-- App brand ends -->

  <!-- Sidebar menu starts -->
  <div class="sidebarMenuScroll">
    <ul class="sidebar-menu">
      <li class="active current-page">
        <a href="{{ route('admin.dashboard') }}">
          <i class="bi bi-pie-chart"></i>
          <span class="menu-text">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="sales.html">
          <i class="bi bi-bar-chart-line"></i>
          <span class="menu-text">User Manager</span>
        </a>
      </li>
      <li>
        <a href="subscribers.html">
          <i class="bi bi-check-circle"></i>
          <span class="menu-text">Order Manager</span>
        </a>
      </li>
      
      <li class="treeview">
        <a href="#!">
          <i class="bi bi-stickies"></i>
          <span class="menu-text">Product Manager</span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="{{route('admin.category.index')}}">Categories</a>
          </li>
          <li>
            <a href="alerts.html">Products</a>
          </li>
          
        </ul>
      </li>
      
    </ul>
  </div>
  <!-- Sidebar menu ends -->

</nav>
<!-- Sidebar wrapper end -->
