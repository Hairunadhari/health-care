<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">TB - MedSchedule</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">TB</a>
      </div>
      <ul class="sidebar-menu">
        {{-- <li class="menu-header">Dashboard</li>
        <li class="dropdown {{ request()->is('admin/dashboard') ? 'active' : '' }}">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          <ul class="dropdown-menu">
            <li class="{{ request()->is('admin/dashboard') ? 'active' : '' }}"><a class="nav-link" href="/admin/dashboard">Travel Dashboard</a></li>
          </ul>
        </li> --}}
        <li class="menu-header">Menu</li>
        
        <li class="{{ request()->is('admin/log-history') ? 'active' : '' }}"><a class="nav-link " href="/admin/log-history"><i class="fas fa-th-large"></i> <span>Aktifitas Pengguna</span></a></li>
        <li class="{{ request()->is('admin/users') ? 'active' : '' }}"><a class="nav-link " href="/admin/users"><i class="fas fa-user"></i> <span>Users</span></a></li>
        <li>
    <a href="#"
       class="nav-link"
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fas fa-sign-out-alt"></i>
        <span>Logout</span>
    </a>

    <form id="logout-form" action="/logout" method="POST" class="hidden">
        @csrf
    </form>
</li>

        </aside>
  </div>