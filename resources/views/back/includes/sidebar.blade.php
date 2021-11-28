
<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ Auth::user()->profile_photo_url }}" class="img-circle elevation-2" alt="{{Auth::user()->name}}">
        </div>
        <div class="info">
            <a href="#" class="d-block">{{Auth::user()->name}}</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-jet-dropdown-link href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                     this.closest('form').submit();">
                    <div class="text-danger text-bold" style="display: inline-block">{{ __('Log Out') }}</div>
                </x-jet-dropdown-link>
            </form>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Axtar" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{route('admin.dashboard')}}" class="nav-link {{request()->is('admin/dashboard') ? 'active' : ''}}">
                    <i class="nav-icon fas fa-home"></i>
                    <p>Əsas Səhifə</p>
                </a>
            </li>
            <li class="nav-item  {{request()->is('admin/settings*') ? 'menu-open' : ''}}">
                <a href="#" class="nav-link {{request()->is('admin/settings*') ? 'active' : ''}}">
                    <i class="nav-icon fas fa-cog"></i>
                    <p>
                        Parametrlər
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('admin.settings')}}" class="nav-link {{request()->is('admin/settings') ? 'active' : ''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Ümümi Parametrlər</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.contact')}}" class="nav-link {{request()->is('admin/settings/contact') ? 'active' : ''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Əlaqə Parametrləri</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
