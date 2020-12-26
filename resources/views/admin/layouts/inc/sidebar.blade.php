<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link {{ Request::is('admin/dashboard') ? 'active' : ''}}">
    @if(count($companies) > 0)
      <img src="{{ asset('storage/company/'.$company->company_logo) }}"
           alt="Admin Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-bold">Main Admin</span>
    </a>
    @else
    <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}"
           alt="Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text  font-weight-bold">Main Admin</span>
    </a>
    @endif

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('admin/dist/img/User-icon.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('admin.company.index_change') }}" class="d-block {{ Request::is('admin/dashboard') ? 'active' : ''}}">@if(count($companies) > 0)
                                                                                                                                  {{ $company->company_name }}
                                                                                                                                  @else
                                                                                                                                  {{ Auth::user()->name }}
                                                                                                                                  @endif</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ Request::is('admin/dashboard') ? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
               
              </p>
            </a>
            
          </li>
          <li class="nav-header">Company Management</li>
          <li class="nav-item has-treeview">
            <a href="{{ route('admin.company.view') }}" class="nav-link {{ Request::is('admin/company-master') ? 'active' : ''}}">
              <i class="nav-icon fas fa-building"></i>
              <p>
                Company
               
              </p>
            </a>
            
          </li>
          <li class="nav-item has-treeview {{ Request::is('admin/branch-master*') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{ Request::is('admin/branch-master*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-code-branch"></i>
              <p>
                Branch Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.branch.view') }}" class="nav-link {{ Request::is('admin/branch-master') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View all Branch</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.branch.add') }}" class="nav-link {{ Request::is('admin/branch-master/add') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add new Branch</p>
                </a>
              </li>

            </ul>
            <li class="nav-header">Staff Management</li>
          <li class="nav-item has-treeview {{ Request::is('admin/status-master*') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{ Request::is('admin/status-master*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-sort-amount-down-alt"></i>
              <p>
                Status
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.courier.index') }}" class="nav-link {{ Request::is('admin/status-master') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Courier</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.courier.pickup') }}" class="nav-link {{ Request::is('admin/status-master/pickup') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Courier Pickup</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.courier.shipped') }}" class="nav-link {{ Request::is('admin/status-master/shipped') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Shipped</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.courier.intransit') }}" class="nav-link {{ Request::is('admin/status-master/intransit') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Intransit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.courier.arrived') }}" class="nav-link {{ Request::is('admin/status-master/arrived') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Arrived at Destination</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.courier.delivery') }}" class="nav-link {{ Request::is('admin/status-master/delivery') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Out for Delivery</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.courier.delivered') }}" class="nav-link {{ Request::is('admin/status-master/delivered') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Delivered</p>
                </a>
              </li>
          </li>
          
        </ul>
        <li class="nav-header">Sales Report</li>
          <li class="nav-item has-treeview">
            <a href="{{ route('admin.courier.sales') }}" class="nav-link {{ Request::is('admin/sales-master') ? 'active' : ''}}">
              <i class="nav-icon fas fa-balance-scale "></i>
              <p>
                Report
               
              </p>
            </a>
            
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>