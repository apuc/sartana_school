<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'menu' => [
            'class' => 'backend\modules\menu\Module',
            'layout' => '@backend/modules/admin/views/layouts/main'
        ],
        'teachers' => [
            'class' => 'backend\modules\teachers\Module',
            'layout' => '@backend/modules/admin/views/layouts/main'
        ],
        'news' => [
            'class' => 'backend\modules\news\Module',
            'layout' => '@backend/modules/admin/views/layouts/main'
        ],
        'hot-menu' => [
            'class' => 'backend\modules\hotMenu\Module',
            'layout' => '@backend/modules/admin/views/layouts/main'
        ],
        'answer' => [
            'class' => 'backend\modules\answer\Module',
            'layout' => '@backend/modules/admin/views/layouts/main'

        ],
        'feedback' => [
            'class' => 'backend\modules\feedback\Module',
            'layout' => '@backend/modules/admin/views/layouts/main'
        ],
        'secure' => [
            'class' => 'backend\modules\admin\Module',
            'layout' => 'main',
        ],
        'docs' => [
            'class' => 'backend\modules\docs\Module',
            'layout' => '@backend/modules/admin/views/layouts/main'
        ],
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
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

        'urlManagerFrontend' => [
            'class' => 'yii\web\urlManager',
            'baseUrl' => '@frontend/web/uploads',
        ],

    ],
    'params' => $params,
];
