<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Components extends CI_Controller {

    public function component_grid_system()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'GRID SYSTEM',
            // Active menu on sidebar left
            'active_components'=>'active',
            'active_component_grid_system'=>'active',
            // Page Content
            'page_content'=> 'components/v_grid_system'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function component_button()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'BUTTONS',
            // Active menu on sidebar left
            'active_components'=>'active',
            'active_component_button'=>'active',
            // Page Content
            'page_content'=> 'components/v_buttons'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function component_typography()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'TYPOGRAPHY',
            // Set CSS plugin
            'list_css_plugin' => array(
                'google-code-prettify/bin/prettify.min.css'
            ),
            // Set JS plugins
            'list_js_plugin' => array(
                'google-code-prettify/bin/prettify.min.js'
            ),
            // Set JS page
            'list_js_page' => array(
                'blankon.typography.js'
            ),
            // Active menu on sidebar left
            'active_components'=>'active',
            'active_component_typography'=>'active',
            // Page Content
            'page_content'=> 'components/v_typography'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function component_panel()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'PANELS',
            // Active menu on sidebar left
            'active_components'=>'active',
            'active_component_panel'=>'active',
            // Page Content
            'page_content'=> 'components/v_panels'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function component_alert()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'ALERTS',
            // Active menu on sidebar left
            'active_components'=>'active',
            'active_component_alert'=>'active',
            // Page Content
            'page_content'=> 'components/v_alerts'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function component_modal()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'MODALS',
            // Active menu on sidebar left
            'active_components'=>'active',
            'active_component_modal'=>'active',
            // Page Content
            'page_content'=> 'components/v_modals'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function component_video()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'VIDEO',
            // Active menu on sidebar left
            'active_components'=>'active',
            'active_component_video'=>'active',
            // Page Content
            'page_content'=> 'components/v_video'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function component_tabsaccordion()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'TABS & ACCORDION',
            // Active menu on sidebar left
            'active_components'=>'active',
            'active_component_tabsaccordion'=>'active',
            // Page Content
            'page_content'=> 'components/v_tabs_accordion'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function component_slider()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'SLIDERS',
            // Set CSS plugin
            'list_css_plugin' => array(
                'ion.rangeSlider/css/ion.rangeSlider.css'
            ),
            // Set JS plugins
            'list_js_plugin' => array(
                'ion.rangeSlider/js/ion.rangeSlider.min.js'
            ),
            // Set JS page
            'list_js_page' => array(
                'blankon.slider.js'
            ),
            // Active menu on sidebar left
            'active_components'=>'active',
            'active_component_slider'=>'active',
            // Page Content
            'page_content'=> 'components/v_sliders'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function component_glyphicons()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'GLYPHICONS',
            // Set CSS page
            'list_css_page' => array(
                'glyphicons.css'
            ),
            // Active menu on sidebar left
            'active_components'=>'active',
            'active_component_icon'=>'active',
            'active_component_icon_glyphicons'=>'active',
            // Page Content
            'page_content'=> 'components/icons/v_glyphicons'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function component_glyphicons_pro()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'GLYPHICONS PRO',
            // Set CSS commercial
            'list_css_commercial' => array(
                'glyphicons-pro/glyphicons/web/html_css/css/glyphicons.css'
            ),
            // Set CSS page
            'list_css_page' => array(
                'glyphicons.css'
            ),
            // Active menu on sidebar left
            'active_components'=>'active',
            'active_component_icon'=>'active',
            'active_component_icon_glyphicons_pro'=>'active',
            // Page Content
            'page_content'=> 'components/icons/v_glyphicons_pro'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function component_font_awesome()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'FONT AWESOME',
            // Active menu on sidebar left
            'active_components'=>'active',
            'active_component_icon'=>'active',
            'active_component_icon_font_awesome'=>'active',
            // Page Content
            'page_content'=> 'components/icons/v_font_awesome'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function component_weather_icons()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'WEATHER ICONS',
            // Set CSS plugin
            'list_css_plugin' => array(
                'weather-icons/css/weather-icons.min.css'
            ),
            // Set CSS page
            'list_css_page' => array(
                'weather-icons.css'
            ),
            // Active menu on sidebar left
            'active_components'=>'active',
            'active_component_icon'=>'active',
            'active_component_icon_weather_icons'=>'active',
            // Page Content
            'page_content'=> 'components/icons/v_weather_icons'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function component_map_icons()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'MAP ICONS',
            // Set CSS plugin
            'list_css_plugin' => array(
                'map-icons/css/map-icons.css'
            ),
            // Set JS CDN
            'list_js_cdn' => array(
                'http://maps.googleapis.com/maps/api/js?sensor=false'
            ),
            // Set JS plugin
            'list_js_plugin' => array(
                'map-icons/js/map-icons.min.js'
            ),
            // Set JS page
            'list_js_page' => array(
                'blankon.maps.icon.js'
            ),
            // Active menu on sidebar left
            'active_components'=>'active',
            'active_component_icon'=>'active',
            'active_component_icon_map_icons'=>'active',
            // Page Content
            'page_content'=> 'components/icons/v_map_icons'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function component_simple_line_icons()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'SIMPLE LINE ICONS',
            // Set CSS plugin
            'list_css_plugin' => array(
                'simple-line-icons/css/simple-line-icons.css'
            ),
            // Set CSS page
            'list_css_page' => array(
                'icon.css'
            ),
            // Active menu on sidebar left
            'active_components'=>'active',
            'active_component_icon'=>'active',
            'active_component_icon_simple_line_icons'=>'active',
            // Page Content
            'page_content'=> 'components/icons/v_simple_line_icons'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function component_other()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'OTHER COMPONENT',
            // Active menu on sidebar left
            'active_components'=>'active',
            'active_component_other'=>'active',
            // Page Content
            'page_content'=> 'components/v_other'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

}
