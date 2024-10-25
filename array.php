<!-- Indexed Arrays -->
<!-- An indexed array is an array where each element is stored with a numeric index starting from 0. -->
<?php

//  $arr = [1,2,3,4,5,6,7];
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

function evenNumSub($arr)
{
    $evenSum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] % 2 == 0) {
            $evenSum += $arr[$i];
        }
    }
    return $evenSum;
}

$sum = evenNumSub($arr);
//  echo "the sum of even number is: " . $sum;

?>

<!-- Associative Arrays -->
<!-- An associative array allows you to use named keys (strings) to access values instead of numeric indexes. -->

<?php

$person = [
    "name" => "Lepharam",
    "age" => 26,
    "gender" => "male"
];

// echo $person["name"] . " " . $person["age"] . " " . $person["gender"];

// foreach ($person as $key => $value) {
//     echo "$key: $value <br>";
// }
?>


<!-- Multidimensional Arrays -->
<!-- A multidimensional array is an array that contains one or more arrays. It can be used to store complex data structures. -->

<?php
$users = [
    ["name" => "Lepharam", "age" => 26, "gender" => "male"],
    ["name" => "Lepha", "age" => 27, "gender" => "male"],
    ["name" => "Lili", "age" => 25, "gender" => "famale"]
];

// echo $users[0]["name"]. " " . $users[0]["age"] . " " . $users[0]["gender"] . "<br>";
// echo $users[1]["name"]. " " . $users[0]["age"] . " " . $users[0]["gender"];

foreach ($users as $key => $value) {
    foreach ($value as $key2 => $value2) {
        echo "$key2: $value2" . " " . "<br/>";
    }
}
?>