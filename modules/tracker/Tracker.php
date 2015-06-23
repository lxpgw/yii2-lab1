<?php namespace light\tracker;

use Yii;
use yii\helpers\Html;
use yii\base\InvalidConfigException;
use yii\helpers\Url;
/**
 * The tracker js injection method.
 *
 * @author lichunqiang <light-li@hotmail.com>
 * @version 0.1.0
 */
class Tracker
{
	public static function init()
	{
		if (!Yii::$app->hasModule('tracker')) {
			throw new InvalidConfigException('Please load the tracker module manually!');
		}
		$module = \Yii::$app->getModule('tracker');
		$remote = Url::to($module->trackerRemote);
		$js = <<<eof
(function(win) {
  win.onerror = function(msg, url, line, column, error) {
    var _e = encodeURIComponent,
    content = '$remote?message=' + _e(msg) +
      '&url=' + _e(url || win.location.href) + '&line=' + _e(line) +
      (error && error.stack ? '&stack=' + _e(error.stack) : '') +
      (column ? '&column=' + _e(column) : '') +
      '&ua=' + win.navigator.userAgent.replace(/[\:,;]/g,"|");
    (new Image()).src = content;
  }
  win.load_err = function(elem) {
    var tag = elem.tagName.toLowerCase();
    var IDKEY = {
        'link': 33,
        'script': 34,
        'img': 35
    };
    if (!IDKEY[tag]) return;
    var content = '$remote?' + 'id=' + IDKEY[tag] +
      '&url=' + encodeURIComponent(elem.href || elem.src) +
      '&pageurl=' + encodeURIComponent(win.location.href) +
      '&ua=' + win.navigator.userAgent;
    (new Image()).src = content;
  }
})(window);
eof;
		echo Html::script($js);
	}
}