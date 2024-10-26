<?php

class MyPrentClass{

    function __construct(){
     echo "Parent Class <br>";   
    }

}

class MyChildClass extends MyPrentClass{
    function __construct(){
        // parent::__construct();
        echo "Child Class <br>";
        parent::__construct();
    }
}


// $obj = new MyPrentClass();
$obj = new MyChildClass();


?>