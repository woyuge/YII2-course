这里介绍一下YII2中的EVENT的代码实践。原文在这里http://www.digpage.com/event.html
这里已经写得很清晰了
但是也许有些人不是很理解用代码怎么实现，在这里我写了个小案例。供大家参考

***
用到三个文件，如下
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
