# MasterAdmin

<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'qIdGuH7QV3GvjmRqcbfda-kvwsXHWvCG',
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=MasterDB',
            'username' => 'root',
            'password' => 'welcome',
            'charset' => 'utf8',
        ],
         
        'scbuaeDB' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=ScbUAEDB',
            'username' => 'root',
            'password' => 'welcome',
            'charset' => 'utf8',
        ],
        'amexDB' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=AmexDB',
            'username' => 'root',
            'password' => 'welcome',
            'charset' => 'utf8',
        ],
        'enbdDB' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=EmiratesGolfLanDB',
            'username' => 'root',
            'password' => 'welcome',
            'charset' => 'utf8',
        ],


    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['127.0.0.1']
    ];
}
 
return $config;
 
