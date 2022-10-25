<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'layout' => 'school',
    'language' => 'ru',
    'name' => 'Company',
//    'defaultRoute' => 'index',
    'modules' => [
        'news' => [
            'class' => 'frontend\modules\news\Module',
            'layout' => '@frontend/modules/admin/views/layouts/main'
        ],
        'admin' => [
            'class' => 'frontend\modules\admin\Module',
            'layout' => 'main',
        ],
        'docs' => [
            'class' => 'frontend\modules\docs\Module',
            'layout' => '@frontend/modules/admin/views/layouts/main'
        ],
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],

        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => '@frontend/modules/admin'
                ],
            ],
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => \yii\log\FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
    ],
    'params' => $params,
];