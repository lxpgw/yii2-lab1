<?php namespace light\tracker;

use yii\base\InvalidConfigException;

/**
 * The main module class for yii2-tracker
 *
 * @author lichunqiang <light-li@hotmail.com>
 * @version 0.1.0
 */
class Module extends \yii\base\Module
{
	const VERSION = '1.0.0';

    public $controllerNamespace = 'light\tracker\controllers';

    public $trackerRemote = '/site/error';

    /**
     * @inheritdoc
     */
    public function init()
    {
    	if (!$this->trackerRemote) {
    		throw new InvalidConfigException('You must set the $trackerRemote');
    	}
    	parent::init();
    }
}
