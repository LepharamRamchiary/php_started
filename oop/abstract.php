<!-- Rule-  -->
 <!-- 1 start class with abstract keyword
 2 in class three atleast one method is abstract
 3 we not make object of abstract class 
 4 In abstract function we not write body 
 5 we inherit abstract class and must use the abstact method or function-->


 <?php

abstract class main_school{
    abstract function numberOfStudent();
}

class xyz_school extends main_school{
    function numberOfStudent(){
        echo "number of student is 100 <br>";
    }
    
    function girlsSchool(){
        echo "girls school <br>";
    }
}

class abc_school extends main_school{
    function numberOfStudent(){
        echo "number of student is 200 <br>";
    }

    function boysSchool(){
        echo "boys school <br>";
    }
}


$obj = new xyz_school();
$obj->numberOfStudent();
$obj->girlsSchool();
$obj2 = new abc_school();
$obj2->numberOfStudent();
$obj2->boysSchool();
?>