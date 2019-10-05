<?php
$params = require(__DIR__ . '/params.php');
return [
    'id' => 'test',
    'basePath' => realpath(__DIR__ . '/../'),
    'bootstrap' => ['debug'],
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false
        ],
        'request' => [
            'cookieValidationKey' => 'super secret code 12123151465446542'
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.gmail.com',
                'username' => 'testivan252@gmail.com',
                'password' => '61287294',
                'port' => '587',
                'encryption' => 'tls',
            ],
        ]
    ],
    'params' => $params,
    'modules' => [
        'debug' => ['class' => 'yii\debug\Module']
    ]
];
