<?php
class StaticExample
{
    public static $count;
    public static function increaseCount()
    {
        echo self::$count++ . "<br>";
    }

    public function increaseCountFromNonStaticMethod()
    {
        echo self::$count++ . "<br>";
    }
}


echo "<h1>From static Scope Resolution operator.</h1>";
StaticExample::$count = 1;
StaticExample::increaseCount();
StaticExample::increaseCount();

echo "<br><h1>From object.</h1>";
$object = new StaticExample();
$object->increaseCountFromNonStaticMethod();
$object->increaseCountFromNonStaticMethod();
$object->increaseCountFromNonStaticMethod();
?>
