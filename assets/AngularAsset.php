<?php namespace app\assets;

use yii\web\AssetBundle;
/**
 * Angular related
 */
class AngularAsset extends AssetBundle
{
	public $sourcePath = '@bower';

	public $js = [
		'angular/angular.js',
		'angular-route/angular-route.js',
		'angular-sanitize/angular-sanitize.js',
		'angular-animate/angular-animate.js'
	];

	public $depends = [
		'yii\web\JqueryAsset'
	];
}