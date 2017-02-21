<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Maps extends CI_Controller {

    public function map_google()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'GOOGLE MAP',
            // Set JS CDN
            'list_js_cdn' => array(
                'http://maps.googleapis.com/maps/api/js?sensor=false'
            ),
            // Set JS plugins
            'list_js_plugin' => array(
                'gmap3/dist/gmap3.min.js'
            ),
            // Set JS page
            'list_js_page' => array(
                'blankon.maps.google.js'
            ),
            // Active menu on sidebar left
            'active_maps'=>'active',
            'active_map_google'=>'active',
            // Page Content
            'page_content'=> 'maps/v_google'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function map_vector()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'VECTOR MAP',
            // Set CSS plugin
            'list_css_plugin' => array(
                'jqvmap/jqvmap.css'
            ),
            // Set JS plugins
            'list_js_plugin' => array(
                'jqvmap/jquery.vmap.min.js',
                'jqvmap/maps/jquery.vmap.world.js',
                'jqvmap/maps/jquery.vmap.usa.js',
                'jqvmap/maps/jquery.vmap.russia.js',
                'jqvmap/maps/jquery.vmap.algeria.js',
                'jqvmap/maps/jquery.vmap.germany.js',
                'jqvmap/maps/continents/jquery.vmap.africa.js',
                'jqvmap/maps/continents/jquery.vmap.asia.js',
                'jqvmap/maps/continents/jquery.vmap.australia.js',
                'jqvmap/maps/continents/jquery.vmap.europe.js',
                'jqvmap/maps/continents/jquery.vmap.north-america.js',
                'jqvmap/maps/continents/jquery.vmap.south-america.js',
                'jqvmap/data/jquery.vmap.sampledata.js'
            ),
            // Set JS page
            'list_js_page' => array(
                'blankon.maps.vector.js'
            ),
            // Active menu on sidebar left
            'active_maps'=>'active',
            'active_map_vector'=>'active',
            // Page Content
            'page_content'=> 'maps/v_vector'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

}
