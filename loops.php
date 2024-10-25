<?php
// for loop
$number = 20;

for ($i = 1; $i <= $number; $i++) {
    if ($i % 2 == 0) {
        // echo "The 1 to 20 even number are: $i <br>";
    }
}

// while loop
$a = 1;
$b = 20;

// while ($a <= $b) {
//     if ($a % 2 != 0) {
//         // echo "The 1 to 20 odd number are: $a <br>";
//     }
//     $a++;
// }

// while($a <= $b) {
//     echo "The 1 to 20 numbers are: $a <br>";
//     if($a == 15) {
//         echo "The 1 to 20 numbers are: $a <br>";
//         // continue;
//         break;
//     }
//     $a++;
// }

// do...while loop

// do {
//     echo "The 1 to 20 numbers are: $a <br>";
//     if ($a == 15) {
//         break;
//     }
//     $a++;
// } while ($a <= $b);

// foreach loop
// Array

// $fruits = ["Apple", "Banana", "Orange"];

// foreach ($fruits as $fruits){
//     echo "He like $fruits <br>";
// }

// $person = ["name" => "Lepharam", "age" => "21"];

// foreach ($person as $key => $value) {
//     echo "$key: $value <br>";
// }

$array = [1,2,3,4,5,6,7,8,9];
$sumOfEvenNum = 0;


// foreach ($array as $value) {
//     if($value % 2 == 0) {
//         echo $value . "<br>";
//         $sumOfEvenNum += $value;
//     }
// }

// echo "The sum of Array even number is: $sumOfEvenNum";

// foreach ($array as &$value) {
//     $value *= 2;
// }

// print_r($array);

// $people = [
//     ["name" => "John", "age" => 30],
//     ["name" => "Jane", "age" => 25],
//     ["name" => "Doe", "age" => 40]
// ];

// foreach ($people as $person) {
//     echo "Name: " . $person["name"] . ", Age: " . $person["age"] . "<br>";
// }

// $arr = [1,2,3,4,5,6,7];

// foreach ($arr as $value){
//     if($value == 5) {
//         // break;
//         continue;
//     }
//     echo "The value is: $value <br>";
// }

// Object 

class Person {
    public $name = "Lepharam";
    public $age = 21;
    public $country = "India";
}

$person = new Person();

foreach ($person as $key => $value) {
    echo "$key: $value <br>";
}
