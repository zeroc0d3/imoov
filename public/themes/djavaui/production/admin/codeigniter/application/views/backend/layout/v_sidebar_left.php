<aside id="sidebar-left" class="sidebar-circle">

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
        <li class="<?php if (isset($active_dashboard)){ echo $active_dashboard;} ?>">
            <a href="<?php echo site_url($this->config->item('link_url').'/dashboard'); ?>">
                <span class="icon"><i class="fa fa-home"></i></span>
                <span class="text">Dashboard</span>
                <?php if (isset($active_dashboard)){ ?>
                    <span class="selected"></span>
                <?php } ?>
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
        <li class="submenu <?php if (isset($active_blog)){ echo $active_blog;} ?>">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-globe"></i></span>
                <span class="text">Blog</span>
                <span class="arrow"></span>
                <?php if (isset($active_blog)){ ?>
                    <span class="selected"></span>
                <?php } ?>
            </a>
            <ul>
                <li class="<?php if (isset($active_blog_grid)){ echo $active_blog_grid;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/blog/blog-grid'); ?>">Grid</a></li>
                <li class="<?php if (isset($active_blog_list)){ echo $active_blog_list;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/blog/blog-list'); ?>">List</a></li>
                <li class="<?php if (isset($active_blog_single)){ echo $active_blog_single;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/blog/blog-single'); ?>">Single</a></li>
            </ul>
        </li>
        <!--/ End navigation - blog -->

        <!-- Start navigation - mail -->
        <li class="submenu <?php if (isset($active_mail)){ echo $active_mail;} ?>">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-envelope"></i></span>
                <span class="text">Mail</span>
                <span class="arrow"></span>
                <?php if (isset($active_mail)){ ?>
                    <span class="selected"></span>
                <?php } ?>
            </a>
            <ul>
                <li class="<?php if (isset($active_mail_inbox)){ echo $active_mail_inbox;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/mail/mail-inbox'); ?>">Inbox</a></li>
                <li class="<?php if (isset($active_mail_compose)){ echo $active_mail_compose;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/mail/mail-compose'); ?>">Compose mail</a></li>
                <li class="<?php if (isset($active_mail_view)){ echo $active_mail_view;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/mail/mail-view'); ?>">View mail</a></li>
            </ul>
        </li>
        <!--/ End navigation - mail -->

        <!-- Start navigation - pages -->
        <li class="submenu <?php if (isset($active_pages)){ echo $active_pages;} ?>">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-file-o"></i></span>
                <span class="text">Pages</span>
                <span class="arrow"></span>
                <?php if (isset($active_pages)){ ?>
                    <span class="selected"></span>
                <?php } ?>
            </a>
            <ul>
                <li class="<?php if (isset($active_gallery)){ echo $active_gallery;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/pages/page-gallery'); ?>">Gallery</a></li>
                <li class="<?php if (isset($active_faq)){ echo $active_faq;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/pages/page-faq'); ?>">FAQ <span class="label label-danger pull-right">New</span></a></li>
                <li class="<?php if (isset($active_invoice)){ echo $active_invoice;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/pages/page-invoice'); ?>">Invoice</a></li>
                <li class="<?php if (isset($active_messages)){ echo $active_messages;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/pages/page-messages'); ?>">Messages</a></li>
                <li class="<?php if (isset($active_timeline)){ echo $active_timeline;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/pages/page-timeline'); ?>">Timeline</a></li>
                <li class="<?php if (isset($active_profile)){ echo $active_profile;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/pages/page-profile'); ?>">Profile</a></li>
                <li class="submenu <?php if (isset($active_search)){ echo $active_search;} ?>">
                    <a href="javascript:void(0);">Search<span class="arrow"></span></a>
                    <ul>
                        <li class="<?php if (isset($active_search_course)){ echo $active_search_course;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/pages/page-search-course'); ?>">Courses</a></li>
                    </ul>
                </li>
                <li class="submenu <?php if (isset($active_error)){ echo $active_error;} ?>">
                    <a href="javascript:void(0);">Error <span class="arrow"></span></a>
                    <ul>
                        <li class="<?php if (isset($active_error_403)){ echo $active_error_403;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/pages/page-error-403'); ?>" target="_blank">Error 403</a></li>
                        <li class="<?php if (isset($active_error_403_type2)){ echo $active_error_403_type2;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/pages/page-error-403-type2'); ?>">Error 403 Type 2</a></li>
                        <li class="<?php if (isset($active_error_404)){ echo $active_error_404;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/pages/page-error-404'); ?>" target="_blank">Error 404</a></li>
                        <li class="<?php if (isset($active_error_404_type2)){ echo $active_error_404_type2;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/pages/page-error-404-type2'); ?>">Error 404 Type 2</a></li>
                        <li class="<?php if (isset($active_error_500)){ echo $active_error_500;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/pages/page-error-500'); ?>" target="_blank">Error 500</a></li>
                        <li class="<?php if (isset($active_error_500_type2)){ echo $active_error_500_type2;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/pages/page-error-500-type2'); ?>">Error 500 Type 2</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);">Account <span class="arrow"></span></a>
                    <ul>
                        <li><a href="<?php echo site_url($this->config->item('link_url').'/pages/sign-in'); ?>" target="_blank">Sign In</a></li>
                        <li><a href="<?php echo site_url($this->config->item('link_url').'/pages/sign-up'); ?>" target="_blank">Sign Up</a></li>
                        <li><a href="<?php echo site_url($this->config->item('link_url').'/pages/lost-password'); ?>" target="_blank">Lost password</a></li>
                        <li><a href="<?php echo site_url($this->config->item('link_url').'/pages/lock-screen'); ?>" target="_blank">Lock Screen</a></li>
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
        <li class="submenu <?php if (isset($active_forms)){ echo $active_forms;} ?>">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-list-alt"></i></span>
                <span class="text">Forms</span>
                <span class="arrow"></span>
                <?php if (isset($active_forms)){ ?>
                    <span class="selected"></span>
                <?php } ?>
            </a>
            <ul>
                <li class="<?php if (isset($active_form_element)){ echo $active_form_element;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/forms/form-element') ?>">Element</a></li>
                <li class="<?php if (isset($active_form_advanced)){ echo $active_form_advanced;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/forms/form-advanced') ?>">Advanced</a></li>
                <li class="<?php if (isset($active_form_layout)){ echo $active_form_layout;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/forms/form-layout') ?>">Layout</a></li>
                <li class="<?php if (isset($active_form_validation)){ echo $active_form_validation;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/forms/form-validation') ?>">Validation</a></li>
                <li class="<?php if (isset($active_form_wizard)){ echo $active_form_wizard;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/forms/form-wizard') ?>">Wizard</a></li>
                <li class="<?php if (isset($active_form_wysiwyg)){ echo $active_form_wysiwyg;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/forms/form-wysiwyg') ?>">Text Editor</a></li>
                <li class="<?php if (isset($active_form_xeditable)){ echo $active_form_xeditable;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/forms/form-xeditable') ?>">X-Editable</a></li>
            </ul>
        </li>
        <!--/ End navigation - forms -->

        <!-- Start navigation - tables -->
        <li class="submenu <?php if (isset($active_tables)){ echo $active_tables;} ?>">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-table"></i></span>
                <span class="text">Tables</span>
                <span class="arrow"></span>
                <?php if (isset($active_tables)){ ?>
                    <span class="selected"></span>
                <?php } ?>
            </a>
            <ul>
                <li class="<?php if (isset($active_table_default)){ echo $active_table_default;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/tables/table-default') ?>">Default</a></li>
                <li class="<?php if (isset($active_table_color)){ echo $active_table_color;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/tables/table-color') ?>">Color</a></li>
                <li class="<?php if (isset($active_table_datatable)){ echo $active_table_datatable;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/tables/table-datatable') ?>">Datatable</a></li>
            </ul>
        </li>
        <!--/ End navigation - tables -->

        <!-- Start navigation - maps -->
        <li class="submenu <?php if (isset($active_maps)){ echo $active_maps;} ?>">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-map-marker"></i></span>
                <span class="text">Maps</span>
                <span class="arrow"></span>
                <?php if (isset($active_maps)){ ?>
                    <span class="selected"></span>
                <?php } ?>
            </a>
            <ul>
                <li class="<?php if (isset($active_map_google)){ echo $active_map_google;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/maps/map-google') ?>">Google</a></li>
                <li class="<?php if (isset($active_map_vector)){ echo $active_map_vector;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/maps/map-vector') ?>">Vector</a></li>
            </ul>
        </li>
        <!--/ End navigation - maps -->

        <!-- Start navigation - charts -->
        <li class="submenu <?php if (isset($active_charts)){ echo $active_charts;} ?>">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-signal"></i></span>
                <span class="text">Charts</span>
                <span class="arrow"></span>
                <?php if (isset($active_charts)){ ?>
                    <span class="selected"></span>
                <?php } ?>
            </a>
            <ul>
                <li class="<?php if (isset($active_chart_flot)){ echo $active_chart_flot;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/charts/chart-flot') ?>">Flot</a></li>
                <li class="<?php if (isset($active_chart_morris)){ echo $active_chart_morris;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/charts/chart-morris') ?>">Morris</a></li>
                <li class="<?php if (isset($active_chart_chartjs)){ echo $active_chart_chartjs;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/charts/chart-chartjs') ?>">Chartjs</a></li>
                <li class="<?php if (isset($active_chart_c3js)){ echo $active_chart_c3js;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/charts/chart-c3js') ?>">C3js</a></li>
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
        <li class="submenu <?php if (isset($active_components)){ echo $active_components;} ?>">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-cube"></i></span>
                <span class="text">Components</span>
                <span class="plus"></span>
                <?php if (isset($active_components)){ ?>
                    <span class="selected"></span>
                <?php } ?>
            </a>
            <ul>
                <li class="<?php if (isset($active_component_grid_system)){ echo $active_component_grid_system;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/components/component-grid-system') ?>">Grid System</a></li>
                <li class="<?php if (isset($active_component_button)){ echo $active_component_button;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/components/component-button') ?>">Buttons</a></li>
                <li class="<?php if (isset($active_component_typography)){ echo $active_component_typography;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/components/component-typography') ?>">Typography</a></li>
                <li class="<?php if (isset($active_component_panel)){ echo $active_component_panel;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/components/component-panel') ?>">Panels</a></li>
                <li class="<?php if (isset($active_component_alert)){ echo $active_component_alert;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/components/component-alert') ?>">Alerts</a></li>
                <li class="<?php if (isset($active_component_modal)){ echo $active_component_modal;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/components/component-modal') ?>">Modals</a></li>
                <li class="<?php if (isset($active_component_video)){ echo $active_component_video;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/components/component-video') ?>">Video <span class="label label-danger pull-right">New</span></a></li>
                <li class="<?php if (isset($active_component_tabsaccordion)){ echo $active_component_tabsaccordion;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/components/component-tabsaccordion') ?>">Tabs & Accordion</a></li>
                <li class="<?php if (isset($active_component_slider)){ echo $active_component_slider;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/components/component-slider') ?>">Sliders</a></li>
                <li class="submenu <?php if (isset($active_component_icon)){ echo $active_component_icon;} ?>">
                    <a href="javascript:void(0);">
                        <span class="text">Icons</span>
                        <span class="count label label-danger">6</span>
                        <span class="arrow"></span>
                    </a>
                    <ul>
                        <li class="<?php if (isset($active_component_icon_glyphicons)){ echo $active_component_icon_glyphicons;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/components/component-glyphicons') ?>">Glyphicons</a></li>
                        <li class="<?php if (isset($active_component_icon_glyphicons_pro)){ echo $active_component_icon_glyphicons_pro;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/components/component-glyphicons-pro') ?>">Glyphicons PRO</a></li>
                        <li class="<?php if (isset($active_component_icon_font_awesome)){ echo $active_component_icon_font_awesome;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/components/component-font-awesome') ?>">Font Awesome</a></li>
                        <li class="<?php if (isset($active_component_icon_weather_icons)){ echo $active_component_icon_weather_icons;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/components/component-weather-icons') ?>">Weather Icons</a></li>
                        <li class="<?php if (isset($active_component_icon_map_icons)){ echo $active_component_icon_map_icons;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/components/component-map-icons') ?>">Map Icons</a></li>
                        <li class="<?php if (isset($active_component_icon_simple_line_icons)){ echo $active_component_icon_simple_line_icons;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/components/component-simple-line-icons') ?>">Simple Line Icons</a></li>
                    </ul>
                </li>
                <li class="<?php if (isset($active_component_other)){ echo $active_component_other;} ?>"><a href="<?php echo site_url($this->config->item('link_url').'/components/component-other') ?>">Other</a></li>
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
        <li class="<?php if (isset($active_animate)){ echo $active_animate;} ?>">
            <a href="<?php echo site_url($this->config->item('link_url').'/animate') ?>">
                <span class="icon"><i class="fa fa-forumbee"></i></span>
                <span class="text">Animate.css</span>
                <span class="label label-danger pull-right">New</span>
                <?php if (isset($active_animate)){ ?>
                    <span class="selected"></span>
                <?php } ?>
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
        <li class="<?php if (isset($active_widget_overview)){ echo $active_widget_overview;} ?>">
            <a href="<?php echo site_url($this->config->item('link_url').'/widget/widget-overview') ?>">
                <span class="icon"><i class="fa fa-desktop"></i></span>
                <span class="text">Overview</span>
                <span class="label label-primary pull-right rounded">10</span>
                <?php if (isset($active_widget_overview)){ ?>
                    <span class="selected"></span>
                <?php } ?>
            </a>
        </li>
        <!--/ End widget - overview -->

        <!-- Start widget - social -->
        <li class="<?php if (isset($active_widget_social)){ echo $active_widget_social;} ?>">
            <a href="<?php echo site_url($this->config->item('link_url').'/widget/widget-social') ?>">
                <span class="icon"><i class="fa fa-group"></i></span>
                <span class="text">Social</span>
                <span class="label label-success pull-right rounded">28</span>
                <?php if (isset($active_widget_social)){ ?>
                    <span class="selected"></span>
                <?php } ?>
            </a>
        </li>
        <!--/ End widget - social -->

        <!-- Start widget - blog -->
        <li class="<?php if (isset($active_widget_blog)){ echo $active_widget_blog;} ?>">
            <a href="<?php echo site_url($this->config->item('link_url').'/widget/widget-blog') ?>">
                <span class="icon"><i class="fa fa-pencil"></i></span>
                <span class="text">Blog</span>
                <span class="label label-info pull-right rounded">15</span>
                <?php if (isset($active_widget_blog)){ ?>
                    <span class="selected"></span>
                <?php } ?>
            </a>
        </li>
        <!--/ End widget - blog -->

        <!-- Start widget - weather -->
        <li class="<?php if (isset($active_widget_weather)){ echo $active_widget_weather;} ?>">
            <a href="<?php echo site_url($this->config->item('link_url').'/widget/widget-weather') ?>">
                <span class="icon"><i class="fa fa-sun-o"></i></span>
                <span class="text">Weather</span>
                <span class="label label-warning pull-right rounded">6</span>
                <?php if (isset($active_widget_weather)){ ?>
                    <span class="selected"></span>
                <?php } ?>
            </a>
        </li>
        <!--/ End widget - weather -->

        <!-- Start widget - misc -->
        <li class="<?php if (isset($active_widget_misc)){ echo $active_widget_misc;} ?>">
            <a href="<?php echo site_url($this->config->item('link_url').'/widget/widget-misc') ?>">
                <span class="icon"><i class="fa fa-puzzle-piece"></i></span>
                <span class="text">Misc</span>
                <span class="label label-danger pull-right rounded">9</span>
                <?php if (isset($active_widget_misc)){ ?>
                    <span class="selected"></span>
                <?php } ?>
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
            <a href="<?php echo site_url('documentation/admin/codeigniter/live-preview-documentation.html')?>" target="_blank">
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

</aside><!-- /#sidebar-left -->