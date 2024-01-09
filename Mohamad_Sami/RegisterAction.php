<?php
session_start();
require("Config.php");
$name = mysqli_real_escape_string($con, $_POST["Username"]);
$pass= mysqli_real_escape_string($con,$_POST["Pass"]);
$confirm=mysqli_real_escape_string($con,$_POST["Confirm"]);

$query = "SELECT * FROM users WHERE Username = '".$name."'";

$result = mysqli_query( $con, $query);
if(mysqli_num_rows($result) > 0)
{
	// username already exist
	$_SESSION["ERROR_Reg"] = "Username already Exists";
	header("Location: Register.php");
}
else{
	if($pass != $confirm){
		// password doesn't match
		$_SESSION["ERROR_Reg"] = "Your password doesn't match";
		header("Location: Register.php");		
	}
	else{
		// add a new user
		//1- hashing of password by sha256
		$hash = hash("sha256", $pass);

		//2- generate encrypted salt by md5
		$salt=md5(uniqid(rand(), true));
		$salt = substr($salt, 0, 3);

		//3- hash the password and salt by sha256
		$finalPass = hash("sha256", $hash.$salt);

		// Insert query
		$query="INSERT INTO Users(Username, Password, Salt, RoleId) 
				VALUES('".$name."','".$finalPass."','".$salt."',2)";
		$result=mysqli_query( $con, $query);
		if(!$result)
			echo mysqli_error($con);
		else
			echo "Successfully";

		header("Location: Login.php");
	}
}
?>