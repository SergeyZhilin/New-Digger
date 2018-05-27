<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/animate.css',
        'css/office/style.css',
        'css/office/font-awesome.css',
        'css/office/main.css',
        'css/style.css',
        'fonts/font-awesome.min.css',
    ];
    public $js = [
        'js/ie-support/html5.js',
        'js/ie-support/respond.js',
        'js/plugins.js',
        'js/app.js',
        'js/script.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
