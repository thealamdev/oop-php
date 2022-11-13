<?php

use PersonalInfo as GlobalPersonalInfo;

class PersonalInfo{
    public static $name = "Shah Alam";
    public static function show(){
        echo "This is ". self::$name;
    }
}

class publicInfo extends PersonalInfo{
    public function showAll(){
        echo "This is Md. " . parent::$name;
    }
}

echo PersonalInfo::$name; 
PersonalInfo::show();
$ob = new publicInfo();
$ob->showAll();