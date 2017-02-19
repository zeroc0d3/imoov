<!-- START @SIDEBAR LEFT -->
<aside id="sidebar-left" class="sidebar-circle">

  <!-- Start left navigation - profile shortcut -->
  <div id="tour-8" class="sidebar-content">
      <div class="media">
          <a class="pull-left has-notif avatar" href="page-profile.html">
              @include('laravel-authentication-acl::admin.layouts.partials.avatar', ['size' => 30])
              <i class="online"></i>
          </a>
          <div class="media-body">
              <h4 class="media-heading">Welcome,<span></span></h4>
              <small>{!! isset($logged_user) ? $logged_user->email : 'User' !!}</small>
          </div>
      </div>
  </div><!-- /.sidebar-content -->
  <!--/ End left navigation -  profile shortcut -->

  <!-- Start left navigation - menu -->
  <ul id="tour-9" class="sidebar-menu">

      <!-- Start navigation - dashboard -->
      <li class="submenu active">
          <a href="javascript:void(0);">
              <span class="icon"><i class="fa fa-home"></i></span>
              <span class="text">Dashboard</span>
          </a>
          <ul>
              <li class="active"><a href="{!! URL::route('dashboard.default') !!}" target="_top">Home</a></li>
          </ul>
      </li>
      <!--/ End navigation - dashboard -->

      <!-- Start category setting -->
      <li class="sidebar-category">
          <span>Settings</span>
          <span class="pull-right"><i class="fa fa-cogs"></i></span>
      </li>
      <!--/ End category settings -->

      <!-- Start navigation - users -->
      <li class="submenu">
          <a href="javascript:void(0);">
              <span class="icon"><i class="fa fa-user"></i></span>
              <span class="text">Users</span>
              <span class="arrow"></span>
          </a>
          <ul>
              <li><a href="{!! URL::route('users.list') !!}" target="_top">Users List</a></li>
              <li><a href="{!! URL::route('users.edit') !!}" target="_top">Add User</a></li>
          </ul>
      </li>
      <!--/ End navigation - users -->

      <!-- Start navigation - groups -->
      <li class="submenu">
          <a href="javascript:void(0);">
              <span class="icon"><i class="fa fa-users"></i></span>
              <span class="text">Groups</span>
              <span class="arrow"></span>
          </a>
          <ul>
              <li><a href="{!! URL::route('groups.list') !!}" target="_top">Groups List</a></li>
              <li><a href="{!! URL::route('groups.edit') !!}" target="_top">Add Group</a></li>
          </ul>
      </li>
      <!--/ End navigation - groups -->

      <!-- Start navigation - permissions -->
      <li class="submenu">
          <a href="javascript:void(0);">
              <span class="icon"><i class="fa fa-trophy"></i></span>
              <span class="text">Permissions</span>
              <span class="arrow"></span>
          </a>
          <ul>
              <li><a href="{!! URL::route('permission.list') !!}" target="_top">Permissions List</a></li>
              <li><a href="{!! URL::route('permission.edit') !!}" target="_top">Add Permission</a></li>
          </ul>
      </li>
      <!--/ End navigation - groups -->

      <!-- Start category my-profile -->
      <li class="sidebar-category">
          <span>My Profile</span>
          <span class="pull-right"><i class="fa fa-user"></i></span>
      </li>
      <!--/ End category settings -->

      <!-- Start navigation - profile -->
      <li class="submenu">
          <a href="javascript:void(0);">
              <span class="icon"><i class="fa fa-book"></i></span>
              <span class="text">Profile</span>
              <span class="arrow"></span>
          </a>
          <ul>
              <li><a href="{!! URL::route('users.selfprofile.edit') !!}" target="_top">Edit</a></li>
              <li><a href="#">Change Password</a></li>
          </ul>
      </li>
      <!--/ End navigation - profile -->

      <!-- Start navigation - logout -->
      <li class="submenu">
          <a id="logout3" data-url="{!! URL::route('user.logout') !!}" href="javascript:void(0);" data-toggle="tooltip" data-placement="top">
              <span class="icon"><i class="fa fa-sign-out"></i></span>
              <span class="text">Logout</span>
          </a>
      </li>
      <!--/ End navigation - profile -->

  </ul><!-- /.sidebar-menu -->
  <!--/ End left navigation - menu -->

  <!-- Start left navigation - footer -->
  <div id="tour-10" class="sidebar-footer hidden-xs hidden-sm hidden-md">
      <a id="setting" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Setting"><i class="fa fa-cog"></i></a>
      <a id="fullscreen" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Fullscreen"><i class="fa fa-desktop"></i></a>
      <a id="lock-screen" data-url="{!! URL::route('user.admin.login') !!}" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Lock Screen"><i class="fa fa-lock"></i></a>
      <a id="logout" data-url="{!! URL::route('user.logout') !!}" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Logout"><i class="fa fa-power-off"></i></a>
  </div><!-- /.sidebar-footer -->
  <!--/ End left navigation - footer -->

</aside><!-- /#sidebar-left -->
<!--/ END SIDEBAR LEFT -->
