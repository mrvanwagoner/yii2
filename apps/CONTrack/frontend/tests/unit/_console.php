<?php

return yii\helpers\ArrayHelper::merge(
	require(__DIR__ . '/../../../common/config/main.php'),
	require(__DIR__ . '/../../../common/config/main-local.php'),
	require(__DIR__ . '/../../../console/config/main.php'),
	require(__DIR__ . '/../../../console/config/main-local.php'),
	[
		'components' => [
			'db' => [
        //CHANGED MVW 02/26/14: Was 'yii2_advanced...'
				'dsn' => 'mysql:host=localhost;dbname=CONTrack_unit',
			],
		],
	]
);
