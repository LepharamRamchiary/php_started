<?php
// if Statement
$email = "lepha@gmail.com1";
if ("lepha@gmail.com" === $email) {
    // echo "Your are loggend";
}

// if-else Statement
if ("lepha@gmail.com" === $email) {
    // echo "Your are loggend";
} else {
    // echo "Your are not loggend";
}


// if-elseif-else Statement
$pass = 1234;

if ("lepha@gmail.com" === $email and $pass == 1234) {
    // echo "Your are loggend";
} else if ("lepha@gmail.com" === $email and $pass != 1234) {
    // echo "your password is not currect";
} else if ("lepha@gmail.com" != $email and $pass == 1234) {
    // echo "Your email is nor currect";
} else if ("lepha@gmail.com" != $email and $pass != 1234) {
    // echo "Both your password and email is not currect";
} else {
    // echo "Your are not loggend";
}


// switch Statement
$maths = "**";
$a = 2;
$b = 3;


switch ($maths) {
    case "+":
        echo $a + $b;
        break;

    case "-":
        echo $a - $b;
        break;

    case "*":
        echo $a * $b;
        break;

    case "/":
        echo $a / $b;
        break;

    case "%":
        echo $a % $b;
        break;

    case "**":
        echo $a ** $b;
        break;

    default:
        echo "Wrong input";
        break;
}

?>
