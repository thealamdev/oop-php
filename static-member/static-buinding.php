<?php
class Personal {
    public static $name = "Shah alam";
    public function show(){
        echo static::$name;
    }
}

class info extends Personal{
    public static $name = "sajjat";

}

$ob = new info();
$ob->show();