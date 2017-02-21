<header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler hidden-lg-up" type="button">&#9776;</button>
    <a class="navbar-brand" href="#"></a>
    <ul class="nav navbar-nav hidden-md-down">
        <li class="nav-item">
            <a class="nav-link navbar-toggler sidebar-toggler" href="#">&#9776;</a>
        </li>

        <!--
        @if(isset($menu_items))
            @foreach($menu_items as $item)
                <li class="nav-item px-1 {!! LaravelAcl\Library\Views\Helper::get_active_route_name($item->getRoute()) !!}">
                    <a href="{!! $item->getLink() !!}">{!!$item->getName()!!}</a>
                </li>
            @endforeach
        @endif
        -->

    </ul>

    <ul class="nav navbar-nav ml-auto">
        <!-- Notification Icons -->
        <!--
        <li class="nav-item hidden-md-down">
            <a class="nav-link" href="#"><i class="icon-bell"></i><span class="badge badge-pill badge-danger">5</span></a>
        </li>
        <li class="nav-item hidden-md-down">
            <a class="nav-link" href="#"><i class="icon-envelope"></i><span class="badge badge-pill badge-danger">12</span></a>
        </li>
        -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                @include('laravel-authentication-acl::admin.layouts.partials.avatar', ['size' => 30])
                <span class="hidden-md-down">{!! isset($logged_user) ? $logged_user->email : 'User' !!}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center">
                    <strong>Settings</strong>
                </div>
                <a class="dropdown-item" href="{!! URL::route('users.selfprofile.edit') !!}"><i class="fa fa-user"></i> Profile</a>
                <a class="dropdown-item" href="#" target="_top"><i class="fa fa-key"></i> Change Password</a>
                <a class="dropdown-item" href="{!! URL::route('user.logout') !!}" target="_top"><i class="fa fa-sign-out"></i> Logout</a>
            </div>
        </li>
        <!--
        <li class="nav-item hidden-md-down">
            <a class="nav-link navbar-toggler aside-menu-toggler" href="#">&#9776;</a>
        </li>
        -->
        <li class="nav-item hidden-md-down">
            <a class="nav-link" href="{!! URL::route('user.logout') !!}" target="_top" title="logout"><i class="icon-logout"></i></a>
        </li>
    </ul>
</header>
