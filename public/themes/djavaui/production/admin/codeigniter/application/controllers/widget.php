<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Widget extends CI_Controller {

    public function widget_overview()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'OVERVIEW WIDGET',
            // Set JS plugins
            'list_js_plugin' => array(
                'raphael/raphael-min.js',
                'flot/jquery.flot.js',
                'flot/jquery.flot.spline.min.js',
                'flot/jquery.flot.categories.js',
                'flot/jquery.flot.tooltip.min.js',
                'flot/jquery.flot.resize.js',
                'flot/jquery.flot.pie.js',
                'morrisjs/morris.min.js'
            ),
            // Set JS page
            'list_js_page' => array(
                'blankon.widgets.js'
            ),
            // Active menu on sidebar left
            'active_widget_overview'=>'active',
            // Page Content
            'page_content'=> 'widget/v_overview'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function widget_social()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'SOCIAL WIDGET',
            // Set CSS page
            'list_css_page' => array(
                'timeline.css'
            ),
            // Active menu on sidebar left
            'active_widget_social'=>'active',
            // Page Content
            'page_content'=> 'widget/v_social'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function widget_blog()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'BLOG WIDGET',
            // Active menu on sidebar left
            'active_widget_blog'=>'active',
            // Page Content
            'page_content'=> 'widget/v_blog'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function widget_weather()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'WEATHER WIDGET',
            // Set CSS plugin
            'list_css_plugin' => array(
                'weather-icons/css/weather-icons.min.css'
            ),
            // Set CSS page
            'list_css_page' => array(
                'timeline.css'
            ),
            // Set JS plugins
            'list_js_plugin' => array(
                'skycons-html5/skycons.js'
            ),
            // Set JS page
            'list_js_page' => array(
                'blankon.widget.weather.js'
            ),
            // Active menu on sidebar left
            'active_widget_weather'=>'active',
            // Page Content
            'page_content'=> 'widget/v_weather'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function widget_misc()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'MISC WIDGET',
            // Active menu on sidebar left
            'active_widget_misc'=>'active',
            // Page Content
            'page_content'=> 'widget/v_misc'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

}
