<?php


class pages_controller {

    public function __construct() {
    /*
     * this declaration new class from global config
     * */
        $this->config = new config();
    }

    public function page_gallery(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'GALLERY | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Gallery', //this title to breadcrumb
            'info'          =>'gallery style', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      => $this->config->cssGalleryPath(), //load the cssTheme from global config
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  =>' <script src="'.$pathLevelPlugins.'mixitup/build/jquery.mixitup.min.js"></script> ',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.gallery.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuGallery' =>'active',
            'selectGallery'=>'class="selected"',
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
        $content= file_get_contents('view/pages/gallery.php');
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

    public function page_faq(){
        $pathLevelCommercialPlugins="".$this->config->getBase_url()."assets/commercial/plugins/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'FAQ | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'FAQ', //this title to breadcrumb
            'info'          =>'frequently asked questions', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath(). //load the cssBowerPath from global config
                                '<link href="'.$pathLevelCommercialPlugins.'cube-portfolio/cubeportfolio/css/cubeportfolio.css" rel="stylesheet">', //load the cssBowerPath from global config
            'cssTheme'      => $this->config->cssFaqPath(), //load the cssTheme from global config
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  =>' <script src="'.$pathLevelCommercialPlugins.'cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"></script> ',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.faq.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuFaq' =>'active',
            'selectFaq'=>'class="selected"',
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
        $content= file_get_contents('view/pages/faq.php');
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

    public function page_calendar(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'CALENDAR | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Calendar', //this title to breadcrumb
            'info'          =>'create your schedules', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath().
                               '
                                <link href="'.$pathLevelPlugins.'bootstrap-calendar/css/calendar.min.css" rel="stylesheet">
                                <link href="'.$pathLevelPlugins.'chosen_v1.2.0/chosen.min.css" rel="stylesheet">', //load the cssBowerPath from global config
            'cssTheme'      => $this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   => $this->config->corePluginsCalendarPath(), //load the js corePluginsPath from global config
            'levelPlugins'  =>'<script src="'.$pathLevelPlugins.'jsTimezoneDetect/jstz.min.js"></script>
                               <script src="'.$pathLevelPlugins.'bootstrap-calendar/js/language/nl-NL.js"></script>
                               <script src="'.$pathLevelPlugins.'bootstrap-calendar/js/language/fr-FR.js"></script>
                               <script src="'.$pathLevelPlugins.'bootstrap-calendar/js/language/de-DE.js"></script>
                               <script src="'.$pathLevelPlugins.'bootstrap-calendar/js/language/el-GR.js"></script>
                               <script src="'.$pathLevelPlugins.'bootstrap-calendar/js/language/it-IT.js"></script>
                               <script src="'.$pathLevelPlugins.'bootstrap-calendar/js/language/pl-PL.js"></script>
                               <script src="'.$pathLevelPlugins.'bootstrap-calendar/js/language/pt-BR.js"></script>
                               <script src="'.$pathLevelPlugins.'bootstrap-calendar/js/language/ro-RO.js"></script>
                               <script src="'.$pathLevelPlugins.'bootstrap-calendar/js/language/es-MX.js"></script>
                               <script src="'.$pathLevelPlugins.'bootstrap-calendar/js/language/es-ES.js"></script>
                               <script src="'.$pathLevelPlugins.'bootstrap-calendar/js/language/ru-RU.js"></script>
                               <script src="'.$pathLevelPlugins.'bootstrap-calendar/js/language/sv-SE.js"></script>
                               <script src="'.$pathLevelPlugins.'bootstrap-calendar/js/language/zh-CN.js"></script>
                               <script src="'.$pathLevelPlugins.'bootstrap-calendar/js/language/cs-CZ.js"></script>
                               <script src="'.$pathLevelPlugins.'bootstrap-calendar/js/language/ko-KR.js"></script>
                               <script src="'.$pathLevelPlugins.'bootstrap-calendar/js/language/id-ID.js"></script>
                               <script src="'.$pathLevelPlugins.'bootstrap-calendar/js/calendar.min.js"></script>
                               <script src="'.$pathLevelPlugins.'chosen_v1.2.0/chosen.jquery.min.js"></script> ',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.calendar.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuCalendar' =>'active',
            'selectCalendar'=>'class="selected"',
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
        $content= file_get_contents('view/pages/calendar.php');
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

    public function page_invoice(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'INVOICE | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Invoice', //this title to breadcrumb
            'info'          =>'invoice sample', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      => $this->config->cssInvoicePath(), //load the cssTheme from global config
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  =>'',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuInvoice' =>'active',
            'selectInvoice'=>'class="selected"',
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
        $content= file_get_contents('view/pages/invoice.php');
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

    public function page_messages(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'MESSAGES | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Messages', //this title to breadcrumb
            'info'          =>'messages sample', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      => $this->config->cssMessagesPath(), //load the cssTheme from global config
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  =>'',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuMessages' =>'active',
            'selectMessages'=>'class="selected"',
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
        $content= file_get_contents('view/pages/messages.php');
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

    public function page_timeline(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'TIMELINE | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Timeline', //this title to breadcrumb
            'info'          =>'timeline activity', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      => $this->config->cssTimelinePath(), //load the cssTheme from global config
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  =>'
                               <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
                               <script src="'.$pathLevelPlugins.'gmap3/dist/gmap3.min.js"></script>
                            ',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.timeline.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuTimeline' =>'active',
            'selectTimeline'=>'class="selected"',
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
        $content= file_get_contents('view/pages/timeline.php');
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

    public function page_profile(){

        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'PROFILE | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Profile', //this title to breadcrumb
            'info'          =>'profile sample', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      => $this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  =>'',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuProfile' =>'active',
            'selectProfile'=>'class="selected"',
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
        $content= file_get_contents('view/pages/profile.php');
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

    public function page_search_course(){

        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'SEARCH COURSE | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Search Course', //this title to breadcrumb
            'info'          =>'Result Course Page', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath().
                               '  <link href="'.$pathLevelPlugins.'chosen_v1.2.0/chosen.min.css" rel="stylesheet">', //load the cssBowerPath from global config
            'cssTheme'      => $this->config->cssSearchPath(), //load the cssTheme from global config
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  =>'
                                <script src="'.$pathLevelPlugins.'/chosen_v1.2.0/chosen.jquery.min.js"></script>',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.search.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuSearch' =>'active',
            'selectSearch'=>'class="selected"',
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
        $content= file_get_contents('view/pages/search-course.php');
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

    public function page_error_403(){

        $library = Array(
            'title'         =>'ERROR 403 | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Search Course', //this title to breadcrumb
            'info'          =>'Result Course Page', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath(),
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'menuError403' =>'active',
            'selectError403'=>'class="selected"',
            /*
             * load the js of level script
             */
            'url'=>$this->config->getBase_url(), //assign the base url from global config
            'urlSidebarMenu'=>$this->config->getMenu_url() //assign url sidebar menu
        );
        /*
         * this a declaration the default view to use
         */
        $template = file_get_contents('view/error.php');

        $content= file_get_contents('view/pages/error-403.php');
        $template = str_replace('{content}', $content, $template);           //assign $header to {content}
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

    public function page_error_403_type_2(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'ERROR 403 | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Error 403', //this title to breadcrumb
            'info'          =>'access is denied', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      => $this->config->csseErrorPath(), //load the cssTheme from global config
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  =>'',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.layout.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuError403T2' =>'active',
            'selectError403T2'=>'class="selected"',
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
        $content= file_get_contents('view/pages/error-403-type-2.php');
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

    public function page_error_404(){

        $library = Array(
            'title'         =>'ERROR 404 | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Search Course', //this title to breadcrumb
            'info'          =>'Result Course Page', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath(),
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'menuError404' =>'active',
            'selectError404'=>'class="selected"',
            /*
             * load the js of level script
             */
            'url'=>$this->config->getBase_url(), //assign the base url from global config
            'urlSidebarMenu'=>$this->config->getMenu_url() //assign url sidebar menu
        );
        /*
         * this a declaration the default view to use
         */
        $template = file_get_contents('view/error.php');

        $content= file_get_contents('view/pages/error-404.php');
        $template = str_replace('{content}', $content, $template);           //assign $header to {content}
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

    public function page_error_404_type_2(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'ERROR 404 | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Error 404', //this title to breadcrumb
            'info'          =>'access is denied', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      => $this->config->csseErrorPath(), //load the cssTheme from global config
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  =>'',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.layout.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuError404T2' =>'active',
            'selectError404T2'=>'class="selected"',
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
        $content= file_get_contents('view/pages/error-404-type-2.php');
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

    public function page_error_500(){

        $library = Array(
            'title'         =>'ERROR 500| BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Search Course', //this title to breadcrumb
            'info'          =>'Result Course Page', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath(),
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'menuError404' =>'active',
            'selectError404'=>'class="selected"',
            /*
             * load the js of level script
             */
            'url'=>$this->config->getBase_url(), //assign the base url from global config
            'urlSidebarMenu'=>$this->config->getMenu_url() //assign url sidebar menu
        );
        /*
         * this a declaration the default view to use
         */
        $template = file_get_contents('view/error.php');

        $content= file_get_contents('view/pages/error-500.php');
        $template = str_replace('{content}', $content, $template);           //assign $header to {content}
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

    public function page_error_500_type_2(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'ERROR 500 | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Error 500', //this title to breadcrumb
            'info'          =>'internal server error', //this info of breadcrumb
            'css'           => $this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      => $this->config->csseErrorPath(), //load the cssTheme from global config
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  =>'',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.layout.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuError500T2' =>'active',
            'selectError500T2'=>'class="selected"',
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
        $content= file_get_contents('view/pages/error-500-type-2.php');
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

    public function page_signin(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'SIGN IN | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Search Course', //this title to breadcrumb
            'info'          =>'Result Course Page', //this info of breadcrumb
            'css'           => $this->config->cssSignInPath(),
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'menuError404' =>'active',
            'selectError404'=>'class="selected"',
            'levelPlugins'  =>'<script src="'.$pathLevelPlugins.'jquery-validation/dist/jquery.validate.min.js"></script>',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'pages/blankon.sign.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            /*
             * load the js of level script
             */
            'url'=>$this->config->getBase_url(), //assign the base url from global config
            'urlSidebarMenu'=>$this->config->getMenu_url() //assign url sidebar menu
        );
        /*
         * this a declaration the default view to use
         */
        $template = file_get_contents('view/account.php');
        $content= file_get_contents('view/pages/page-signin.php');
        $template = str_replace('{content}', $content, $template);           //assign $header to {content}
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

    public function page_signin_type_2(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'SIGN IN TYPE 2 | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Search Course', //this title to breadcrumb
            'info'          =>'Result Course Page', //this info of breadcrumb
            'css'           => $this->config->cssSignInType2Path(),
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'menuError404' =>'active',
            'selectError404'=>'class="selected"',
            'levelPlugins'  =>'<script src="'.$pathLevelPlugins.'jquery-validation/dist/jquery.validate.min.js"></script>
                               <script src="'.$pathLevelPlugins.'jquery-backstretch/jquery.backstretch.min.js"></script>',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>' <script src="'.$pathAdmin.'pages/blankon.sign.js"></script>
                                <script src="'.$pathAdmin.'pages/blankon.sign.type2.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            /*
             * load the js of level script
             */
            'url'=>$this->config->getBase_url(), //assign the base url from global config
            'urlSidebarMenu'=>$this->config->getMenu_url() //assign url sidebar menu
        );
        /*
         * this a declaration the default view to use
         */
        $template = file_get_contents('view/account.php');
        $content= file_get_contents('view/pages/page-signin.php');
        $template = str_replace('{content}', $content, $template);           //assign $header to {content}
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

    public function page_signup(){

        $library = Array(
            'title'         =>'SIGN UP | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Search Course', //this title to breadcrumb
            'info'          =>'Result Course Page', //this info of breadcrumb
            'css'           => $this->config->cssSignInPath(),
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'menuError404' =>'active',
            'selectError404'=>'class="selected"',
            'levelPlugins'  =>'',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>'',
            /*
             * load the js of level script
             */
            'url'=>$this->config->getBase_url(), //assign the base url from global config
            'urlSidebarMenu'=>$this->config->getMenu_url() //assign url sidebar menu
        );
        /*
         * this a declaration the default view to use
         */
        $template = file_get_contents('view/account.php');
        $content= file_get_contents('view/pages/page-signup.php');
        $template = str_replace('{content}', $content, $template);           //assign $header to {content}
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

    public function page_lost_password(){

        $library = Array(
            'title'         =>'LOST PASSWORD | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Search Course', //this title to breadcrumb
            'info'          =>'Result Course Page', //this info of breadcrumb
            'css'           => $this->config->cssSignInPath(),
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'menuError404' =>'active',
            'selectError404'=>'class="selected"',
            'levelPlugins'  =>'',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>'',
            /*
             * load the js of level script
             */
            'url'=>$this->config->getBase_url(), //assign the base url from global config
            'urlSidebarMenu'=>$this->config->getMenu_url() //assign url sidebar menu
        );
        /*
         * this a declaration the default view to use
         */
        $template = file_get_contents('view/account.php');
        $content= file_get_contents('view/pages/lost-password.php');
        $template = str_replace('{content}', $content, $template);           //assign $header to {content}
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

    public function page_lock_screen(){

        $library = Array(
            'title'         =>'LOCK SCREEN | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Search Course', //this title to breadcrumb
            'info'          =>'Result Course Page', //this info of breadcrumb
            'css'           => $this->config->cssSignInPath(),
            'corePlugins'   => $this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'menuError404' =>'active',
            'selectError404'=>'class="selected"',
            'levelPlugins'  =>'',
            /*
             * load the js of level plugins
             */
            'levelScript'   =>'',
            /*
             * load the js of level script
             */
            'url'=>$this->config->getBase_url(), //assign the base url from global config
            'urlSidebarMenu'=>$this->config->getMenu_url() //assign url sidebar menu
        );
        /*
         * this a declaration the default view to use
         */
        $template = file_get_contents('view/account.php');
        $content= file_get_contents('view/pages/lock-screen.php');
        $template = str_replace('{content}', $content, $template);           //assign $header to {content}
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
