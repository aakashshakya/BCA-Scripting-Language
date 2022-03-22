<?php
class StaticExample
{
    public static $count;
    public $nonStaticCounter = 1;
    public static function increaseCount()
    {
        echo self::$count++ . "<br>";
    }

    public function increaseCountFromNonStaticMethod()
    {
        echo self::$count++ . "<br>";
    }

    public function increaseNonStaticCounter()
    {
        echo $this->nonStaticCounter++ . "<br>";
    }
}

echo "<h1>From static Scope Resolution operator.</h1>";
StaticExample::$count = 1;
StaticExample::increaseCount();
StaticExample::increaseCount();
StaticExample::increaseCount();
StaticExample::increaseCount();
StaticExample::increaseCount();

echo "<br><h1>From object.</h1>";
$object = new StaticExample();
$object->increaseCountFromNonStaticMethod();
$object->increaseCountFromNonStaticMethod();
$object->increaseCountFromNonStaticMethod();
$object->increaseCountFromNonStaticMethod();

echo "<br><h1>From Object to increase non static counter variable.</h1>";
$object->increaseNonStaticCounter();
$object->increaseNonStaticCounter();
$object->increaseNonStaticCounter();
$object->increaseNonStaticCounter();

echo "<br><h1>From second Object</h1>";
$secondObject = new StaticExample();
$secondObject->increaseNonStaticCounter();
$secondObject->increaseNonStaticCounter();
$secondObject->increaseNonStaticCounter();
$secondObject->increaseNonStaticCounter();
$secondObject->increaseNonStaticCounter();

echo "<br><h1>Increasing count from second object</h1>";
$secondObject->increaseCountFromNonStaticMethod();

?>