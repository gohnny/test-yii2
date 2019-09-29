<?php
return [
    'id' => 'test',
    'basePath' => realpath(__DIR__ . '/../'),
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false
        ]
    ]
];
