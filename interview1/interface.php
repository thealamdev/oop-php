<?php

interface storeDex{
    public function name();
    public function age();
}


class index implements storeDex{
    public function name()
    {
        echo "hi";
    }

    public function age(){
        echo "age is 21";
    }
}


$ob = new index();

$ob->name();
$ob->age();