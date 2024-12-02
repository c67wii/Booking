<?php

define("DB_SERVER", "localhost"); 
define("DB_USER", "root");        
define("DB_PASSWORD", "");        
define("DB_NAME", "booking");     


$con = mysqli_connect("localhost", "root", "", "booking");


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

 echo "Connected successfully!";
?>
