<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=question',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
			'tablePrefix' => 'lulu_',
            'enableSchemaCache' => true,
            'schemaCache' => 'schemaCache',
        ],

    ],
];
