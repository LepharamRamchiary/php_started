<?php
/* Ways to connect to the database 
1 MySQLi extension
2 PDO- PHP Data Objects-> if data base is change in future
*/

$servername = "localhost";
$username = "root";
$password = "";
$database = "mydb1";

// Create a connction
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection is not success
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection success";
}


// create db in mySQL 
// $sql = "CREATE DATABASE myDB1";
// $result = mysqli_query($conn, $sql);

// if($result){
//     echo "Database created successfully";
// }else{
//     echo "Error creating database: " . mysqli_error($conn);
// }

$sql = "CREATE TABLE `mytable` (`SINO` INT(11) NOT NULL , `name` VARCHAR(11) NOT NULL , `age` INT(11) NOT NULL , `gender` VARCHAR(1) NOT NULL )";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "The table was created successfully";
} else {
    echo "The table was not created: " . mysqli_error($conn);
}
