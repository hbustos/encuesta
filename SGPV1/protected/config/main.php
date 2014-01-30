<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Proyecto De Vida',
	'language'=>'es',
	'sourceLanguage'=>'en',
	'charset'=>'utf-8',
	// preloading 'log' component
	'preload'=>array('log'),
	'theme'=>'businessblue',
	'defaultController'=>'site/index',

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'cangrejo',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
			'generatorPaths'=>array('modules.gii'),
		),
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
                'zip'=>Array(
                        'class'=>'application.extensions.zip.EZip',
                ),
                'authManager'=>array(
                        'class'=>'CDbAuthManager',
                        'connectionID'=>'db',
                        'itemTable'=>'auth_items',
                        'itemChildTable'=>'auth_relacion',
                        'assignmentTable'=>'auth_asignacion',
                ),
		// uncomment the following to enable URLs in path-format
		'urlManager'=>array(
			'class'=>'application.components.MyCUrlManager',
			'urlFormat'=>'path',
			//'showScriptName'=>false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				//'<lg>/<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		// uncomment the following to use a MySQL database
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=SGPV',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'minenalinda',
			'charset' => 'utf8',
		),
		'coreMesseges'=>array(
			'basePath'=>'protected/messages',
		),

		'messages'=>array(
			'onMissingTranslation'=>array('HMessages','getNecesitoTraduccion'),
		),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
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
		'adminEmail'=>'hfb5@hotmail.com',
		'slogan'=>'La educación es la clave',
		'adminTel'=>'PBX: 623 15 80 FAX: 218 5059 / 218 509',
		'tituloProyecto'=>'Proyecto de Vida!',
		'direccionProyecto'=>'Calle 93 No. 16 - 43',
		'paisProyecto'=>'Bogotá - Colombia',
	),
	
);
