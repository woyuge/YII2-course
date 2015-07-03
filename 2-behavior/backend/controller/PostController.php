<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\Person;
use yii\base\Component;
use cove2\MyBehavior;
class PostController extends controller{
	public function actionMybehave()
	{
		$myBehavior = new MyBehavior();
		//将行为绑定到类上
		$this->attachBehavior('myBehavior',$myBehavior);
		echo $this->property1;
		echo $this->method1();
	}

}


