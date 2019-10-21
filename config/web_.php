<?php
$params = require(__DIR__ . '/params.php');
return [
    'id' => 'test',
    'language' => 'en',
    'basePath' => realpath(__DIR__ . '/../'),
    'bootstrap' => ['debug'],
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false
        ],
        'request' => [
            'cookieValidationKey' => '****'
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => true,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp',
                'username' => '****',
                'password' => '****',
                'port' => '587',
                'encryption' => 'tls',
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        'user' => [
            'identityClass' => 'app\models\UserIdentity'
        ]
    ],
    'params' => $params,
    'modules' => [
        'debug' => ['class' => 'yii\debug\Module']
    ]
];
