<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">INDOTRAVI</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">T</a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="dropdown {{ request()->is('admin/dashboard') ? 'active' : '' }}">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          <ul class="dropdown-menu">
            <li class="{{ request()->is('admin/dashboard') ? 'active' : '' }}"><a class="nav-link" href="/admin/dashboard">Travel Dashboard</a></li>
          </ul>
        </li>
        <li class="menu-header">Starter</li>
        
        <li class="{{ request()->is('admin/destinations') ? 'active' : '' }}"><a class="nav-link " href="/admin/destinations"><i class="fas fa-th-large"></i> <span>Destinations</span></a></li>
        <li class="{{ request()->is('admin/transactions') ? 'active' : '' }}"><a class="nav-link " href="/admin/transactions"><i class="fas fa-credit-card"></i> <span>Transactions</span></a></li>
        <li class="{{ request()->is('admin/users') ? 'active' : '' }}"><a class="nav-link " href="/admin/users"><i class="fas fa-user"></i> <span>Users</span></a></li>
        </aside>
  </div>