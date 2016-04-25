<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'BPSkMH2zx1XKNBpf5oTeKb6Fxa27chPK',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => true,
            'rules' => [
                [
                    'pattern' => 'o_nas',
                    'route' => 'site/about',
                ],
                [
                    'pattern' => 'kontakt',
                    'route' => 'site/contact',
                ],
                [
                    'pattern' => 'menu',
                    'route' => 'site/menu',
                ],
                [
                    'pattern' => 'logowanie',
                    'route' => 'site/login',
                ],
                [
                    'pattern' => 'logowanie',
                    'route' => 'site/login',
                ],
                [
                    'pattern' => 'catering',
                    'route' => 'site/catering',
                ],
                [
                    'pattern' => 'galeria',
                    'route' => 'site/gallery',
                ],
                [
                    'pattern' => 'zupy-dnia',
                    'route' => 'site/soup-of-the-day',
                ],
            ],
        ],
    ],
    'language' => 'pl-PL',
    'sourceLanguage' => 'en-US',
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['127.0.0.1:8080', '::1', '192.168.*.*']
    ];
}

return $config;
