<?php
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
        ]
    ],
    'modules' => [
        'debug' => ['class' => 'yii\debug\Module']
    ]
];
