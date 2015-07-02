<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\Person;
class PostController extends controller{
	public function actionIndex()
	{
		$event = new MsgEvent();
		
		$person = new Person();
		
		$person->on('say_hello',[$person,'say_hello']);
		
		$event->title='say hello to';
		
		$person->trigger('say_hello', $event);
	}

}
// 定义事件的关联数据
class MsgEvent extends yii\base\Event {
    public $dateTime;   // 发出的时间
    public $author;     // 作者
    public $content;    // 内容
    public function setTitle($title)
    {
    	$this->title = $title.' this event test';
    }

}
