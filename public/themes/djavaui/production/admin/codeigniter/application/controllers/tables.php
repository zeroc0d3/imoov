<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tables extends CI_Controller {

    public function table_default()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'DEFAULT TABLE',
            // Active menu on sidebar left
            'active_tables'=>'active',
            'active_table_default'=>'active',
            // Page Content
            'page_content'=> 'tables/v_default'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function table_color()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'COLOR TABLE',
            // Active menu on sidebar left
            'active_tables'=>'active',
            'active_table_color'=>'active',
            // Page Content
            'page_content'=> 'tables/v_color'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function table_datatable()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'DATATABLE',
            // Set CSS plugin
            'list_css_plugin' => array(
                'datatables/css/dataTables.bootstrap.css',
                'datatables/css/datatables.responsive.css',
                'fuelux/dist/css/fuelux.min.css'
            ),
            // Set JS plugins
            'list_js_plugin' => array(
                'datatables/js/jquery.dataTables.min.js',
                'datatables/js/dataTables.bootstrap.js',
                'datatables/js/datatables.responsive.js',
                'fuelux/dist/js/fuelux.min.js'
            ),
            // Set JS page
            'list_js_page' => array(
                'blankon.table.js'
            ),
            // Active menu on sidebar left
            'active_tables'=>'active',
            'active_table_datatable'=>'active',
            // Page Content
            'page_content'=> 'tables/v_datatable'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

}
