<!-- In PHP, the static keyword is used to define properties and methods that belong to the class itself rather than to an instance of the class. Static properties and methods can be accessed without creating an instance of the class. -->


<?php

class abc{
    public static $name = "Lepharam";
    public static function show() {
        echo self::$name;
    }
}

class xyz extends abc{
 public static function shows() {
     echo parent::$name;
 }   
}

// echo abc::$name;
// abc::show();
xyz::shows();
?>