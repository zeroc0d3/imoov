<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function page_gallery()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'GALLERY',
            // Set CSS page
            'list_css_page' => array(
                'gallery.css'
            ),
            // Set JS plugins
            'list_js_plugin' => array(
                'mixitup/build/jquery.mixitup.min.js'
            ),
            // Set JS page
            'list_js_page' => array(
                'blankon.gallery.js'
            ),
            // Active menu on sidebar left
            'active_pages'=>'active',
            'active_gallery'=>'active',
            // Page Content
            'page_content'=> 'pages/v_gallery'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function page_faq()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'FAQ',
            // Set CSS commercial
            'list_css_commercial' => array(
                'cube-portfolio/cubeportfolio/css/cubeportfolio.css'
            ),
            // Set CSS page
            'list_css_page' => array(
                'faq.css'
            ),
            // Set JS commercial
            'list_js_commercial' => array(
                'cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js'
            ),
            // Set JS page
            'list_js_page' => array(
                'blankon.faq.js'
            ),
            // Active menu on sidebar left
            'active_pages'=>'active',
            'active_faq'=>'active',
            // Page Content
            'page_content'=> 'pages/v_faq'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function page_invoice()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'INVOICE',
            // Set CSS page
            'list_css_page' => array(
                'invoice.css'
            ),
            // Active menu on sidebar left
            'active_pages'=>'active',
            'active_invoice'=>'active',
            // Page Content
            'page_content'=> 'pages/v_invoice'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function page_messages()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'MESSAGES',
            // Set CSS page
            'list_css_page' => array(
                'messages.css'
            ),
            // Active menu on sidebar left
            'active_pages'=>'active',
            'active_messages'=>'active',
            // Page Content
            'page_content'=> 'pages/v_messages'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function page_timeline()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'TIMELINE',
            // Set CSS page
            'list_css_page' => array(
                'timeline.css'
            ),
            // Set JS CDN
            'list_js_cdn' => array(
                'http://maps.googleapis.com/maps/api/js?sensor=false'
            ),
            // Set JS plugin
            'list_js_plugin' => array(
                'gmap3/dist/gmap3.min.js'
            ),
            // Set JS page
            'list_js_page' => array(
                'blankon.timeline.js'
            ),
            // Active menu on sidebar left
            'active_pages'=>'active',
            'active_timeline'=>'active',
            // Page Content
            'page_content'=> 'pages/v_timeline'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function page_profile()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'PROFILE',
            // Active menu on sidebar left
            'active_pages'=>'active',
            'active_profile'=>'active',
            // Page Content
            'page_content'=> 'pages/v_profile'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function page_search_course()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'SEARCH COURSE',
            // Set CSS plugin
            'list_css_plugin' => array(
                'chosen_v1.2.0/chosen.min.css'
            ),
            // Set CSS page
            'list_css_page' => array(
                'search-basic.css'
            ),
            // Set JS plugin
            'list_js_plugin' => array(
                'chosen_v1.2.0/chosen.jquery.min.js'
            ),
            // Set JS page
            'list_js_page' => array(
                'blankon.search.js'
            ),
            // Active menu on sidebar left
            'active_pages'=>'active',
            'active_search'=>'active',
            'active_search_course'=>'active',
            // Page Content
            'page_content'=> 'pages/search/v_course'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function page_error_403()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'ERROR 403'
        );

        $this->load->view('backend/pages/pages/error/v_error_403', $data);
    }

    public function page_error_403_type2()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'ERROR 403 TYPE 2',
            // Set CSS page
            'list_css_page' => array(
                'error-page.css'
            ),
            // Active menu on sidebar left
            'active_pages'=>'active',
            'active_error'=>'active',
            'active_error_403_type2'=>'active',
            // Page Content
            'page_content'=> 'pages/error/v_error_403_type2'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function page_error_404()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'ERROR 404'
        );

        $this->load->view('backend/pages/pages/error/v_error_404', $data);
    }

    public function page_error_404_type2()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'ERROR 404 TYPE 2',
            // Set CSS page
            'list_css_page' => array(
                'error-page.css'
            ),
            // Active menu on sidebar left
            'active_pages'=>'active',
            'active_error'=>'active',
            'active_error_404_type2'=>'active',
            // Page Content
            'page_content'=> 'pages/error/v_error_404_type2'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function page_error_500()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'ERROR 500'
        );

        $this->load->view('backend/pages/pages/error/v_error_500', $data);
    }

    public function page_error_500_type2()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'ERROR 500 TYPE 2',
            // Set CSS page
            'list_css_page' => array(
                'error-page.css'
            ),
            // Active menu on sidebar left
            'active_pages'=>'active',
            'active_error'=>'active',
            'active_error_500_type2'=>'active',
            // Page Content
            'page_content'=> 'pages/error/v_error_500_type2'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function sign_in()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'SIGN IN'
        );

        $this->load->view('backend/pages/pages/account/v_sign_in', $data);
    }

    public function sign_up()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'SIGN UP'
        );

        $this->load->view('backend/pages/pages/account/v_sign_up', $data);
    }

    public function lost_password()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'LOST PASSWORD'
        );

        $this->load->view('backend/pages/pages/account/v_lost_password', $data);
    }

    public function lock_screen()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'LOCK SCREEN'
        );

        $this->load->view('backend/pages/pages/account/v_lock_screen', $data);
    }

}
