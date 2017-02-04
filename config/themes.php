<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Switch this package on/off. Usefull for testing...
	|--------------------------------------------------------------------------
	*/

	'enabled' => true,

    /*
    |--------------------------------------------------------------------------
    | File path where themes will be located.
    | Can be outside default views path EG: resources/themes
    | Leave it null if you place your themes in the default views folder
    | (as defined in config\views.php)
    |--------------------------------------------------------------------------
    */

    'themes_path' => 'resources/views/themes', // eg: realpath(base_path('resources/themes'))
    #'themes_path' => base_path('resources/views/themes'), // eg: realpath(base_path('resources/themes'))
    #'themes_path' => realpath(base_path('resources/views/themes')), // eg: realpath(base_path('resources/themes'))

	/*
	|--------------------------------------------------------------------------
	| Set behavior if an asset is not found in a Theme hierarcy.
	| Available options: THROW_EXCEPTION | LOG_ERROR | ASSUME_EXISTS | IGNORE
	|--------------------------------------------------------------------------
	*/

	'asset_not_found' => 'LOG_ERROR',

	/*
	|--------------------------------------------------------------------------
	| Set the Active Theme. Can be set at runtime with:
	|  Themes::set('theme-name');
	|--------------------------------------------------------------------------
	*/

	'active' => 'coreui-front',

	/*
	|--------------------------------------------------------------------------
	| Define available themes. Format:
	|
	| 	'theme-name' => [
	| 		'extends'	 	=> 'theme-to-extend',  // optional
	| 		'views-path' 	=> 'path-to-views',    // defaults to: resources/views/theme-name
	| 		'asset-path' 	=> 'path-to-assets',   // defaults to: public/theme-name
	|
	|		// you can add your own custom keys and retrieve them with Theme::config('key');
	| 		'key' 			=> 'value',
	| 	],
	|
	|--------------------------------------------------------------------------
	*/

	'themes' => [

		'default' => [
			'extends'          => null,
			'views-path'       => 'resources/views/themes/default',
            'asset-path'       => 'public/themes/default/assets',
            'node-module'      => 'node_modules',     # root path
            'bower-component'  => 'bower_components', # root path
            'favicon'          => 'public/themes/default/assets/img/favicon.ico',
            'avatar'           => 'public/themes/default/assets/img/avatar.png',
            'logo'             => 'public/themes/default/assets/img/logo.png',
		],

		// Add your themes here...

		/*--------------[ Example Structre ]-------------

			// Recomended (all defaults) : Assets -> \public\BasicTheme , Views -> \resources\views\BasicTheme

			'BasicTheme',


			// This theme shares the views with BasicTheme but defines its own assets in \public\SomeTheme

			'SomeTheme' => [
				'views-path'	=> 'BasicTheme',
			],


			// This theme extends BasicTheme and ovverides SOME views\assets in its folders

			'AnotherTheme' => [
				'extends'	=> 'BasicTheme',
			],

        ------------------------------------------------*/

        // CoreUI Theme
        'coreui' => [
            'extends'          => null,
            'views-path'       => 'resources/views/themes/coreui',
            'asset-path'       => 'public/themes/coreui/assets',
            'node-module'      => 'public/themes/coreui/node_modules',
            'bower-component'  => 'public/themes/coreui/bower_components',
            'favicon'          => 'public/themes/coreui/assets/img/favicon.png',
            'avatar'           => 'public/themes/coreui/assets/img/avatar.png',
            'logo'             => 'public/themes/coreui/assets/img/logo.png',
        ],

        'coreui-front' => [
            'extends'          => null,
            'views-path'       => 'resources/views/themes/coreui-front',
            'asset-path'       => 'public/themes/coreui-front/assets',
            'node-module'      => 'public/themes/coreui-front/node_modules',
            'bower-component'  => 'public/themes/coreui-front/bower_components',
            'favicon'          => 'public/themes/coreui-front/assets/img/favicon.png',
            'avatar'           => 'public/themes/coreui-front/assets/img/avatar.png',
            'logo'             => 'public/themes/coreui-front/assets/img/logo.png',
        ],

	],

];
