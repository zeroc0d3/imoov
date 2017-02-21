<?php


class form_controller {

    public function __construct() {
    /*
     * this declaration new class from global config
     * */
        $this->config = new config();
    }

    public function form_element(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'FORM ELEMENT | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Form Elements', //this title to breadcrumb
            'info'          =>'form elements and more', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath().
                            ' <link href="'.$pathLevelPlugins.'bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet">
                              <link href="'.$pathLevelPlugins.'jasny-bootstrap-fileinput/css/jasny-bootstrap-fileinput.min.css" rel="stylesheet">
                              <link href="'.$pathLevelPlugins.'chosen_v1.2.0/chosen.min.css" rel="stylesheet">', //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  =>' <script src="'.$pathLevelPlugins.'bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
                                <script src="'.$pathLevelPlugins.'jasny-bootstrap-fileinput/js/jasny-bootstrap.fileinput.min.js"></script>
                                <script src="'.$pathLevelPlugins.'holderjs/holder.js"></script>
                                <script src="'.$pathLevelPlugins.'bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
                                <script src="'.$pathLevelPlugins.'jquery-autosize/jquery.autosize.min.js"></script>
                                <script src="'.$pathLevelPlugins.'chosen_v1.2.0/chosen.jquery.min.js"></script>
                            ',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.form.element.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuFormElement' =>'active',
            'selectFormElement'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed',
            /*
             * load the js of level script
             */
            'url'=>$this->config->getBase_url(), //assign the base url from global config
            'urlSidebarMenu'=>$this->config->getMenu_url() //assign url sidebar menu
        );
        /*
         * this a declaration the default view to use
         */
        $template = file_get_contents('view/layout.php');

        $header = file_get_contents('partial/header.php');
        $template = str_replace('{header}', $header, $template);             //assign $header to {header}
        $sidebarLeft = file_get_contents('partial/sidebar-left.php');
        $template = str_replace('{sidebarLeft}', $sidebarLeft, $template);  //assign $sidebarLeft to {sidebarLeft}
        $sidebarRight = file_get_contents('partial/sidebar-right.php');
        $template = str_replace('{sidebarRight}', $sidebarRight, $template); //assign $sidebarRight to {sidebarRight}
        $content= file_get_contents('view/forms/element.php');
        $template = str_replace('{content}', $content, $template);           //assign $header to {content}
        $footer = file_get_contents('partial/footer.php');
        $template = str_replace('{footer}', $footer, $template);             //assign $footer to {footer}

