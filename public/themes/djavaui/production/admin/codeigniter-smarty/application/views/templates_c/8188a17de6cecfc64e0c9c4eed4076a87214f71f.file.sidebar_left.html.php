<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-10-25 08:49:28
         compiled from "C:\xampp\htdocs\blankon-fullpack-admin-theme\production\admin\codeigniter-smarty\application\views\templates\partials\sidebar_left.html" */ ?>
<?php /*%%SmartyHeaderCode:7298580efdff2b9911-61482606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8188a17de6cecfc64e0c9c4eed4076a87214f71f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\blankon-fullpack-admin-theme\\production\\admin\\codeigniter-smarty\\application\\views\\templates\\partials\\sidebar_left.html',
      1 => 1477378167,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7298580efdff2b9911-61482606',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_580efdff58a1c4_08186896',
  'variables' => 
  array (
    'active_dashboard' => 0,
    'active_blog' => 0,
    'active_blog_grid' => 0,
    'active_blog_list' => 0,
    'active_blog_single' => 0,
    'active_mail' => 0,
    'active_mail_inbox' => 0,
    'active_mail_compose' => 0,
    'active_mail_view' => 0,
    'active_pages' => 0,
    'active_gallery' => 0,
    'active_faq' => 0,
    'active_invoice' => 0,
    'active_messages' => 0,
    'active_timeline' => 0,
    'active_profile' => 0,
    'active_search' => 0,
    'active_search_course' => 0,
    'active_error' => 0,
    'active_error_403' => 0,
    'active_error_404' => 0,
    'active_error_500' => 0,
    'active_forms' => 0,
    'active_form_element' => 0,
    'active_form_advanced' => 0,
    'active_form_layout' => 0,
    'active_form_validation' => 0,
    'active_form_wizard' => 0,
    'active_form_wysiwyg' => 0,
    'active_form_xeditable' => 0,
    'active_tables' => 0,
    'active_table_default' => 0,
    'active_table_color' => 0,
    'active_table_datatable' => 0,
    'active_maps' => 0,
    'active_map_google' => 0,
    'active_map_vector' => 0,
    'active_charts' => 0,
    'active_chart_flot' => 0,
    'active_chart_morris' => 0,
    'active_chart_chartjs' => 0,
    'active_chart_c3js' => 0,
    'active_components' => 0,
    'active_component_grid_system' => 0,
    'active_component_button' => 0,
    'active_component_typography' => 0,
    'active_component_panel' => 0,
    'active_component_alert' => 0,
    'active_component_modal' => 0,
    'active_component_video' => 0,
    'active_component_tabsaccordion' => 0,
    'active_component_slider' => 0,
    'active_component_icon' => 0,
    'active_component_icon_glyphicons' => 0,
    'active_component_icon_glyphicons_pro' => 0,
    'active_component_icon_font_awesome' => 0,
    'active_component_icon_weather_icons' => 0,
    'active_component_icon_map_icons' => 0,
    'active_component_icon_simple_line_icons' => 0,
    'active_component_other' => 0,
    'active_animate' => 0,
    'active_widget_overview' => 0,
    'active_widget_social' => 0,
    'active_widget_blog' => 0,
    'active_widget_weather' => 0,
    'active_widget_misc' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580efdff58a1c4_08186896')) {function content_580efdff58a1c4_08186896($_smarty_tpl) {?><aside id="sidebar-left" class="sidebar-circle">

<!-- Start left navigation - profile shortcut -->
<div class="sidebar-content">
    <div class="media">
        <a class="pull-left has-notif avatar" href="page-profile.html">
            <img src="http://img.djavaui.com/?create=50x50,4888E1?f=ffffff" alt="admin">
            <i class="online"></i>
        </a>
        <div class="media-body">
            <h4 class="media-heading">Hello, <span>Lee</span></h4>
            <small>Web Designer</small>
        </div>
    </div>
</div><!-- /.sidebar-content -->
<!--/ End left navigation -  profile shortcut -->

<!-- Start left navigation - menu -->
<ul class="sidebar-menu">

<!-- Start navigation - dashboard -->
<li class="<?php if (isset($_smarty_tpl->tpl_vars['active_dashboard']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_dashboard']->value;?>
 <?php }?>">
<a href="<?php echo base_url('production/admin/codeigniter-smarty/dashboard');?>
">
    <span class="icon"><i class="fa fa-home"></i></span>
    <span class="text">Dashboard</span>
    <?php if (isset($_smarty_tpl->tpl_vars['active_dashboard']->value)) {?> <?php echo '<span class="selected"></span>';?>
 <?php }?>
</a>
</li>
<!--/ End navigation - dashboard -->

<!-- Start category apps -->
<li class="sidebar-category">
    <span>APPS</span>
    <span class="pull-right"><i class="fa fa-trophy"></i></span>
</li>
<!--/ End category apps -->

<!-- Start navigation - blog -->
<li class="submenu <?php if (isset($_smarty_tpl->tpl_vars['active_blog']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_blog']->value;?>
 <?php }?>">
    <a href="javascript:void(0);">
        <span class="icon"><i class="fa fa-globe"></i></span>
        <span class="text">Blog</span>
        <span class="arrow"></span>
        <?php if (isset($_smarty_tpl->tpl_vars['active_blog']->value)) {?> <?php echo '<span class="selected"></span>';?>
 <?php }?>
    </a>
    <ul>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_blog_grid']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_blog_grid']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/blog/blog-grid');?>
">Grid</a></li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_blog_list']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_blog_list']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/blog/blog-list');?>
">List</a></li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_blog_single']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_blog_single']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/blog/blog-single');?>
">Single</a></li>
    </ul>
</li>
<!--/ End navigation - blog -->

<!-- Start navigation - mail -->
<li class="submenu <?php if (isset($_smarty_tpl->tpl_vars['active_mail']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_mail']->value;?>
 <?php }?>">
    <a href="javascript:void(0);">
        <span class="icon"><i class="fa fa-envelope"></i></span>
        <span class="text">Mail</span>
        <span class="arrow"></span>
        <?php if (isset($_smarty_tpl->tpl_vars['active_mail']->value)) {?> <?php echo '<span class="selected"></span>';?>
 <?php }?>
    </a>
    <ul>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_mail_inbox']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_mail_inbox']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/mail/mail-inbox');?>
">Inbox</a></li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_mail_compose']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_mail_compose']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/mail/mail-compose');?>
">Compose mail</a></li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_mail_view']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_mail_view']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/mail/mail-view');?>
">View mail</a></li>
    </ul>
</li>
<!--/ End navigation - mail -->

<!-- Start navigation - pages -->
<li class="submenu <?php if (isset($_smarty_tpl->tpl_vars['active_pages']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_pages']->value;?>
 <?php }?>">
    <a href="javascript:void(0);">
        <span class="icon"><i class="fa fa-file-o"></i></span>
        <span class="text">Pages</span>
        <span class="arrow"></span>
        <?php if (isset($_smarty_tpl->tpl_vars['active_pages']->value)) {?> <?php echo '<span class="selected"></span>';?>
 <?php }?>
    </a>
    <ul>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_gallery']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_gallery']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/pages/page-gallery');?>
">Gallery</a></li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_faq']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_faq']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/pages/page-faq');?>
">FAQ <span class="label label-danger pull-right">New</span></a></li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_invoice']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_invoice']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/pages/page-invoice');?>
">Invoice</a></li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_messages']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_messages']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/pages/page-messages');?>
">Messages</a></li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_timeline']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_timeline']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/pages/page-timeline');?>
">Timeline</a></li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_profile']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_profile']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/pages/page-profile');?>
">Profile</a></li>
        <li class="submenu <?php if (isset($_smarty_tpl->tpl_vars['active_search']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_search']->value;?>
 <?php }?>">
            <a href="javascript:void(0);">Search<span class="arrow"></span></a>
            <ul>
                <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_search_course']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_search_course']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/pages/page-search-course');?>
">Courses</a></li>
            </ul>
        </li>
        <li class="submenu <?php if (isset($_smarty_tpl->tpl_vars['active_error']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_error']->value;?>
 <?php }?>">
            <a href="javascript:void(0);">Error <span class="arrow"></span></a>
            <ul>
                <li><a href="<?php echo base_url('production/admin/codeigniter-smarty/errors/error-403');?>
" target="_blank">Error 403</a></li>
                <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_error_403']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_error_403']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/pages/page-error-403');?>
">Error 403 Type 2</a></li>
                <li><a href="<?php echo base_url('production/admin/codeigniter-smarty/errors/error-404');?>
" target="_blank">Error 404</a></li>
                <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_error_404']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_error_404']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/pages/page-error-404');?>
">Error 404 Type 2</a></li>
                <li><a href="<?php echo base_url('production/admin/codeigniter-smarty/errors/error-500');?>
" target="_blank">Error 500</a></li>
                <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_error_500']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_error_500']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/pages/page-error-500');?>
">Error 500 Type 2</a></li>
            </ul>
        </li>
        <li class="submenu">
            <a href="javascript:void(0);">Account <span class="arrow"></span></a>
            <ul>
                <li><a href="<?php echo base_url('production/admin/codeigniter-smarty/account/sign-in');?>
" target="_blank">Sign In</a></li>
                <li><a href="<?php echo base_url('production/admin/codeigniter-smarty/account/sign-up');?>
" target="_blank">Sign Up</a></li>
                <li><a href="<?php echo base_url('production/admin/codeigniter-smarty/account/lost-password');?>
" target="_blank">Lost password</a></li>
                <li><a href="<?php echo base_url('production/admin/codeigniter-smarty/account/lock-screen');?>
" target="_blank">Lock Screen</a></li>
            </ul>
        </li>
    </ul>
</li>
<!--/ End navigation - pages -->

<!-- Start category ui kit-->
<li class="sidebar-category">
    <span>UI KIT</span>
    <span class="pull-right"><i class="fa fa-magic"></i></span>
</li>
<!--/ End category ui kit-->

<!-- Start navigation - forms -->
<li class="submenu <?php if (isset($_smarty_tpl->tpl_vars['active_forms']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_forms']->value;?>
 <?php }?>">
    <a href="javascript:void(0);">
        <span class="icon"><i class="fa fa-list-alt"></i></span>
        <span class="text">Forms</span>
        <span class="arrow"></span>
        <?php if (isset($_smarty_tpl->tpl_vars['active_forms']->value)) {?> <?php echo '<span class="selected"></span>';?>
 <?php }?>
    </a>
    <ul>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_form_element']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_form_element']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/forms/form-element');?>
">Element</a></li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_form_advanced']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_form_advanced']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/forms/form-advanced');?>
">Advanced</a></li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_form_layout']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_form_layout']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/forms/form-layout');?>
">Layout</a></li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_form_validation']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_form_validation']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/forms/form-validation');?>
">Validation</a></li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_form_wizard']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_form_wizard']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/forms/form-wizard');?>
">Wizard</a></li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_form_wysiwyg']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_form_wysiwyg']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/forms/form-wysiwyg');?>
">Text Editor</a></li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_form_xeditable']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_form_xeditable']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/forms/form-xeditable');?>
">X-Editable</a></li>
    </ul>
</li>
<!--/ End navigation - forms -->

<!-- Start navigation - tables -->
<li class="submenu <?php if (isset($_smarty_tpl->tpl_vars['active_tables']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_tables']->value;?>
 <?php }?>">
    <a href="javascript:void(0);">
        <span class="icon"><i class="fa fa-table"></i></span>
        <span class="text">Tables</span>
        <span class="arrow"></span>
        <?php if (isset($_smarty_tpl->tpl_vars['active_tables']->value)) {?> <?php echo '<span class="selected"></span>';?>
 <?php }?>
    </a>
    <ul>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_table_default']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_table_default']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/tables/table-default');?>
">Default</a></li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_table_color']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_table_color']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/tables/table-color');?>
">Color</a></li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_table_datatable']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_table_datatable']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/tables/table-datatable');?>
">Datatable</a></li>
    </ul>
</li>
<!--/ End navigation - tables -->

<!-- Start navigation - maps -->
<li class="submenu <?php if (isset($_smarty_tpl->tpl_vars['active_maps']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_maps']->value;?>
 <?php }?>">
    <a href="javascript:void(0);">
        <span class="icon"><i class="fa fa-map-marker"></i></span>
        <span class="text">Maps</span>
        <span class="arrow"></span>
        <?php if (isset($_smarty_tpl->tpl_vars['active_maps']->value)) {?> <?php echo '<span class="selected"></span>';?>
 <?php }?>
    </a>
    <ul>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_map_google']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_map_google']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/maps/map-google');?>
">Google</a></li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_map_vector']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_map_vector']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/maps/map-vector');?>
">Vector</a></li>
    </ul>
</li>
<!--/ End navigation - maps -->

<!-- Start navigation - charts -->
<li class="submenu <?php if (isset($_smarty_tpl->tpl_vars['active_charts']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_charts']->value;?>
 <?php }?>">
    <a href="javascript:void(0);">
        <span class="icon"><i class="fa fa-signal"></i></span>
        <span class="text">Charts</span>
        <span class="arrow"></span>
        <?php if (isset($_smarty_tpl->tpl_vars['active_charts']->value)) {?> <?php echo '<span class="selected"></span>';?>
 <?php }?>
    </a>
    <ul>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_chart_flot']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_chart_flot']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/charts/chart-flot');?>
">Flot</a></li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_chart_morris']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_chart_morris']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/charts/chart-morris');?>
">Morris</a></li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_chart_chartjs']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_chart_chartjs']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/charts/chart-chartjs');?>
">Chartjs</a></li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_chart_c3js']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_chart_c3js']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/charts/chart-c3js');?>
">C3js</a></li>
    </ul>
</li>
<!--/ End navigation - charts -->

<!-- Start category development -->
<li class="sidebar-category">
    <span>DEVELOP</span>
    <span class="pull-right"><i class="fa fa-code"></i></span>
</li>
<!--/ End category development -->

<!-- Start development - components -->
<li class="submenu <?php if (isset($_smarty_tpl->tpl_vars['active_components']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_components']->value;?>
 <?php }?>">
    <a href="javascript:void(0);">
        <span class="icon"><i class="fa fa-cube"></i></span>
        <span class="text">Components</span>
        <span class="plus"></span>
        <?php if (isset($_smarty_tpl->tpl_vars['active_components']->value)) {?> <?php echo '<span class="selected"></span>';?>
 <?php }?>
    </a>
    <ul>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_component_grid_system']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_component_grid_system']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/components/component-grid-system');?>
">Grid System</a></li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_component_button']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_component_button']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/components/component-button');?>
">Buttons</a></li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_component_typography']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_component_typography']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/components/component-typography');?>
">Typography</a></li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_component_panel']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_component_panel']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/components/component-panel');?>
">Panels</a></li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_component_alert']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_component_alert']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/components/component-alert');?>
">Alerts</a></li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_component_modal']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_component_modal']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/components/component-modal');?>
">Modals</a></li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_component_video']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_component_video']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/components/component-video');?>
">Video <span class="label label-danger pull-right">New</span></a></li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_component_tabsaccordion']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_component_tabsaccordion']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/components/component-tabsaccordion');?>
">Tabs & Accordion</a></li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_component_slider']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_component_slider']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/components/component-slider');?>
">Sliders</a></li>
        <li class="submenu <?php if (isset($_smarty_tpl->tpl_vars['active_component_icon']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_component_icon']->value;?>
 <?php }?>">
            <a href="javascript:void(0);">
                <span class="text">Icons</span>
                <span class="count label label-danger">6</span>
                <span class="arrow"></span>
            </a>
            <ul>
                <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_component_icon_glyphicons']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_component_icon_glyphicons']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/components/component-glyphicons');?>
">Glyphicons</a></li>
                <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_component_icon_glyphicons_pro']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_component_icon_glyphicons_pro']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/components/component-glyphicons-pro');?>
">Glyphicons PRO</a></li>
                <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_component_icon_font_awesome']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_component_icon_font_awesome']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/components/component-font-awesome');?>
">Font Awesome</a></li>
                <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_component_icon_weather_icons']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_component_icon_weather_icons']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/components/component-weather-icons');?>
">Weather Icons</a></li>
                <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_component_icon_map_icons']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_component_icon_map_icons']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/components/component-map-icons');?>
">Map Icons</a></li>
                <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_component_icon_simple_line_icons']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_component_icon_simple_line_icons']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/components/component-simple-line-icons');?>
">Simple Line Icons</a></li>
            </ul>
        </li>
        <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_component_other']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_component_other']->value;?>
 <?php }?>"><a href="<?php echo base_url('production/admin/codeigniter-smarty/components/component-other');?>
">Other</a></li>
    </ul>
</li>
<!--/ End development - components -->

<!-- Start development - sub menu -->
<li class="submenu">
    <a href="javascript:void(0);">
        <span class="icon"><i class="fa fa-align-left"></i></span>
        <span class="text">Sub Menu</span>
        <span class="plus"></span>
    </a>
    <ul>
        <!-- Start level 1 -->
        <li class="submenu">
            <a href="javascript:void(0);">
                <span class="text">Level 1</span>
                <span class="arrow"></span>
            </a>
            <ul>
                <!-- Start level 2 -->
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <span class="text">Level 2</span>
                        <span class="fa fa-angle-double-right pull-right arrow"></span>
                    </a>
                    <ul>
                        <!-- Start level 3 -->
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <span class="text">Level 3</span>
                                <span class="fa fa-angle-double-right pull-right arrow"></span>
                            </a>
                            <ul>
                                <!-- Start level 4 -->
                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <span class="text">Level 4</span>
                                        <span class="fa fa-angle-double-right pull-right arrow"></span>
                                    </a>
                                    <ul>
                                        <!-- Start level 5 -->
                                        <li>
                                            <a href="javascript:void(0);">Level 5</a>
                                        </li>
                                        <!--/ End level 5 -->
                                        <li>
                                            <a href="javascript:void(0);">Level 5</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Level 5</a>
                                        </li>
                                    </ul>
                                </li>
                                <!--/ End level 4 -->
                                <li>
                                    <a href="javascript:void(0);">Level 4</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Level 4</a>
                                </li>
                            </ul>
                        </li>
                        <!--/ End level 3 -->
                        <li>
                            <a href="javascript:void(0);">Level 3</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">Level 3</a>
                        </li>
                    </ul>
                </li>
                <!--/ End level 2 -->
                <li>
                    <a href="javascript:void(0);">Level 2</a>
                </li>
                <li>
                    <a href="javascript:void(0);">Level 2</a>
                </li>
            </ul>
        </li>
        <!--/ End level 1 -->
        <li>
            <a href="javascript:void(0);">
                <span class="text">Level 1</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);">
                <span class="text">Level 1</span>
            </a>
        </li>
    </ul>
</li>
<!--/ End development - sub menu -->

<!-- Start development - animate.css -->
<li class="<?php if (isset($_smarty_tpl->tpl_vars['active_animate']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_animate']->value;?>
 <?php }?>">
    <a href="<?php echo base_url('production/admin/codeigniter-smarty/animate');?>
">
        <span class="icon"><i class="fa fa-forumbee"></i></span>
        <span class="text">Animate.css</span>
        <span class="label label-danger pull-right">New</span>
        <?php if (isset($_smarty_tpl->tpl_vars['active_animate']->value)) {?> <?php echo '<span class="selected"></span>';?>
 <?php }?>
    </a>
</li>
<!--/ End development - animate.css -->

<!-- Start category widget -->
<li class="sidebar-category">
    <span>WIDGET</span>
    <span class="pull-right"><i class="fa fa-cubes"></i></span>
</li>
<!--/ End category widget -->

<!-- Start widget - overview -->
<li class="<?php if (isset($_smarty_tpl->tpl_vars['active_widget_overview']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_widget_overview']->value;?>
 <?php }?>">
    <a href="<?php echo base_url('production/admin/codeigniter-smarty/widget/widget-overview');?>
">
        <span class="icon"><i class="fa fa-desktop"></i></span>
        <span class="text">Overview</span>
        <span class="label label-primary pull-right rounded">10</span>
        <?php if (isset($_smarty_tpl->tpl_vars['active_widget_overview']->value)) {?> <?php echo '<span class="selected"></span>';?>
 <?php }?>
    </a>
</li>
<!--/ End widget - overview -->

<!-- Start widget - social -->
<li class="<?php if (isset($_smarty_tpl->tpl_vars['active_widget_social']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_widget_social']->value;?>
 <?php }?>">
    <a href="<?php echo base_url('production/admin/codeigniter-smarty/widget/widget-social');?>
">
        <span class="icon"><i class="fa fa-group"></i></span>
        <span class="text">Social</span>
        <span class="label label-success pull-right rounded">28</span>
        <?php if (isset($_smarty_tpl->tpl_vars['active_widget_social']->value)) {?> <?php echo '<span class="selected"></span>';?>
 <?php }?>
    </a>
</li>
<!--/ End widget - social -->

<!-- Start widget - blog -->
<li class="<?php if (isset($_smarty_tpl->tpl_vars['active_widget_blog']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_widget_blog']->value;?>
 <?php }?>">
    <a href="<?php echo base_url('production/admin/codeigniter-smarty/widget/widget-blog');?>
">
        <span class="icon"><i class="fa fa-pencil"></i></span>
        <span class="text">Blog</span>
        <span class="label label-info pull-right rounded">15</span>
        <?php if (isset($_smarty_tpl->tpl_vars['active_widget_blog']->value)) {?> <?php echo '<span class="selected"></span>';?>
 <?php }?>
    </a>
</li>
<!--/ End widget - blog -->

<!-- Start widget - weather -->
<li class="<?php if (isset($_smarty_tpl->tpl_vars['active_widget_weather']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_widget_weather']->value;?>
 <?php }?>">
    <a href="<?php echo base_url('production/admin/codeigniter-smarty/widget/widget-weather');?>
">
        <span class="icon"><i class="fa fa-sun-o"></i></span>
        <span class="text">Weather</span>
        <span class="label label-warning pull-right rounded">6</span>
        <?php if (isset($_smarty_tpl->tpl_vars['active_widget_weather']->value)) {?> <?php echo '<span class="selected"></span>';?>
 <?php }?>
    </a>
</li>
<!--/ End widget - weather -->

<!-- Start widget - misc -->
<li class="<?php if (isset($_smarty_tpl->tpl_vars['active_widget_misc']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_widget_misc']->value;?>
 <?php }?>">
    <a href="<?php echo base_url('production/admin/codeigniter-smarty/widget/widget-misc');?>
">
        <span class="icon"><i class="fa fa-puzzle-piece"></i></span>
        <span class="text">Misc</span>
        <span class="label label-danger pull-right rounded">9</span>
        <?php if (isset($_smarty_tpl->tpl_vars['active_widget_misc']->value)) {?> <?php echo '<span class="selected"></span>';?>
 <?php }?>
    </a>
</li>
<!--/ End widget - misc -->

<!-- Start category documentation -->
<li class="sidebar-category">
    <span><span class="hidden-sidebar-minimize">BLANKON</span> CORE</span>
    <span class="pull-right"><i class="fa fa-coffee"></i></span>
</li>
<!--/ End category documentation -->

<!-- Start documentation - api documentation -->
<li>
    <a href="<?php echo base_url('documentation/admin/codeigniter-smarty/live-preview-documentation.html');?>
" target="_blank">
        <span class="icon"><i class="fa fa-book"></i></span>
        <span class="text">API Documentation</span>
    </a>
</li>
<!--/ End documentation - api documentation -->

</ul><!-- /.sidebar-menu -->
<!--/ End left navigation - menu -->

<!-- Start left navigation - footer -->
<div class="sidebar-footer hidden-xs hidden-sm hidden-md">
    <a id="setting" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Setting"><i class="fa fa-cog"></i></a>
    <a id="fullscreen" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Fullscreen"><i class="fa fa-desktop"></i></a>
    <a id="lock-screen" data-url="account/lock-screen" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Lock Screen"><i class="fa fa-lock"></i></a>
    <a id="logout" data-url="account/sign-in" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Logout"><i class="fa fa-power-off"></i></a>
</div><!-- /.sidebar-footer -->
<!--/ End left navigation - footer -->

</aside><!-- /#sidebar-left --><?php }} ?>
