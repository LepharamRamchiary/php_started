<!-- In PHP, traits are a way to reuse code in multiple classes. Traits allow you to define methods that can be used by multiple classes without using inheritance, which is especially useful when you want to avoid the limitations of single inheritance in PHP.

Key Points about Traits
Traits are declared with the trait keyword.
A trait can include properties and methods.
A class can use multiple traits by including them with the use keyword.
Traits help organize and reuse code across multiple classes without forming strict inheritance relationships -->


<?php

trait abc {
    public function greet(){
        echo "Hello <br>";
    }
}

trait xyz {
    public function greet1(){
        echo "Hello1 <br>";
    }

    public function greet2(){
      echo "Hello2 <br>";   
    }
}


class Admin{
    use abc, xyz;
}

class User{
    use abc;
}

$obj = new Admin();
$obj->greet();
$obj->greet1();
$obj->greet2();


$obj1 = new User();
$obj1->greet();



?>