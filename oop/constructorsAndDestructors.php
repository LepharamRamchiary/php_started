<?php

class MyClass {

    // Note : Constructors and Destructors are used to initialize and destroy objects. And the Constructors are called automatically when an object is created and the Destructors are called automatically when an object is destroyed.
    // Constructors  are execute first and destructors are execute last and normal functions are execute in between.
    // function __construct() {
    //     echo "Hello, World!" . "<br>";
    // }

    // function __destruct() {
    //     echo "Goodbye, World!" . "<br>";
    // }
    // function hello() {
    //     echo "Hello Normal function" . "<br>";
    // }

   
}

$obj = new MyClass(1);
// $obj->hello();

?>