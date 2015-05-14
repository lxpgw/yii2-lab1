<?php namespace app\assets;

use yii\web\AssetBundle;

class IndexPageAsset extends AssetBundle
{
    public $basePath = '@webroot';

    public $js = [
        'js/landingpage.js',
    ];

    public $css = [
        'css/landingpage.css'
    ];

    public $depends = [
        'app\assets\AngularAppAsset',
    ];
}
