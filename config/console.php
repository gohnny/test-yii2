<?php
return [
    'id' => 'test-app',
    'basePath' => dirname(__DIR__),
    'components' => [
        'db' => require(__DIR__ . '/db.php')
    ]
];
