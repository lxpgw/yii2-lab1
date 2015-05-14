<?php namespace app\assets;

use yii\web\AssetBundle;

class AngularAppAsset extends AssetBundle
{
	public $depends = [
		'app\assets\AdminLTEAsset',
		'app\assets\AngularAsset',
		'yii\bootstrap\BootstrapAsset',
	];
}