<?php
define("SERVER_NAME", "localhost");
define("USERNAME", "root");
define("PASSWORD","");
define("DATABASE","coal_db");

$con = mysqli_connect(SERVER_NAME, USERNAME, PASSWORD, DATABASE);

if(!$con){
    die("Error: " . mysqli_connect_error());
    // header("Location: error.php");
}

?>