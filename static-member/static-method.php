<?php


class greeting{
    public static function welcome(){
        echo "Good Morning";
    }
}

class show{
    public function message(){
        greeting::welcome();
    }
}

$ob = new show();
$ob->message();

class greeting2{
    public function welcome(){
        echo "Good MORING GUYS";
    }


}

class show2{
    public function message(){
        $ob = new greeting2();
        $ob->welcome();
    }
}


$obje = new show2();
$obje->message();
/*
 Here i can know a new think that a static class can be called 
 into other classes methods without extends other class:

 */