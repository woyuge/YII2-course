<?php
namespace backend\models;

use Yii;
use yii\base\Model;

/**
 * Login form
 */
class Person extends Model{
	public function say_hello($parm){
        var_dump($parm->title);
    }
     
    public function say_goodbye($parm){
        echo "你应该会看到:".$parm->data.'<br>';
    }
}
