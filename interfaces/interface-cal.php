<?php

interface Calculator{
    public function sum($a,$b);
}

interface Calcu{
    public function sub($x,$y);
}

//derives class:
class Math implements Calculator,Calcu{
    public function sum($a,$b){
        echo $a+$b . "<br>";
    }

    public function sub($x,$y){
        echo $x-$y;
    }
}


$ob = new Math();
$ob->sum(20,300);
$ob->sub(900,434);