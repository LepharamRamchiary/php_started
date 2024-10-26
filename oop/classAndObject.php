<?php

// class MyClass{
//     function   hello(){
//         echo "Hello World";
//     }
// }

// $obj = new MyClass();

// $obj->hello();


// // class 
// class Fruit {
//     public $name;
//     public $color;

//     // method
//     function set_name($name){
//         $this->name = $name;
//     }
//     function get_name(){
//         return $this->name;
//     }

//     function set_color($color){
//         $this->color = $color;
//     }
//     function get_color(){
//      return $this->color;   
//     }
// }

// // object
// $apple = new Fruit();
// $apple->set_name("Apple");
// $apple->set_color("Red");

// echo "Name: " . $apple->get_name() . "<br>";
// echo "Color: " . $apple->get_color() . "<br>";


// array even sum 
// class EvenSum{
//     public $sum = 0;
//     function set_evenSum($arr){
//         for($i=0; $i<count($arr); $i++){
//             if($arr[$i] % 2 == 0){
//                 $this->sum += $arr[$i];
//             }
//         }
//     }

//     function get_evenSum(){
//         return $this->sum;
//     }
// }

// $arr = [1,2,3,4,5,6,7,8,9];

// $obj1 = new EvenSum();
// $obj1->set_evenSum($arr);

// echo "the sum of even number is: " . $obj1->get_evenSum();

// string 

class VowelsCount{
    public $count = 0;
    function set_count($str){
        for($i=0; $i<strlen($str); $i++){
            if($str[$i] == "a" || $str[$i] == "e" || $str[$i] == "i" || $str[$i] == "o" || $str[$i] == "u"){
                $this->count++;
            }
        }
    }

    function get_count(){
        return $this->count;
    }

}

$obj = new VowelsCount();
$obj->set_count("Lepharam");
echo "The number of vowels in Lepharam is: " . $obj->get_count();
?>