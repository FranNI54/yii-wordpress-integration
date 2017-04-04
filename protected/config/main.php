<?php

/**
 * Main configuration.
 * All properties can be overridden in mode_<mode>.php files
 */

/*return array(

	// Set yiiPath (relative to Environment.php)
	'yiiPath' => dirname(__FILE__) . '/../../yii/framework/yii.php',
	'yiicPath' => dirname(__FILE__) . '/../../yii/framework/yiic.php',
	'yiitPath' => dirname(__FILE__) . '/../../yii/framework/yiit.php',

	// Set YII_DEBUG and YII_TRACE_LEVEL flags
	'yiiDebug' => true,
	'yiiTraceLevel' => 0,

	// Static function Yii::setPathOfAlias()
	'yiiSetPathOfAlias' => array(
		// uncomment the following to define a path alias
		//'local' => 'path/to/local-folder'
	),

	// This is the main Web application configuration. Any writable
	// CWebApplication properties can be configured here.
	'configWeb' => array(

		'basePath' => dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
		'name' => 'My Web Application',

		// Preloading 'log' component
		'preload' => array('log'),

		// Autoloading model and component classes
		'import' => array(
			'application.models.*',
			'application.components.*',
			'ext.giix-components.*', // giix components
		),
		
		// Application components
		'components' => array(
		
			'user' => array(
				// enable cookie-based authentication
				'allowAutoLogin' => true,
			),
			
			// uncomment the following to enable URLs in path-format
			'urlManager'=>array(
				'urlFormat'=>'path',
				'showScriptName' => false,
				'rules'=>array(
					'<controller:\w+>/<id:\d+>'=>'<controller>/view',
					'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
					'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
					'/contact'=>'site/contact',
				),
			),

			// Database
			'db' => array(
				'connectionString' => '', //override in config/mode_<mode>.php
				'emulatePrepare' => true,
				'username' => '', //override in config/mode_<mode>.php
				'password' => '', //override in config/mode_<mode>.php
				'charset' => 'utf8',
			),

			// Error handler
			'errorHandler'=>array(
				// use 'site/error' action to display errors
				'errorAction'=>'site/error',
			),

		),

		// application-level parameters that can be accessed
		// using Yii::app()->params['paramName']
		'params'=>array(
			// this is used in contact page
			'adminEmail'=>'webmaster@example.com',
		),

	),

	// This is the Console application configuration. Any writable
	// CConsoleApplication properties can be configured here.
    // Leave array empty if not used.
    // Use value 'inherit' to copy from generated configWeb.
	'configConsole' => array(

		'basePath' => dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
		'name' => 'My Console Application',

		// Preloading 'log' component
		'preload' => array('log'),

		// Autoloading model and component classes
		'import'=>'inherit',

		// Application componentshome
		'components'=>array(

			// Database
			'db'=>'inherit',

			// Application Log
			'log' => array(
				'class' => 'CLogRouter',
				'routes' => array(
					// Save log messages on file
					array(
						'class' => 'CFileLogRoute',
						'levels' => 'error, warning, trace, info',
					),
				),
			),

		),

	),

);*/


// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool

		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'ni54',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			// 'ipFilters'=>array('127.0.0.1','::1'),
		),

	),

	// application components
	'components'=>array(

		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),

		// uncomment the following to enable URLs in path-format

		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(

				"testData/<id>"=>"web/get/data/testData/id/<id>",
				"proyecto/<id>"=>"web/get/data/proyecto/id/<id>",

				'admin/<data>'=>'wp-admin/<data>',
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',



				"<data>"=>array(
					"web/get/"
				),

					"<data>/<id>"=>array(
						"web/get/data/<data>/id/<id>"
					),

				"/"=>array(
					"web/get/data/index"
				),


			),
		),


		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>YII_DEBUG ? null : 'site/error',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning,trace',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);
