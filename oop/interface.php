<!-- interface same as abstract class, but we use multiple interface in a one class or child class. joint multiple class but not in abstction -->
<!-- in the interface, restricted to use variable , constructor and destructor. and only use public function -->

<?php

interface inter1{
    public function sum();
    public function sub();
}

interface inter2 {
    public function mul();
    public function div();
}

class MyChild implements inter1, inter2{
    function sum(){
     return 10+10;   
    }

    function sub(){
        return 10-5;
    }

    function mul(){
     return 10*10;   
    }

    function div(){
     return 10/2;   
    }
}

$obj = new MyChild();
echo $obj->sum();
echo "<br>";
echo $obj->sub();
echo "<br>";
echo $obj->mul();
echo "<br>";
echo $obj->div();


?>