<?php
session_start();
$_SESSION[] = array(); // empty all sessions
unset($_SESSION["LoggedIN"]);
unset($_SESSION["Username"]);
unset($_SESSION["UserId"]);
session_destroy();

header("Location: ..\Login.php");
?>