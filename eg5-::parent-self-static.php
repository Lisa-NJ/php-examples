<?php

// :: allows access to static, constant, and overridden properties or methods of a class.
// parent::  self::
// private protected public

class MyClass {
    const CONST_VALUE = 'A constant value';
    
    protected function myFunc() {
        echo "MyClass::myFunc()\n";
    }
}

$classname = 'MyClass';
echo $classname::CONST_VALUE . "\n";

echo MyClass::CONST_VALUE . "\n";

class OtherClass extends MyClass
{
    public static $my_static = 'static var';

    public static function doubleColon() {
        echo parent::CONST_VALUE . "\n";
        echo self::$my_static . "\n";
    }
    // Override parent's definition
    public function myFunc()
    {
        // But still call the parent function
        parent::myFunc();
        echo "OtherClass::myFunc()\n";
    }
}

$classname = 'OtherClass';
$classname::doubleColon();

OtherClass::doubleColon();

$class = new OtherClass();
$class->myFunc();
?>