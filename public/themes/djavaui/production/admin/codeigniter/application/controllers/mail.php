<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mail extends CI_Controller {

    public function mail_inbox()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'MAIL INBOX',
            // Set CSS page
            'list_css_page' => array(
                'mail.css'
            ),
            // Set JS page
            'list_js_page' => array(
                'blankon.mail.js'
            ),
            // Active menu on sidebar left
            'active_mail'=>'active',
            'active_mail_inbox'=>'active',
            // Page Content
            'page_content'=> 'mail/v_inbox'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function mail_compose()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'MAIL COMPOSE',
            // Set CSS plugins
            'list_css_plugin' => array(
                'bootstrap-wysihtml5/src/bootstrap-wysihtml5.css',
                'bootstrap-fileupload/css/bootstrap-fileupload.min.css'
            ),
            // Set CSS page
            'list_css_page' => array(
                'mail.css'
            ),
            // Set JS plugins
            'list_js_plugin' => array(
                'bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.min.js',
                'bootstrap-wysihtml5/src/bootstrap-wysihtml5.js',
                'bootstrap-fileupload/js/bootstrap-fileupload.min.js'
            ),
            // Set JS page
            'list_js_page' => array(
                'blankon.mail.js'
            ),
            // Active menu on sidebar left
            'active_mail'=>'active',
            'active_mail_compose'=>'active',
            // Page Content
            'page_content'=> 'mail/v_compose'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function mail_view()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'MAIL VIEW',
            // Set CSS page
            'list_css_page' => array(
                'mail.css'
            ),
            // Active menu on sidebar left
            'active_mail'=>'active',
            'active_mail_view'=>'active',
            // Page Content
            'page_content'=> 'mail/v_view'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

}
