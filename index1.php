<!-- Classes:It is just a template and using this template multiple objects can be created -->
<!-- Object:It is an instance of class -->


<!-- Syntax of class -->
<?php
echo "<h1>PHP OOP tutorial</h1>";
// class Bike{
//     //properties
//     public $name;
//     public $color;

//     //methods
//     public function set_name($name){
//         $this->name=$name;
//     }
//     public function get_name(){
//         return $this->name;
//     }
//     public function set_color($color){
//         $this->color=$color;
//     }
//     public function get_color(){
//         return $this->color;
//     }
// }
// // syntax for creating object 
// $honda=new Bike();

// $activa=new Bike();
// // instanceof
// var_dump($activa instanceof Bike);
// $activa2=new Bike();
// $activa3=new Bike();
// $honda->set_name("Honda");
// $honda->name="Honda111";
// echo $honda->get_name();
// echo "<br>";
// $honda->set_color("red");
// echo $honda->get_color();
// $activa->set_name("Activa");
// echo "<br>";
// echo $activa->get_name();

// $activa2->set_name("Activa2");
// echo "<br>";
// echo $activa2->get_name();
// $activa3->set_name("Activa3");
// echo "<br>";
// echo $activa3->get_name();

// // instanceof
// var_dump($activa instanceof Bike);


// constructor
// __construct()

class Book{
    public $author;
    public $nooffpages;

    // constructor : without arguments
    // function __construct(){
    //     echo "Iam constructor and iam executed successfully";
    //     echo "<br>";
    // }

    // constructor : with arguments
    function __construct($author,$noofpages){
        $this->author=$author;
        $this->noofpages=$noofpages;
    }
    function get_author(){
        return $this->author;
    }
    function get_pages(){
        return $this->noofpages;
    }
    function __destruct(){
        echo "Iam destroyed {$this->author} <br>";
    }

    // destructor:
    // __destruct()
}
$computerScience1=new Book("computerScience1",60);
echo $computerScience1->get_author();
echo "<br>";
echo $computerScience1->get_pages();
echo "<br>";
$pythonbook=new Book("pythonbook",90);
echo $pythonbook->get_author();
echo "<br>";
echo $pythonbook->get_pages();
echo "<br>";
$socialScience=new Book("socialScience",190);
echo $socialScience->get_author();
echo "<br>";
echo $socialScience->get_pages();
echo "<br>";
// $conputerScience2=new Book();
// $conputerScience3=new Book();
// $conputerScience4=new Book();
// $conputerScience5=new Book();
