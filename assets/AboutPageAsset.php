<?php namespace app\assets;

use yii\web\AssetBundle;

class AboutPageAsset extends AssetBundle
{
	public $basePath = '@webroot';

	public $baseUrl = '@web';

	public $js = ['js/about.js'];

	public $css = ['css/about.css'];

	public $depends = [
		'app\assets\AngularAppAsset',
		'app\assets\AngularBootstrapAsset',
	];
}