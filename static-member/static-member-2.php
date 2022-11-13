<?php
class base{
    public static $name;
    public static function show(){
        echo "This is " . self::$name;
    }

    function __construct($n)
    {
        self::$name = $n;
        echo self::show();
    }
}

$ob = new base("Shah Alam");