<?php
$params = array_merge(
	require(__DIR__ . '/../../common/config/params.php'),
	require(__DIR__ . '/../../common/config/params-local.php'),
	require(__DIR__ . '/params.php'),
	require(__DIR__ . '/params-local.php')
);

return [
	'id' => 'app-backend',
	'basePath' => dirname(__DIR__),
	'preload' => ['log'],
	'controllerNamespace' => 'backend\controllers',
	'modules' => [
    'gii' => [ //CHANGED MVW 02/25/14: Added Gii. See https://github.com/yiisoft/yii2/blob/master/docs/guide/gii.md
      'class' => 'yii\gii\Module',
    ],
	],
	'components' => [
		'user' => [
			'identityClass' => 'common\models\User',
			'enableAutoLogin' => true,
		],
		'log' => [
			'traceLevel' => YII_DEBUG ? 3 : 0,
			'targets' => [
				[
					'class' => 'yii\log\FileTarget',
					'levels' => ['error', 'warning'],
				],
			],
		],
		'errorHandler' => [
			'errorAction' => 'site/error',
		],
    'urlManager' => [ //CHANGED MVW 02/25/14: Added UrlManager. See https://github.com/yiisoft/yii2/blob/master/docs/guide/url.md
      'enablePrettyUrl' => true,
      'showScriptName' => false,
    ], 
    'urlManagerFrontEnd' => [ //CHANGED MVW 03/08/14: Added UrlManager for Frontend. See https://github.com/yiisoft/yii2/issues/1578.
      //To use: Yii::$app->urlManagerFrontEnd->createUrl();
      'enablePrettyUrl' => true,
      'showScriptName' => false,
    ],
    'request' => [ //CHANGED MVW 02/25/14: Works with CONTrack/.htaccess, common/components/Request.php, and frontend/config/main.php. See http://aaronfrancis.com/blog/2014/1/9/hosting-an-advanced-yii2-application-on-heroku
        'class' => 'common\components\Request',
        'web'=> '/backend/web',
        'adminUrl' => '/admin'
    ],
    'formatter' => [ //CHANGED MVW 03/22/14: Added so fields can be formatted for currency etc.
      'class' => 'yii\i18n\Formatter'
    ]
	],
	'params' => 
			['icon-framework' => 'fa',  // Font Awesome Icon framework
  			],
];
