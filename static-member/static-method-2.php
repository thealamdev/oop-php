<?php

class Domain{
    protected static function getWebSiteName(){
        return "shahalom.com" . "<br>";
    }
}

class personalDomain extends Domain{
    public $personalsiteName;
    public function siteName(){
       return $this->personalsiteName = parent::getWebSiteName();
    }
}

class subdomain extends Domain{
    public $subdomain;
    public function show(){
        $this->subdomain = parent::getWebSiteName();
        echo "clock.". $this->subdomain;
         
    }
     
}

$ob = new personalDomain();
$sub = new subdomain();
echo $ob->siteName();
$sub->show();