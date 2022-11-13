<?php

class Domain{
    protected static function getWebSiteName(){
        echo "shahalom.com";
    }
}

class personalDomain extends Domain{
    public $personalsiteName;
    public function siteName(){
        $this->personalsiteName = parent::getWebSiteName();
    }
}

 

$ob = new personalDomain();
$ob->siteName();