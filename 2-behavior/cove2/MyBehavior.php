<?php
namespace cove2;
use  yii\base\Behavior;
class MyBehavior extends Behavior{
    // 行为的一个属性
    public $property1 = 'This is property in MyBehavior.';

    // 行为的一个方法
    public function method1()
    {
        return 'Method in MyBehavior is called.';
    }
}