        /*
         * get the key of library
         */
        foreach ($library as $key => $value) {
            /*
             * get value and key then assign to $template view
             */
            $template = str_replace('{'.$key.'}', $value, $template);
        }
        /*
         * show the
         */
        print($template);

    }

    public function form_advanced(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'FORM ADVANCED | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Form Advanced', //this title to breadcrumb
            'info'          =>'form advanced plugins', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath().
                            '<link href="'.$pathLevelPlugins.'dropzone/downloads/css/dropzone.css" rel="stylesheet">
                            <link href="'.$pathLevelPlugins.'bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css" rel="stylesheet">
                            <link href="'.$pathLevelPlugins.'bootstrap-datepicker-vitalets/css/datepicker.css" rel="stylesheet">', //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '<script src="'.$pathLevelPlugins.'dropzone/downloads/dropzone.min.js"></script>
                                <script src="'.$pathLevelPlugins.'bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
                                <script src="'.$pathLevelPlugins.'jquery.inputmask/dist/jquery.inputmask.bundle.min.js"></script>
                                <script src="'.$pathLevelPlugins.'bootstrap-datepicker-vitalets/js/bootstrap-datepicker.js"></script>
                                ',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.form.advanced.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuFormAdvanced' =>'active',
            'selectFormAdvanced'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed',
            /*
             * load the js of level script
             */
            'url'=>$this->config->getBase_url(), //assign the base url from global config
            'urlSidebarMenu'=>$this->config->getMenu_url() //assign url sidebar menu
        );
        /*
         * this a declaration the default view to use
         */
        $template = file_get_contents('view/layout.php');

        $header = file_get_contents('partial/header.php');
        $template = str_replace('{header}', $header, $template);             //assign $header to {header}
        $sidebarLeft = file_get_contents('partial/sidebar-left.php');
        $template = str_replace('{sidebarLeft}', $sidebarLeft, $template);  //assign $sidebarLeft to {sidebarLeft}
        $sidebarRight = file_get_contents('partial/sidebar-right.php');
        $template = str_replace('{sidebarRight}', $sidebarRight, $template); //assign $sidebarRight to {sidebarRight}
        $content= file_get_contents('view/forms/advanced.php');
        $template = str_replace('{content}', $content, $template);           //assign $header to {content}
        $footer = file_get_contents('partial/footer.php');
        $template = str_replace('{footer}', $footer, $template);             //assign $footer to {footer}

        /*
         * get the key of library
         */
        foreach ($library as $key => $value) {
            /*
             * get value and key then assign to $template view
             */
            $template = str_replace('{'.$key.'}', $value, $template);
        }
        /*
         * show the
         */
        print($template);

    }

    public function form_layout(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'FORM LAYOUT | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Form Layouts', //this title to breadcrumb
            'info'          =>'variant form layouts', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath().
                              '<link href="'.$pathLevelPlugins.'bootstrap-fileupload/css/bootstrap-fileupload.min.css" rel="stylesheet">
                               <link href="'.$pathLevelPlugins.'chosen_v1.2.0/chosen.min.css" rel="stylesheet">', //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '<script src="'.$pathLevelPlugins.'bootstrap-fileupload/js/bootstrap-fileupload.min.js"></script>
                                <script src="'.$pathLevelPlugins.'chosen_v1.2.0/chosen.jquery.min.js"></script>
                                ',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.form.layout.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuFormLayout' =>'active',
            'selectFormLayout'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed',
            /*
             * load the js of level script
             */
            'url'=>$this->config->getBase_url(), //assign the base url from global config
            'urlSidebarMenu'=>$this->config->getMenu_url() //assign url sidebar menu
        );
        /*
         * this a declaration the default view to use
         */
        $template = file_get_contents('view/layout.php');

        $header = file_get_contents('partial/header.php');
        $template = str_replace('{header}', $header, $template);             //assign $header to {header}
        $sidebarLeft = file_get_contents('partial/sidebar-left.php');
        $template = str_replace('{sidebarLeft}', $sidebarLeft, $template);  //assign $sidebarLeft to {sidebarLeft}
        $sidebarRight = file_get_contents('partial/sidebar-right.php');
        $template = str_replace('{sidebarRight}', $sidebarRight, $template); //assign $sidebarRight to {sidebarRight}
        $content= file_get_contents('view/forms/layout.php');
        $template = str_replace('{content}', $content, $template);           //assign $header to {content}
        $footer = file_get_contents('partial/footer.php');
        $template = str_replace('{footer}', $footer, $template);             //assign $footer to {footer}

        /*
         * get the key of library
         */
        foreach ($library as $key => $value) {
            /*
             * get value and key then assign to $template view
             */
            $template = str_replace('{'.$key.'}', $value, $template);
        }
        /*
         * show the
         */
        print($template);

    }

    public function form_validation(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'FORM VALIDATION | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Form Validations', //this title to breadcrumb
            'info'          =>'form validation samples', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '<script src="'.$pathLevelPlugins.'chosen_v1.2.0/chosen.jquery.min.js"></script>
                                <script src="'.$pathLevelPlugins.'jquery-mockjax/jquery.mockjax.js"></script>
                                <script src="'.$pathLevelPlugins.'jquery-validation/dist/jquery.validate.min.js"></script>',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.form.validation.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuFormValidation' =>'active',
            'selectFormValidation'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed',
            /*
             * load the js of level script
             */
            'url'=>$this->config->getBase_url(), //assign the base url from global config
            'urlSidebarMenu'=>$this->config->getMenu_url() //assign url sidebar menu
        );
        /*
         * this a declaration the default view to use
         */
        $template = file_get_contents('view/layout.php');

        $header = file_get_contents('partial/header.php');
        $template = str_replace('{header}', $header, $template);             //assign $header to {header}
        $sidebarLeft = file_get_contents('partial/sidebar-left.php');
        $template = str_replace('{sidebarLeft}', $sidebarLeft, $template);  //assign $sidebarLeft to {sidebarLeft}
        $sidebarRight = file_get_contents('partial/sidebar-right.php');
        $template = str_replace('{sidebarRight}', $sidebarRight, $template); //assign $sidebarRight to {sidebarRight}
        $content= file_get_contents('view/forms/validation.php');
        $template = str_replace('{content}', $content, $template);           //assign $header to {content}
        $footer = file_get_contents('partial/footer.php');
        $template = str_replace('{footer}', $footer, $template);             //assign $footer to {footer}

        /*
         * get the key of library
         */
        foreach ($library as $key => $value) {
            /*
             * get value and key then assign to $template view
             */
            $template = str_replace('{'.$key.'}', $value, $template);
        }
        /*
         * show the
         */
        print($template);

    }
    public function form_wizard(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'FORM WIZARD | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Form Wizard', //this title to breadcrumb
            'info'          =>'form wizard sample', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '<script src="'.$pathLevelPlugins.'jquery-validation/dist/jquery.validate.min.js"></script>
                                <script src="'.$pathLevelPlugins.'twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.form.wizard.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuFormWizard' =>'active',
            'selectFormWizard'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed',
            /*
             * load the js of level script
             */
            'url'=>$this->config->getBase_url(), //assign the base url from global config
            'urlSidebarMenu'=>$this->config->getMenu_url() //assign url sidebar menu
        );
        /*
         * this a declaration the default view to use
         */
        $template = file_get_contents('view/layout.php');

        $header = file_get_contents('partial/header.php');
        $template = str_replace('{header}', $header, $template);             //assign $header to {header}
        $sidebarLeft = file_get_contents('partial/sidebar-left.php');
        $template = str_replace('{sidebarLeft}', $sidebarLeft, $template);  //assign $sidebarLeft to {sidebarLeft}
        $sidebarRight = file_get_contents('partial/sidebar-right.php');
        $template = str_replace('{sidebarRight}', $sidebarRight, $template); //assign $sidebarRight to {sidebarRight}
        $content= file_get_contents('view/forms/wizard.php');
        $template = str_replace('{content}', $content, $template);           //assign $header to {content}
        $footer = file_get_contents('partial/footer.php');
        $template = str_replace('{footer}', $footer, $template);             //assign $footer to {footer}

        /*
         * get the key of library
         */
        foreach ($library as $key => $value) {
            /*
             * get value and key then assign to $template view
             */
            $template = str_replace('{'.$key.'}', $value, $template);
        }
        /*
         * show the
         */
        print($template);

    }
    public function form_wysiwyg(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'FORM WYSIWYG | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'WYSIWYG', //this title to breadcrumb
            'info'          =>'form text editor', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath().
                               '<link href="'.$pathLevelPlugins.'bootstrap-wysihtml5/src/bootstrap-wysihtml5.css" rel="stylesheet">
                                <link href="'.$pathLevelPlugins.'summernote/dist/summernote.css" rel="stylesheet">', //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '<script src="'.$pathLevelPlugins.'bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.min.js"></script>
                                <script src="'.$pathLevelPlugins.'bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>
                                <script src="'.$pathLevelPlugins.'summernote/dist/summernote.min.js"></script>',
             /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.form.wysiwyg.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuWysiwyg' =>'active',
            'selectWysiwyg'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed',
            /*
             * load the js of level script
             */
            'url'=>$this->config->getBase_url(), //assign the base url from global config
            'urlSidebarMenu'=>$this->config->getMenu_url() //assign url sidebar menu
        );
        /*
         * this a declaration the default view to use
         */
        $template = file_get_contents('view/layout.php');

        $header = file_get_contents('partial/header.php');
        $template = str_replace('{header}', $header, $template);             //assign $header to {header}
        $sidebarLeft = file_get_contents('partial/sidebar-left.php');
        $template = str_replace('{sidebarLeft}', $sidebarLeft, $template);  //assign $sidebarLeft to {sidebarLeft}
        $sidebarRight = file_get_contents('partial/sidebar-right.php');
        $template = str_replace('{sidebarRight}', $sidebarRight, $template); //assign $sidebarRight to {sidebarRight}
        $content= file_get_contents('view/forms/wysiwyg.php');
        $template = str_replace('{content}', $content, $template);           //assign $header to {content}
        $footer = file_get_contents('partial/footer.php');
        $template = str_replace('{footer}', $footer, $template);             //assign $footer to {footer}

        /*
         * get the key of library
         */
        foreach ($library as $key => $value) {
            /*
             * get value and key then assign to $template view
             */
            $template = str_replace('{'.$key.'}', $value, $template);
        }
        /*
         * show the
         */
        print($template);

    }
    public function form_xeditable(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'FORM X-EDITABLE | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'X-Editable', //this title to breadcrumb
            'info'          =>'In-place editing with Twitter Bootstrap', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath().
                                '<link href="'.$pathLevelPlugins.'select2-ng/select2.css" rel="stylesheet">
                                <link href="'.$pathLevelPlugins.'select2-ng/select2-bootstrap.css" rel="stylesheet">
                                <link href="'.$pathLevelPlugins.'smalot-bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
                                <link href="'.$pathLevelPlugins.'x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
                                <link href="'.$pathLevelPlugins.'x-editable/dist/inputs-ext/typeaheadjs/lib/typeahead.js-bootstrap.css" rel="stylesheet">
                                <link href="'.$pathLevelPlugins.'x-editable/dist/inputs-ext/address/address.css" rel="stylesheet">', //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => ' <script src="'.$pathLevelPlugins.'jquery-mockjax/jquery.mockjax.js"></script>
                                <script src="'.$pathLevelPlugins.'moment/min/moment.min.js"></script>
                                <script src="'.$pathLevelPlugins.'select2-ng/select2.min.js"></script>
                                <script src="'.$pathLevelPlugins.'smalot-bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
                                <script src="'.$pathLevelPlugins.'x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
                                <script src="'.$pathLevelPlugins.'x-editable/dist/inputs-ext/typeaheadjs/lib/typeahead.js"></script>
                                <script src="'.$pathLevelPlugins.'x-editable/dist/inputs-ext/typeaheadjs/typeaheadjs.js"></script>
                                <script src="'.$pathLevelPlugins.'x-editable/dist/inputs-ext/address/address.js"></script>',
                                    /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.form.xeditable.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuEditable' =>'active',
            'selectEditable'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
            'body'=>'page-session page-sound page-header-fixed page-sidebar-fixed',
            /*
             * load the js of level script
             */
            'url'=>$this->config->getBase_url(), //assign the base url from global config
            'urlSidebarMenu'=>$this->config->getMenu_url() //assign url sidebar menu
        );
        /*
         * this a declaration the default view to use
         */
        $template = file_get_contents('view/layout.php');

        $header = file_get_contents('partial/header.php');
        $template = str_replace('{header}', $header, $template);             //assign $header to {header}
        $sidebarLeft = file_get_contents('partial/sidebar-left.php');
        $template = str_replace('{sidebarLeft}', $sidebarLeft, $template);  //assign $sidebarLeft to {sidebarLeft}
        $sidebarRight = file_get_contents('partial/sidebar-right.php');
        $template = str_replace('{sidebarRight}', $sidebarRight, $template); //assign $sidebarRight to {sidebarRight}
        $content= file_get_contents('view/forms/xeditable.php');
        $template = str_replace('{content}', $content, $template);           //assign $header to {content}
        $footer = file_get_contents('partial/footer.php');
        $template = str_replace('{footer}', $footer, $template);             //assign $footer to {footer}

        /*
         * get the key of library
         */
        foreach ($library as $key => $value) {
            /*
             * get value and key then assign to $template view
             */
            $template = str_replace('{'.$key.'}', $value, $template);
        }
        /*
         * show the
         */
        print($template);

    }
}

?>
