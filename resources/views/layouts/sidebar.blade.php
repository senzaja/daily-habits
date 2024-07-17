<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark2">
            <a href="{{ url('/') }}" class="logo">
                <img src="{{ asset('assets/img/habit.svg') }}" alt="navbar brand" class="navbar-brand" height="40" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                    <a href="{{ url('/home') }}" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Components</h4>
                </li>
                
                <li class="nav-item {{ request()->is('supplier*') ? 'active' : '' }}">
                    <a href="{{ url('user') }}" class="collapsed" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        <p>user</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('kategori*') ? 'active' : '' }}">
                    <a href="{{ url('kategori') }}" class="collapsed" aria-expanded="false">
                        <i class="bi bi-grid"></i>
                        <p>Kategori</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('produk*') ? 'active' : '' }}">
                    <a href="{{ url('feedback') }}" class="collapsed" aria-expanded="false">
                    <i class="bi bi-chat-left-dots"></i>
                        <p>Feedback</p>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
</div>
