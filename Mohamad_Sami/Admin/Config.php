<?php
	
session_start();

// Use same config file in external folder
require("../Config.php");
	
//check if there is a logged in user and if the role is 1 
if(!isset($_SESSION["LoggedIN_Admin"]) || $_SESSION["LoggedIN_Admin"] != 1)
		header("Location: ../index.php");
	
	
include("header.php");
?>