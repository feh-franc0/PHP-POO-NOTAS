<?php

echo "Access Modifiers<br>";
// public
// protected
// private

class Vegetable{
    protected $name;
    public $color;

    public function set_name($name){
        $this->name=$name;
    }
    public function get_name(){
        return $this->name;

    }
}
$brinjal=new Vegetable();
$brinjal->set_name("brinjal");
echo $brinjal->get_name();
