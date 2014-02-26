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
	'modules' => [],
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
    //CHANGED MVW 02/25/14: Added UrlManager. See https://github.com/yiisoft/yii2/blob/master/docs/guide/url.md
    'urlManager' => [
      'enablePrettyUrl' => true,
      'showScriptName' => false,
    ],
    //CHANGED MVW 02/25/14: Works with CONTrack/.htaccess, common/components/Request.php, and frontend/config/main.php. See http://aaronfrancis.com/blog/2014/1/9/hosting-an-advanced-yii2-application-on-heroku
    'request'=>[
        'class' => 'common\components\Request',
        'web'=> '/backend/web',
        'adminUrl' => '/admin'
    ],
	],
	'params' => $params,
];
