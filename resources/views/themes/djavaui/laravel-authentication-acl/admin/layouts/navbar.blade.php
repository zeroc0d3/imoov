<!-- Start navbar toolbar -->
<div class="navbar navbar-toolbar">

  <!-- Start left navigation -->
  <ul class="nav navbar-nav navbar-left">
      <!-- Start sidebar shrink -->
      <li id="tour-2" class="navbar-minimize">
          <a href="javascript:void(0);" title="Minimize sidebar">
              <i class="fa fa-bars"></i>
          </a>
      </li>
      <!--/ End sidebar shrink -->

      <!-- Start form search -->
      <li class="navbar-search">
          <h3 class="header-title">IMoov<span class="header-title-small">[ Car & Transport System ]</span></h3>
      </li>
      <!--/ End form search -->
  </ul><!-- /.nav navbar-nav navbar-left -->
  <!--/ End left navigation -->

    <!-- Start right navigation -->
  <ul class="nav navbar-nav navbar-right"><!-- /.nav navbar-nav navbar-right -->


      <!-- Start profile -->
      <li id="tour-6" class="dropdown navbar-profile">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="meta">
                  <span class="avatar">
                  @include('laravel-authentication-acl::admin.layouts.partials.avatar', ['size' => 30])
                  </span>
                  <span class="text hidden-xs hidden-sm text-muted">{!! isset($logged_user) ? $logged_user->email : 'User' !!}</span>
                  <span class="caret"></span>
              </span>
          </a>
          <!-- Start dropdown menu -->
          <ul class="dropdown-menu animated flipInX">
              <li class="dropdown-header">Account</li>
              <li><a href="{!! URL::route('users.selfprofile.edit') !!}" target="_top"><i class="fa fa-user"></i>View profile</a></li>
              <li class="dropdown-header">Settings</li>
              <li><a href="#" target="_top"><i class="fa fa-unlock"></i>Change Password</a></li>
              <li><a id="logout2" data-url="{!! URL::route('user.logout') !!}" href="javascript:void(0);" data-toggle="tooltip" data-placement="top"><i class="fa fa-sign-out"></i>Logout</a></li>
          </ul>
          <!--/ End dropdown menu -->
      </li><!-- /.dropdown navbar-profile -->
      <!--/ End profile -->

      <!-- Start settings -->
      {{--
      <li id="tour-7" class="navbar-setting pull-right">
          <a href="javascript:void(0);"><i class="fa fa-cog fa-spin"></i></a>
      </li><!-- /.navbar-setting pull-right -->
      --}}
      <!--/ End settings -->

  </ul>
  <!--/ End right navigation -->

</div><!-- /.navbar-toolbar -->
<!--/ End navbar toolbar -->
