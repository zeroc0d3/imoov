<?php


class widget_controller {

    public function __construct() {
    /*
     * this declaration new class from global config
     * */
        $this->config = new config();
    }

    public function overview(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'OVERVIEW WIDGET | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Overview Widget', //this title to breadcrumb
            'info'          =>'overview widget and more', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '
                            <script src="'.$pathLevelPlugins.'raphael/raphael-min.js"></script>
                            <script src="'.$pathLevelPlugins.'flot/jquery.flot.js"></script>
                            <script src="'.$pathLevelPlugins.'flot/jquery.flot.spline.min.js"></script>
                            <script src="'.$pathLevelPlugins.'flot/jquery.flot.categories.js"></script>
                            <script src="'.$pathLevelPlugins.'flot/jquery.flot.tooltip.min.js"></script>
                            <script src="'.$pathLevelPlugins.'flot/jquery.flot.resize.js"></script>
                            <script src="'.$pathLevelPlugins.'flot/jquery.flot.pie.js"></script>
                            <script src="'.$pathLevelPlugins.'morrisjs/morris.min.js"></script>
            ',
                                    /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.widgets.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuOverview' =>'active',
            'selectOverview'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
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
        $content= file_get_contents('view/widget/overview.php');
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
    public function social(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'SOCIAL WIDGET| BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Social Widget  ', //this title to breadcrumb
            'info'          =>'social widget and more', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssTimelinePath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuSocial' =>'active',
            'selectSocial'=>'class="selected"',
            'sidebar'=>'sidebar-circle',
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
        $content= file_get_contents('view/widget/social.php');
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
    public function blog(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'BLOG WIDGET | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Blog Widget ', //this title to breadcrumb
            'info'          =>'blog widget and more', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuBlog' =>'active',
            'selectBlog'=>'class="selected"',
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
        $content= file_get_contents('view/widget/blog.php');
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
    public function weather(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'WEATHER WIDGET | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Weather Widget ', //this title to breadcrumb
            'info'          =>'weather widget and more', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath().'<link href="'.$pathLevelPlugins.'weather-icons/css/weather-icons.min.css" rel="stylesheet">', //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '<script src="'.$pathLevelPlugins.'skycons-html5/skycons.js"></script>',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.widget.weather.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuWeather' =>'active',
            'selectWeather'=>'class="selected"',
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
        $content= file_get_contents('view/widget/weather.php');
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
    public function misc(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'MISC WIDGET | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Misc Widget  ', //this title to breadcrumb
            'info'          =>'miscellanous widget and more', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '',
            /*
            * load the js of level plugins
            */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuMisc' =>'active',
            'selectMisc'=>'class="selected"',
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
        $content= file_get_contents('view/widget/misc.php');
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
