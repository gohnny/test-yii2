<?php
$params = require(__DIR__ . '/params.php');
return [
    'id' => 'test',
    'language' => 'en',
    'basePath' => realpath(__DIR__ . '/../'),
    'bootstrap' => ['debug'],
    'components' => [
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '/' => 'site/index',
                '/blog/<slug>/' => 'blog/blog',
            ]
        ],
        'request' => [
            'cookieValidationKey' => 'super secret code 12123151465446542'
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => true,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.gmail.com',
                'username' => '***',
                'password' => '****',
                'port' => '*',
                'encryption' => '*',
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        'user' => [
            'identityClass' => 'app\models\UserIdentity',
            'enableAutoLogin' => true
        ]
    ],
    'params' => $params,
    'modules' => [
        'debug' => ['class' => 'yii\debug\Module']
    ]
];
