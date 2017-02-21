<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">
                Main Menu
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{!! asset('admin/users/dashboard') !!}"><i class="icon-speedometer"></i> Dashboard </a>
                <!--
                @if((isset($sidebar_items) && $sidebar_items))
                    @foreach($sidebar_items as $name => $data)
                        @if ($data['url'] != asset('admin/users/dashboard'))
                        <li class="nav-item {!! LaravelAcl\Library\Views\Helper::get_active($data['url']) !!}">
                            <a class="nav-link" href="{!! $data['url'] !!}" target="_top">{!! $data['icon'] !!} {{$name}}</a>
                        </li>
                        @endif
                    @endforeach
                @endif
                -->
            </li>

            <li class="nav-title">
                Account
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-people"></i> Users</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{!! URL::route('users.list') !!}" target="_top"><i class="icon-people"></i> Users List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{!! URL::route('users.edit') !!}" target="_top"><i class="icon-user-follow"></i> Add User</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-trophy"></i> Groups</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{!! URL::route('groups.list') !!}" target="_top"><i class="icon-badge"></i> Groups List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{!! URL::route('groups.edit') !!}" target="_top"><i class="icon-plus"></i> Add Group</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-key"></i> Permission</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{!! URL::route('permission.list') !!}" target="_top"><i class="icon-lock-open"></i> Permissions List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{!! URL::route('permission.edit') !!}" target="_top"><i class="icon-plus"></i> Add Permission</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-notebook"></i> My Profile</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{!! URL::route('users.selfprofile.edit') !!}" target="_top"><i class="icon-user"></i> Edit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" target="_top"><i class="icon-key"></i> Change Password</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{!! URL::route('user.logout') !!}" target="_top"><i class="icon-logout"></i> Logout</a>
                    </li>
                </ul>
            </li>

        </ul>
    </nav>
</div>
