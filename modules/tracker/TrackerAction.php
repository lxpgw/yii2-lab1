<?php namespace light\tracker;
/**
 * The tracker action
 *
 * @author lichunqiang <light-li@hotmail.com>
 * @version 0.1.0
 */
class TrackerAction extends \yii\base\Action
{
	/**
	 * A function to adjust the kinds of ja information to track.
	 * ~~~
	 * function ($data) {
	 *
	 * }
	 * ~~~
	 * if return false, the log will not be tracked.
	 * @var callable
	 */
	public $filter;
	/**
	 * @inheritdoc
	 */
	public function run()
	{
		$response = Yii::$app->getResponse();
		$response->format = Response::FORMAT_RAW;
		//must set header with image
		$headers = $response->getHeaders();
		$headers->add('Content-Type', 'image/png');
		$_collection = Yii::$app->getRequest()->get();
		if (isset($this->filter)
			&& call_user_func($this->filter, $_collection) === false) {
			return null;
		}
		//save....
		return null;
	}
}