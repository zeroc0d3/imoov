<?php


class map_controller {

    public function __construct() {
    /*
     * this declaration new class from global config
     * */
        $this->config = new config();
    }

    public function maps_google(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'GOOGLE MAPS | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Google Map', //this title to breadcrumb
            'info'          =>'google map samples', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath(), //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
                                <script src="'.$pathLevelPlugins.'gmap3/dist/gmap3.min.js"></script>',
            /*
* load the js of level plugins
*/
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'/pages/blankon.maps.google.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuMapsGoogle' =>'active',
            'selectMapsGoogle'=>'class="selected"',
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
        $content= file_get_contents('view/maps/google.php');
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

    public function maps_vector(){
        $pathLevelPlugins="".$this->config->getBase_url()."assets/global/plugins/bower_components/";        //this path to access bower component
        $pathAdmin="".$this->config->getBase_url()."assets/admin/js/"; //this path to access admin js
        $library = Array(
            'title'         =>'VECTOR MAPS | BLANKON - Fullpack Admin Theme',
            'keywords'      =>'admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp',
            'description'   =>'Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.',
            'page'          =>'Vector Map', //this title to breadcrumb
            'info'          =>'interactive vector map samples', //this info of breadcrumb
            'css'           =>$this->config->cssBowerPath().'<link href="'.$pathLevelPlugins.'jqvmap/jqvmap.css" rel="stylesheet">', //load the cssBowerPath from global config
            'cssTheme'      =>$this->config->cssAdminPath(), //load the cssTheme from global config
            'corePlugins'   =>$this->config->corePluginsPath(), //load the js corePluginsPath from global config
            'levelPlugins'  => '<script src="'.$pathLevelPlugins.'jqvmap/jquery.vmap.min.js"></script>
                                <script src="'.$pathLevelPlugins.'jqvmap/maps/jquery.vmap.world.js"></script>
                                <script src="'.$pathLevelPlugins.'jqvmap/maps/jquery.vmap.usa.js"></script>
                                <script src="'.$pathLevelPlugins.'jqvmap/maps/jquery.vmap.russia.js"></script>
                                <script src="'.$pathLevelPlugins.'jqvmap/maps/jquery.vmap.algeria.js"></script>
                                <script src="'.$pathLevelPlugins.'jqvmap/maps/jquery.vmap.germany.js"></script>
                                <script src="'.$pathLevelPlugins.'jqvmap/maps/continents/jquery.vmap.africa.js"></script>
                                <script src="'.$pathLevelPlugins.'jqvmap/maps/continents/jquery.vmap.asia.js"></script>
                                <script src="'.$pathLevelPlugins.'jqvmap/maps/continents/jquery.vmap.australia.js"></script>
                                <script src="'.$pathLevelPlugins.'jqvmap/maps/continents/jquery.vmap.europe.js"></script>
                                <script src="'.$pathLevelPlugins.'jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
                                <script src="'.$pathLevelPlugins.'jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
                                <script src="'.$pathLevelPlugins.'jqvmap/data/jquery.vmap.sampledata.js"></script>',
            /*
* load the js of level plugins
*/
            'levelScript'   =>' <script src="'.$pathAdmin.'apps.js"></script>
                                <script src="'.$pathAdmin.'/pages/blankon.maps.vector.js"></script>
                                <script src="'.$pathAdmin.'demo.js"></script>
                            ',
            'menuMapsVector' =>'active',
            'selectMapsVector'=>'class="selected"',
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
        $content= file_get_contents('view/maps/vector.php');
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
