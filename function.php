<!-- Built-in PHP Functions -->
<?php
// isset
$age = 21;
if (isset($age)) {
    // echo "Age is set";
}

// strlen Returns the length of a string.
$str = "Lepharam";
// echo "The char in str is: " . strlen($str);


// str_replace replaces all occurrences of a string with another string.
// echo str_replace("World", "PHP", "Hello, World!");


// strpos -> finds the position of the first occurrence of a substring in a string.
// echo strpos("Lepharam", "m");

// array_push-> Adds one or more elements to the end of an array
$array = [1, 2, 3, 4];
// array_push($array, 5, 6);
// print_r($array);

// array_merge-> Merges one or more arrays into one array
$array2 = [5, 6, 7, 8];
// $array3 = array_merge($array, $array2);
// print_r($array3);

// count->  Counts the number of elements in an array.
// echo count($array);

?>

<!-- Math_Functions -->

<?php

// rand(): Generates a random number.
// echo rand(1, 10);

// min() and max()-> Find the minimum and maximum values from a list of numbers.
// echo min(1, 2, 3, 4, 5);
// echo "<br>";
// echo max(1, 2, 3, 4, 5);
?>

<!-- User-Defined Functions -->

<?php

// function hello() {
//     echo "Hello, World!";
// }
// hello();

// $a = 10;
// $b = 20;

// function sum ($x , $y){
//     // echo $x + $y;
//     return $x + $y;
// }

// echo "the sum of a and b is: " . sum($a, $b);

// $arr = [1,2,3,4,5,6];
// $sum = 0;
// function evenNumSub($evenSum){
//     global $sum;
//     for($i=0; $i<count($evenSum); $i++){
//         if($evenSum[$i] % 2 == 0){
//             $sum += $evenSum[$i];
//         }
//     }
// }

// evenNumSub($arr);
// echo "the sum of even number is: " . $sum;


// $count = 0;
// function vowels($str, ){
//     global $count;
//     for($i=0; $i<strlen($str); $i++){
//         if($str[$i] == "a" || $str[$i] == "e" || $str[$i] == "i" || $str[$i] == "o" || $str[$i] == "u"){
//             $count++;
//         }
//     }
// }

// vowels("Lepharam");
// echo "the number of vowels in Lepharam is: " . $count;



// Variable Scope (Global vs Local)
// Local Variables: Variables declared inside a function are local to that function.
// Global Variables: Variables declared outside a function can be accessed inside the function using the global keyword.

$a = 10;
$b = 20;
function sumOfTwoNum($x, $y){
    $sum = $x + $y;
    return $sum;
}
echo "the sum of $a and $b is: " . sumOfTwoNum($a, $b);

?>