<?php
session_start();
if(isset($_SESSION["LoggedIN"]) && $_SESSION["LoggedIN"] == 1){
   echo '<a href="index.php">Home</a> &nbsp; <a href="MyOrders.php">My Orders</a> &nbsp; <a href="Logout.php">Logout</a><br/><br/>';
}
else
echo '<a href="index.php">Home</a> &nbsp; <a href="login.php">login</a><br/><br/>';
?>
