<?php
$params = array_merge(
	require(__DIR__ . '/../../common/config/params.php'),
	require(__DIR__ . '/../../common/config/params-local.php'),
	require(__DIR__ . '/params.php'),
	require(__DIR__ . '/params-local.php')
);

return [
	'id' => 'app-frontend',
	'basePath' => dirname(__DIR__),
	'controllerNamespace' => 'frontend\controllers',
  //CHANGED MVW 02/25/14: Added Gii module. See https://github.com/yiisoft/yii2/blob/master/docs/guide/gii.md
	'modules' => [
    'gii' => [
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
    //CHANGED MVW 02/25/14: Added UrlManager. See https://github.com/yiisoft/yii2/blob/master/docs/guide/url.md
    'urlManager' => [
      'enablePrettyUrl' => true,
      'showScriptName' => false,
    ],
      //CHANGED MVW 02/25/14: Works with CONTrack/.htaccess, common/components/Request.php, and backend/config/main.php. See http://aaronfrancis.com/blog/2014/1/9/hosting-an-advanced-yii2-application-on-heroku
    'request'=>[
        'class' => 'common\components\Request',
        'web'=> '/frontend/web'
    ],
	],
	'params' => $params,
];
