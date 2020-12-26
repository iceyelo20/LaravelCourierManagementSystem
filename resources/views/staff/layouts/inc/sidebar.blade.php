<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="container">
    <a href="{{ route('staff.dashboard') }}" class="brand-link {{ Request::is('staff/dashboard') ? 'active' : ''}}">
    
    @if(count($companies) > 0)
      <img src="{{ asset('storage/company/'.$company->company_logo) }}"
           alt="Admin Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-bold">Branch Admin</span>
    </a>
    @else
    <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}"
           alt="Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-bold">Branch Admin</span>
    </a>
    @endif
    </div >
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('admin/dist/img/User-icon.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('staff.dashboard') }}" class="d-block {{ Request::is('staff/dashboard') ? 'active' : ''}}">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="{{ route('staff.dashboard') }}" class="nav-link {{ Request::is('staff/dashboard') ? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
               
              </p>
            </a>
            
          </li>
          <li class="nav-header">Staff Management</li>
          <li class="nav-item has-treeview">
            <a href="{{ route('staff.courier.add') }}" class="nav-link {{ Request::is('staff/courier-master/add') ? 'active' : ''}}">
              <i class="nav-icon fas fa-truck"></i>
              <p>
                Add Courier
               
              </p>
            </a>
            
          </li> 
          <li class="nav-item has-treeview {{ Request::is('staff/staff-master*') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{ Request::is('staff/staff-master*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-code-branch"></i>
              <p>
                Status
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('staff.courier.view') }}" class="nav-link {{ Request::is('staff/staff-master') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Courier</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('staff.courier.pickup') }}" class="nav-link {{ Request::is('staff/staff-master/pickup') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Courier Pickup</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('staff.courier.shipped') }}" class="nav-link {{ Request::is('staff/staff-master/shipped') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Shipped</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('staff.courier.intransit') }}" class="nav-link {{ Request::is('staff/staff-master/intransit') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Intransit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('staff.courier.arrived') }}" class="nav-link {{ Request::is('staff/staff-master/arrived') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Arrived at Destination</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('staff.courier.delivery') }}" class="nav-link {{ Request::is('staff/staff-master/delivery') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Out for Delivery</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('staff.courier.delivered') }}" class="nav-link {{ Request::is('staff/staff-master/delivered') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Delivered</p>
                </a>
              </li>
               
            </ul>
          </li>
          <li class="nav-header">Tracking</li>
          <li class="nav-item has-treeview">
            <a href="{{ route('staff.courier.search') }}" class="nav-link {{ Request::is('staff/status-master/search') ? 'active' : ''}}">
              <i class="nav-icon fas fa-search"></i>
              <p>
                Search Courier
               
              </p>
            </a>
            
          </li> 
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>