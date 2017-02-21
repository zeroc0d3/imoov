<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Charts extends CI_Controller {

    public function chart_flot()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'FLOT CHARTS',
            // Set JS plugins
            'list_js_plugin' => array(
                'flot/jquery.flot.js',
                'flot/jquery.flot.spline.min.js',
                'flot/jquery.flot.categories.js',
                'flot/jquery.flot.tooltip.min.js',
                'flot/jquery.flot.resize.js',
                'flot/jquery.flot.pie.js'
            ),
            // Set JS page
            'list_js_page' => array(
                'blankon.chart.flot.js'
            ),
            // Active menu on sidebar left
            'active_charts'=>'active',
            'active_chart_flot'=>'active',
            // Page Content
            'page_content'=> 'charts/v_flot'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function chart_morris()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'MORRIS CHARTS',
            // Set CSS plugins
            'list_css_plugin' => array(
                'morrisjs/morris.css'
            ),
            // Set JS plugins
            'list_js_plugin' => array(
                'raphael/raphael-min.js',
                'morrisjs/morris.min.js'
            ),
            // Set JS page
            'list_js_page' => array(
                'blankon.chart.morris.js'
            ),
            // Active menu on sidebar left
            'active_charts'=>'active',
            'active_chart_morris'=>'active',
            // Page Content
            'page_content'=> 'charts/v_morris'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function chart_chartjs()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'CHARTJS CHARTS',
            // Set JS plugins
            'list_js_plugin' => array(
                'chartjs/Chart.min.js'
            ),
            // Set JS page
            'list_js_page' => array(
                'blankon.chart.chartjs.js'
            ),
            // Active menu on sidebar left
            'active_charts'=>'active',
            'active_chart_chartjs'=>'active',
            // Page Content
            'page_content'=> 'charts/v_chartjs'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function chart_c3js()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'C3JS CHARTS',
            // Set CSS plugins
            'list_css_plugin' => array(
                'c3js-chart/c3.min.css'
            ),
            // Set JS plugins
            'list_js_plugin' => array(
                'd3/d3.min.js',
                'c3js-chart/c3.min.js'
            ),
            // Set JS page
            'list_js_page' => array(
                'blankon.chart.c3.js'
            ),
            // Active menu on sidebar left
            'active_charts'=>'active',
            'active_chart_c3js'=>'active',
            // Page Content
            'page_content'=> 'charts/v_c3js'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

}
