<?php
class product{
    public $visa;
    public $category;

    public function create(){
        $this->visa = "student visa";
        $this->category = "student";
        
    }
}

// creating object:
$categories = new product();
echo $categories->visa;
echo $categories->category;