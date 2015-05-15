<?php
/*
Yii command:
yii asset tools/gulp/assets-config.php config/assets-prod.php
*/
Yii::setAlias('@webroot', str_replace('\\', '/', dirname(__FILE__)) . '/../../web');
Yii::setAlias('@web', '/');
return [
    'jsCompressor' => 'gulp compress-js --gulpfile tools/gulp/gulpfile.js --src {from} --dist {to}',
    'cssCompressor' => 'gulp compress-css --gulpfile tools/gulp/gulpfile.js --src {from} --dist {to}',
    'bundles' => [
        'app\assets\AngularAppAsset',
        'app\assets\AdminLTEAsset',
        'app\assets\AngularBootstrapAsset',
        'app\assets\AngularAsset',
        'app\assets\AngularUiUtilsAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\web\JqueryAsset',

        'app\assets\IndexPageAsset',
        'app\assets\AboutPageAsset',
        // 'app\assets\TestAsset',
    ],
    'targets' => [
        'application' => [
            'class' => 'yii\web\AssetBundle',
            'basePath' => '@webroot/assets',
            'baseUrl' => '@cdn/assets',
            'js' => 'application-{hash}.js',
            'css' => 'application-{hash}.css',
            'depends' => [
                'app\assets\AdminLTEAsset',
                'app\assets\AngularAppAsset',
                'yii\bootstrap\BootstrapAsset',
                'yii\web\JqueryAsset',
                'app\assets\AngularAsset',
            ],
        ],
        'landingpage' => [
        	'class' => 'yii\web\AssetBundle',
        	'basePath' => '@webroot/assets',
        	'baseUrl' => '@cdn/assets',
        	'js' => 'index-{hash}.js',
            'css' => 'index-{hash}.css',
        	'depends' => [
        		'app\assets\IndexPageAsset',
        	]
        ],
        'about' => [
            'class' => 'yii\web\AssetBundle',
            'basePath' => '@webroot/assets',
            'baseUrl' => '@cdn/assets',
            'js' => 'about-{hash}.js',
            'css' => 'about-{hash}.css',
            'depends' => [
                'app\assets\AboutPageAsset',
                'app\assets\AngularBootstrapAsset',
            ]
        ]
    ],
    // Asset manager configuration:
    'assetManager' => [
        'basePath' => '@webroot/assets',
        'baseUrl' => '@web/assets',
    ],
];