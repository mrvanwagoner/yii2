<?php

return yii\helpers\ArrayHelper::merge(
	require(__DIR__ . '/../../config/main.php'),
	require(__DIR__ . '/../../config/main-local.php'),
	require(__DIR__ . '/../_config.php'),
	[
		'components' => [
			'db' => [
        //CHANGED MVW 02/26/14: Was 'yii2_advanced...'
				'dsn' => 'mysql:host=localhost;dbname=CONTrack_unit',
			],
			'id' => 'app-common',
		],
	]
);
