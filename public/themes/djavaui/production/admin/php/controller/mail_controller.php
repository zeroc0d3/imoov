<?php


class mail_controller {

    public function __construct() {
    /*
     * this declaration new class from global config
     * */
        $this->config = new config();
    }

    public function mail_inbox(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'MAIL INBOX | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Inbox', //this title to breadcrumb
            'info'          =>'mail inbox sample', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      => $this->config->cssMailPath(), //load the cssTheme from global config
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  =>' ',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.mail.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuInbox' =>'active',
            'selectInbox'=>'class="selected"',
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
        $content= file_get_contents('view/mail/inbox.php');
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
    public function mail_compose(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'MAIL COMPOSE | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Compose', //this title to breadcrumb
            'info'          =>'mail compose sample', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath().
                              '<link href="'.$pathLevelPlugins.'bootstrap-wysihtml5/src/bootstrap-wysihtml5.css" rel="stylesheet">
                               <link href="'.$pathLevelPlugins.'bootstrap-fileupload/css/bootstrap-fileupload.min.css" rel="stylesheet">', //load the cssBowerPath from global config
            'cssTheme'      => $this->config->cssMailPath(), //load the cssTheme from global config
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  =>' <script src="'.$pathLevelPlugins.'bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.min.js"></script>
                                <script src="'.$pathLevelPlugins.'bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>
                                <script src="'.$pathLevelPlugins.'bootstrap-fileupload/js/bootstrap-fileupload.min.js"></script> ',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.mail.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuCompose' =>'active',
            'selectCompose'=>'class="selected"',
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
        $content= file_get_contents('view/mail/compose.php');
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
    public function mail_view(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'MAIL VIEW | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'View', //this title to breadcrumb
            'info'          =>'mail view sample', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      => $this->config->cssMailPath(), //load the cssTheme from global config
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  =>'  ',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuView' =>'active',
            'selectView'=>'class="selected"',
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
        $content= file_get_contents('view/mail/view.php');
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
