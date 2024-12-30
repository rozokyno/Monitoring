<ul
    class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
    id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a
        class="sidebar-brand d-flex align-items-center justify-content-center"
        href="{{route('admin.dashboard.index')}}">
        <div class="sidebar-brand-text mx-3">Monitoring Jaringan</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0" />

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.dashboard.index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider" />
    <!-- Heading -->
    <div class="sidebar-heading">Addons</div>

    <!-- Nav Item - Charts -->
    <!-- <li class="nav-item">
        <a class="nav-link" href="#">
            <img
                src="assets/icons/user-alt-1-svgrepo-com.svg"
                style="width: 20px"
                alt="" />
            <span>Profile</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <img
                src="assets/icons/server-svgrepo-com_2.svg"
                style="width: 20px"
                alt="" />
            <span>Add Route</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <img
                src="assets/icons/computer-and-monitor-svgrepo-com.svg"
                style="width: 20px"
                alt="" />
            <span>Traffic</span></a>
    </li> -->

    <!-- Nav Item - Tables -->
    <!-- <li class="nav-item">
        <a class="nav-link" href="#">
            <img
                src="assets/icons/add-user-friends-svgrepo-com.svg "
                style="width: 20px"
                alt="" />
            <span>Add Users</span></a>
    </li> -->
    <li class="nav-item">
        <a class="nav-link" href="{{url('/tables')}}">
            <img
                src="assets/icons/table-cells-svgrepo-com.svg"
                style="width: 20px"
                alt="" />
            <span>IP Computer</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.dashboard.speedtest')}}">
        <img
                src="assets/icons/speedtest.svg"
                style="width: 20px"
                alt="" />
            <span>Sppedtest</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block" />

    <!-- Sidebar Toggler (Sidebar) -->
</ul>
