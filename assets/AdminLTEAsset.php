<?php namespace app\assets;

use yii\web\AssetBundle;

class AdminLTEAsset extends AssetBundle
{
    public $basePath = '@webroot';

    public $baseUrl = '@web';

    public $js = [
        'js/app.js',
    ];

    public $css = [
        'css/site.css',
    ];

    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'yii\web\JqueryAsset',
    ];
}
