<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"> 
                    <span>Main</span>
                </li>
                <li class="{{ Request::is('backsite/dashboard/index') ? 'active' : '' }}"> 
                    <a href="{{ route('backsite.dashboard.index') }}"><i class="feather-grid"></i> <span>Dashboard</span></a>
                </li>
                {{-- @can('management-access') --}}
                <li class="menu-title"> 
                    <span>Management Access</span>
                </li>
                <li class="submenu {{ Request::is('backsite/management-access/permission/index','backsite/management-access/role/index','backsite/management-access/type-user/index','backsite/management-access/user/index') ? 'active' : '' }}">
                    <a href="#"><i class="feather-file-text"></i> <span> Management Access</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        
                        <li><a class="{{ Request::is('backsite/management-access/permission/index') ? 'active' : '' }}" href="{{ route('backsite.detail-mobil.index') }}">Detail Mobil</a></li>
                    </ul>
                </li>
                {{-- @endcan --}}
                
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->