<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use igaster\laravelTheme\Theme as Theme;
use igaster\laravelTheme\Themes as Themes;
use igaster\laravelTheme\themeServiceProvider as themeServiceProvider;

class HomeController extends Controller
{
	protected $theme;
    protected $active_theme;

	public function __construct() {
		$theme = \Theme::get();
		$activeTheme = \Theme::find($theme);
		#var_dump($activeTheme);die();
        
		$this->theme_name       = $activeTheme->name;            
		$this->theme_assetPath  = $activeTheme->assetPath;  
	    $this->theme_viewsPath  = $activeTheme->viewsPath;
	    #var_dump($this->theme_name, $this->theme_assetPath, $this->theme_viewsPath);die();
    }
	
	public function index()
    {
    	$data = array(
    		'title'     => 'IMoov Car Rental',
    		'name'      => $this->theme_name,
    		'assetPath' => str_replace('public/', '', $this->theme_assetPath),
    		'viewsPath' => $this->theme_viewsPath,
    	    'favicon'   => $this->theme_assetPath . '/img/favicon.png',
            'avatar'    => $this->theme_assetPath . '/img/avatar.png',
            'logo'      => $this->theme_assetPath . '/img/logo.png',
        );

    	$index = 'themes/' . $this->theme_name . '/pages/home';
    	#var_dump($index, $data);die();
    	return view($index, compact('data'));
    }	
}
