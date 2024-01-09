<?php

$val = $_GET["name"];

 require("Config.php");
   $query = "SELECT * FROM users where Username = '$val'";
   
    $result = mysqli_query($con, $query);
	if(mysqli_num_rows($result) > 0)
		echo '<label style="color:red">Username already exist &#10006;.</label>';
	else
		echo '<label style="color:green">Username valid &#10004;.</label>';
?>