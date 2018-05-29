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
    'language'=>'en',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'baseUrl' => '',
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
                    'class' => 'yii\log\FileTarget',
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
            'class' => 'frontend\widgets\MultiLang\components\UrlManager',
            // заменяем стандартный урл.менеджер на наш.
            'languages' => ['ru', 'en'],
            //список языков на который переводим сайт
            'enableDefaultLanguageUrlCode' => true,
            'rules' => [
                '/' => 'site/index',
                '<controller:\w+>/<action:\w+>/' => '<controller>/<action>',
            ],
        ],
        'i18n' => [
            'translations' => [
                'app*' => [
                    // app название нашего php файла переводов который нужно создать app.php (может быть любым)
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@frontend/messages',
                    // путь для нашего файла переводов frontend/messages/ru/app.php
                    'sourceLanguage' => 'en',
                    // язык с какого переводим, то есть, в проекте все надписи пишем на английском
                ],
            ],
        ],
    ],
    'params' => $params,
];
