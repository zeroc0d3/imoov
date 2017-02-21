<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forms extends CI_Controller {

    public function form_element()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'FORM ELEMENT',
            // Set CSS plugin
            'list_css_plugin' => array(
                'bootstrap-tagsinput/dist/bootstrap-tagsinput.css',
                'jasny-bootstrap-fileinput/css/jasny-bootstrap-fileinput.min.css',
                'chosen_v1.2.0/chosen.min.css'
            ),
            // Set JS plugins
            'list_js_plugin' => array(
                'bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js',
                'jasny-bootstrap-fileinput/js/jasny-bootstrap.fileinput.min.js',
                'holderjs/holder.js',
                'bootstrap-maxlength/bootstrap-maxlength.min.js',
                'jquery-autosize/jquery.autosize.min.js',
                'chosen_v1.2.0/chosen.jquery.min.js'
            ),
            // Set JS page
            'list_js_page' => array(
                'blankon.form.element.js'
            ),
            // Active menu on sidebar left
            'active_forms'=>'active',
            'active_form_element'=>'active',
            // Page Content
            'page_content'=> 'forms/v_element'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function form_advanced()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'FORM ADVANCED',
            // Set CSS plugin
            'list_css_plugin' => array(
                'dropzone/downloads/css/dropzone.css',
                'bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css',
                'bootstrap-datepicker-vitalets/css/datepicker.css'
            ),
            // Set JS plugins
            'list_js_plugin' => array(
                'dropzone/downloads/dropzone.min.js',
                'bootstrap-switch/dist/js/bootstrap-switch.min.js',
                'jquery.inputmask/dist/jquery.inputmask.bundle.min.js',
                'bootstrap-datepicker-vitalets/js/bootstrap-datepicker.js'
            ),
            // Set JS page
            'list_js_page' => array(
                'blankon.form.advanced.js'
            ),
            // Active menu on sidebar left
            'active_forms'=>'active',
            'active_form_advanced'=>'active',
            // Page Content
            'page_content'=> 'forms/v_advanced'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function form_layout()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'FORM LAYOUT',
            // Set CSS plugin
            'list_css_plugin' => array(
                'bootstrap-fileupload/css/bootstrap-fileupload.min.css',
                'chosen_v1.2.0/chosen.min.css'
            ),
            // Set JS plugins
            'list_js_plugin' => array(
                'bootstrap-fileupload/js/bootstrap-fileupload.min.js',
                'chosen_v1.2.0/chosen.jquery.min.js'
            ),
            // Set JS page
            'list_js_page' => array(
                'blankon.form.layout.js'
            ),
            // Active menu on sidebar left
            'active_forms'=>'active',
            'active_form_layout'=>'active',
            // Page Content
            'page_content'=> 'forms/v_layout'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function form_validation()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'FORM VALIDATION',
            // Set JS plugins
            'list_js_plugin' => array(
                'chosen_v1.2.0/chosen.jquery.min.js',
                'jquery-mockjax/jquery.mockjax.js',
                'jquery-validation/dist/jquery.validate.min.js'
            ),
            // Set JS page
            'list_js_page' => array(
                'blankon.form.validation.js'
            ),
            // Active menu on sidebar left
            'active_forms'=>'active',
            'active_form_validation'=>'active',
            // Page Content
            'page_content'=> 'forms/v_validation'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function form_wizard()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'FORM WIZARD',
            // Set JS plugins
            'list_js_plugin' => array(
                'jquery-validation/dist/jquery.validate.min.js',
                'twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js'
            ),
            // Set JS page
            'list_js_page' => array(
                'blankon.form.wizard.js'
            ),
            // Active menu on sidebar left
            'active_forms'=>'active',
            'active_form_wizard'=>'active',
            // Page Content
            'page_content'=> 'forms/v_wizard'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function form_wysiwyg()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'FORM WYSIWYG',
            // Set CSS plugin
            'list_css_plugin' => array(
                'bootstrap-wysihtml5/src/bootstrap-wysihtml5.css',
                'summernote/dist/summernote.css'
            ),
            // Set JS plugins
            'list_js_plugin' => array(
                'bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.min.js',
                'bootstrap-wysihtml5/src/bootstrap-wysihtml5.js',
                'summernote/dist/summernote.min.js'
            ),
            // Set JS page
            'list_js_page' => array(
                'blankon.form.wysiwyg.js'
            ),
            // Active menu on sidebar left
            'active_forms'=>'active',
            'active_form_wysiwyg'=>'active',
            // Page Content
            'page_content'=> 'forms/v_wysiwyg'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

    public function form_xeditable()
    {
        // Set title page
        $data = array(
            // Set title page
            'title' => 'FORM X-EDITABLE',
            // Set CSS plugin
            'list_css_plugin' => array(
                'select2-ng/select2.css',
                'select2-ng/select2-bootstrap.css',
                'smalot-bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
                'x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css',
                'x-editable/dist/inputs-ext/typeaheadjs/lib/typeahead.js-bootstrap.css',
                'x-editable/dist/inputs-ext/address/address.css'
            ),
            // Set JS plugins
            'list_js_plugin' => array(
                'jquery-mockjax/jquery.mockjax.js',
                'moment/min/moment.min.js',
                'select2-ng/select2.min.js',
                'smalot-bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
                'x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js',
                'x-editable/dist/inputs-ext/typeaheadjs/lib/typeahead.js',
                'x-editable/dist/inputs-ext/typeaheadjs/typeaheadjs.js',
                'x-editable/dist/inputs-ext/address/address.js'
            ),
            // Set JS page
            'list_js_page' => array(
                'blankon.form.xeditable.js'
            ),
            // Active menu on sidebar left
            'active_forms'=>'active',
            'active_form_xeditable'=>'active',
            // Page Content
            'page_content'=> 'forms/v_xeditable'
        );

        $this->load->view('backend/layout/v_main', $data);
    }

}
