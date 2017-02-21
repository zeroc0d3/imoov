<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function blog_grid()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'BLOG GRID',
            // Set JS plugins
            'list_js_plugin' => array(
                'masonry/dist/masonry.pkgd.min.js'
            ),
            // Set JS page
            'list_js_page' => array(
                'blankon.blog.js'
            ),
            // Active menu on sidebar left
            'active_blog'=>'active',
            'active_blog_grid'=>'active',
            // Page Content
            'page_content'=> 'blog/v_grid'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function blog_list()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'BLOG LIST',
            // Set JS plugins
            'list_js_plugin' => array(
                'masonry/dist/masonry.pkgd.min.js'
            ),
            // Set JS page
            'list_js_page' => array(
                'blankon.blog.js'
            ),
            // Active menu on sidebar left
            'active_blog'=>'active',
            'active_blog_list'=>'active',
            // Page Content
            'page_content'=> 'blog/v_list'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function blog_single()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'BLOG SINGLE',
            // Set CSS plugins
            'list_css_plugin' => array(
                'bootstrap-wysihtml5/src/bootstrap-wysihtml5.css'
            ),
            // Set JS plugins
            'list_js_plugin' => array(
                'bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.min.js',
                'bootstrap-wysihtml5/src/bootstrap-wysihtml5.js'
            ),
            // Set JS page
            'list_js_page' => array(
                'blankon.blog.js'
            ),
            // Active menu on sidebar left
            'active_blog'=>'active',
            'active_blog_single'=>'active',
            // Page Content
            'page_content'=> 'blog/v_single'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

}
