<?php
return [
	'components' => [
		'db' => [
			'class' => 'yii\db\Connection',
      //CHANGED MVW 02/25/14: Changed yii2advanced to CONTrack
			'dsn' => 'mysql:host=localhost;dbname=CONTrack',
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		],
		'mail' => [
			'class' => 'yii\swiftmailer\Mailer',
			'viewPath' => '@common/mail',
			'useFileTransport' => true,
		],
	],
];
