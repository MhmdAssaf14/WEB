<?php
include ("authentication.php");
require("Config.php");
// get Item Id
$itemId = base64_decode($_GET["x"]); 
// get User Id
$userId = $_SESSION["UserId"];
// get Date
$orderDate = date('Y-m-d');
$query ="INSERT INTO `order` (ItemId, UserId, orderDate)
        VALUES ($itemId, $userId, '$orderDate');";
// execute
//echo $query;

$result = mysqli_query($con, $query);
 // go to orders page
header("Location: MyOrders.php");

/* if(mysqli_error($con))
	echo mysqli_error();
else
	echo "successful";
*/
?>