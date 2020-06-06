<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin/dashboard">
        {{--<div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>--}}
        <div class="sidebar-brand-text mx-3">Corona Test<sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/admin/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Orders
    </div>

    <!-- Nav Item - Utilities Collapse Menu -->
    {{--   <li class="nav-item">
           <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
              aria-expanded="true" aria-controls="collapseUtilities">
               <i class="fas fa-fw fa-wrench"></i>
               <span>Manage patient</span>
           </a>
           <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
               <div class="bg-white py-2 collapse-inner rounded">
                   <h6 class="collapse-header">Manage Patient:</h6>
                   <a class="collapse-item" href="/admin/patient/show">Show Patient</a>
               </div>
           </div>
       </li>--}}

    <li class="nav-item">

        <a class="nav-link" href="/admin/patient/show">
            <i class="fas fa-user-md fa-chart-area"></i>
            <span>Total Test</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Manage Employees
    </div>
    {{--
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseClients"
               aria-expanded="true" aria-controls="collapseClients">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Manage Clients</span>
            </a>
            <div id="collapseClients" class="collapse" aria-labelledby="headingUtilities"
                 data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Manage Clients:</h6>
                    <a class="collapse-item" href="/client/show">Show Client</a>
                    <a class="collapse-item" href="/client/create">New Client</a>
                </div>
            </div>
        </li>--}}

    <li class="nav-item">

        <a class="nav-link" href="/admin/patient/create">
            <i class="fas fa-user fa-chart-area"></i>
            <span>Add Employee</span></a>
    </li>

    <li class="nav-item">

        <a class="nav-link" href="/admin/dealers">
            <i class="fas fa-user fa-chart-area"></i>
            <span>Dealers</span></a>
    </li>

    <li class="nav-item">

        <a class="nav-link" href="/admin/emplyees">
            <i class="fas fa-user fa-chart-area"></i>
            <span>Employee</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
