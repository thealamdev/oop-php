<?php
class base{
    public static $name;
    public static function show(){
        echo "This is " . self::$name;
    }

    
}

class Derives extends base{
    function __construct($n)
    {
        parent::$name = $n;
        echo parent::show();
    }
}

$ob = new Derives("Shah Alam");
