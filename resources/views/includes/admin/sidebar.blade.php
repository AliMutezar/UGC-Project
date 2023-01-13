<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-dolly"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> <sup>Globalindocargo</sup></div>
    </a>

    @can('isAdmin')
    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
        <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
            <a class="nav-link" href="/dashboard">
                <i class="fas fa-chart-line"></i>
                <span>Dashboard</span>
            </a>
        </li>
    @endcan

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Master Data
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ Request::routeIs('admin.*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-database"></i>
            <span>Manage</span>
        </a>
        <div id="collapseTwo" class="collapse {{ Request::routeIs('admin.*') ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Which one to manage </h6>
                
                @can('isAdmin')
                    <a class="collapse-item {{ Request::routeIs('admin.posts*') ? 'active' : '' }} " href="/admin/posts">News</a>
                    <a class="collapse-item {{ Request::routeIs('admin.categories*') ? 'active' : '' }} " href="/admin/categories">Category</a>
                    <a class="collapse-item {{ Request::routeIs('admin.users*') ? 'active' : '' }}" href="/admin/users">User</a>
                    <a class="collapse-item {{ Request::routeIs('admin.shipments*') ? 'active' : '' }}" href="/admin/shipments">Shipping</a>
                    <a class="collapse-item {{ Request::routeIs('admin.ugcfreelances*') ? 'active' : '' }}" href="/admin/ugcfreelances">UGC Freelance</a>
                @endcan
                    
                @can('isUser')
                    <a class="collapse-item {{ Request::routeIs('admin.posts*') ? 'active' : '' }} " href="/admin/posts">News</a>
                @endcan
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-users-cog"></i>
            <span>Prospective Employees</span>
        </a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->