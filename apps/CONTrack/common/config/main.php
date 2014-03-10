<?php
return [
	'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
	'extensions' => require(__DIR__ . '/../../vendor/yiisoft/extensions.php'),
  //CHANGED MVW 02/25/14: Added Gii. See https://github.com/yiisoft/yii2/blob/master/docs/guide/gii.md
	'modules' => [
    'gii' => [
      'class' => 'yii\gii\Module',
    ],
	],
	'components' => [
		'cache' => [
			'class' => 'yii\caching\FileCache',
		],
	],
];
