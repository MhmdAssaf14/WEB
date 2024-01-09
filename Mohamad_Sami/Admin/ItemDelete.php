<?php

require_once("Config.php");
$idTodele = base64_decode($_GET["x"]);
$query = "DELETE FROM item WHERE ID = $idTodele";

try{
	$result = mysqli_query($con, $query);
	if(!$result)
	{
		echo "Unable to delete Category! <br/><a href='ItemList.php'>Back to List</a>"; //. mysqli_error($con);
	}
	else
		header("Location: ItemList.php");
}
catch(Exception $e){
    echo "<h2 style='color:red'>Unable to delete Item Since it have Orders! </h2><a href='ItemList.php'>Back to List</a>"; //. mysqli_error($con);
	
}

?>