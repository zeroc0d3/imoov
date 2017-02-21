<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Animate extends CI_Controller {

    public function index()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'ANIMATE.CSS',
            // Set JS page
            'list_js_page' => array(
                'blankon.animate.js'
            ),
            // Active menu on sidebar left
            'active_animate'=>'active',
            // Page Content
            'page_content'=> 'v_animate'
        );

        $this->load->view('backend/layout/v_main', $data);
    }
}
