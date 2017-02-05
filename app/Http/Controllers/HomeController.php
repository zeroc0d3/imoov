<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use igaster\laravelTheme\Theme as Theme;
use igaster\laravelTheme\Themes as Themes;
use igaster\laravelTheme\themeServiceProvider as themeServiceProvider;

class HomeController extends Controller
{
	protected $active_theme;
    protected $node_modules;
    protected $bower_component;
    protected $favicon;
    protected $avatar;
    protected $logo;
    protected $meta_default;
    
	public function __construct() {
		$activeTheme     = \Theme::current();
        $node_modules    = \Theme::config('node-module');
		$bower_component = \Theme::config('bower-component');
        $favicon         = \Theme::config('favicon');
        $avatar          = \Theme::config('avatar');
        $logo            = \Theme::config('logo');
        
		$this->theme_name       = $activeTheme->name;            
		$this->theme_assetPath  = $activeTheme->assetPath;  
	    $this->theme_viewsPath  = $activeTheme->viewsPath;
        $this->theme_npm        = $node_modules;
        $this->theme_favicon    = $favicon;
        $this->theme_avatar     = $avatar;
        $this->theme_logo       = $logo;

        // Metadata (Default)
        $meta_default = array(
            'meta_name' => array(
                'content-language' => 'id-ID',
                'title'            => 'Core ACL',
                'description'      => 'Laravel Access Control (ACL)',
                'keywords'         => 'laravel, access, control, list, acl, sentry, cartalyst, coreui',
                'web_author'       => 'ZeroC0D3 Team',
                'copyright'        => 'MIT License',
                'google'           => 'notranslate'
            ),
            'meta_property' => array(
                'og:url'           => env('APP_URL', 'http://localhost'),
                'og:type'          => 'website',
                'og:title'         => 'Core ACL',
                'og:description'   => 'Laravel Access Control (ACL)',
                'og:image'         => $this->theme_logo,
            ),
        );

        $this->meta_default = $meta_default;
        #var_dump($meta_default);die();
        #$this->middleware('auth');  // Filtering guest authentified
    }
	
	public function index()
    {
    	$meta_name      = $this->meta_default['meta_name'];
        $meta_property  = $this->meta_default['meta_property'];

        $data = array(
    		'title'         => $meta_name['title'],
    		'name'          => $this->theme_name,
    		'assetPath'     => $this->theme_assetPath,
    		'viewsPath'     => $this->theme_viewsPath,
    	    'favicon'       => $this->theme_favicon,
            'avatar'        => $this->theme_avatar,
            'logo'          => $this->theme_logo,
            #'meta_name'     => $this->meta_default['meta_name'],
            #'meta_property' => $this->meta_default['meta_property'],
        );
        
        $index = 'themes/' . $this->theme_name . '/pages/home';
    	#var_dump($index, $data, $meta_name, $meta_property);die();
    	return view($index, ['data' => $data, 'meta_name' => $meta_name, 'meta_property' => $meta_property]);
    }	
}
