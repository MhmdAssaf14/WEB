<?php
session_start();
require("Config.php");
// clean user entries
$username = mysqli_real_escape_string($con, $_POST["Username"]);
$pass = mysqli_real_escape_string($con,$_POST["Pass"]);

$query = "SELECT * FROM users WHERE Username='".$username."'";
$result = mysqli_query($con, $query);

if(!$result)
	die(mysqli_error($con)); // error in query or connection

if(mysqli_num_rows($result) == 0)
{
	$_SESSION["ERROR"] = "Invalid username"; // no result returned
	header("Location: Login.php");
}
else{
	// username exists => continue to check password
	$row=mysqli_fetch_array($result);
	// hash the new logging password
	$hash1 = hash('sha256', $pass);
	$salt = $row["Salt"]; //from database already encrypted with md5
	$finalPassword = hash('sha256', $hash1.$salt);
	if($finalPassword == $row["Password"]){
	
		if($row["RoleId"] == 1){
			// login as Admin
			$_SESSION["LoggedIN_Admin"] = 1;
			$_SESSION["Username_Admin"] = $username;
			$_SESSION["UserId_Admin"] = $row["Id"];
			header("Location: Admin\ItemList.php");			
		}
		else{ // log in as : Public Users
			echo "Login Successful";
			$_SESSION["LoggedIN"] = 1;
			$_SESSION["Username"] = $username;
			$_SESSION["UserId"] = $row["Id"];
			header("Location: index.php");
		}
	}
	else{
		$_SESSION["ERROR"] = "Invalid Password";
		header("Location: Login.php");
	}
}

?>