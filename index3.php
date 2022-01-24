<?php

echo "<h1>Inheritance</h1>";

class Parent1{
    public $surname;
    public $weight;
    const HELLO="Hey,Iam Khanam..";

    // function set_name($surname){
    //     $this->surname=$surname;

    // }

    function __construct($surname,$weight){
        $this->surname=$surname;
        $this->weight=$weight;
    }
    function get_name(){
        return $this->surname;

    }
    protected function get_weight(){
        return $this->weight;

    }
    function message(){
        // echo "Iam from parent";
        echo self::HELLO;
    }
}
// echo Parent1::HELLO;
// class Child1 extends Parent1{
//     function painting(){
//         return $this->get_weight();

//     }
//     function message(){
//         echo "Iam from child";
//     }
// }


$constData=new Parent1("Khanam",50);
echo $constData->message();
// $child1=new Child1("khanam",50);
// echo $child1->painting();
// echo "<br>";
// echo $child1->message();
// $child1->set_name("khanam");
// echo $child1->get_name();
// echo $child1->get_weight();