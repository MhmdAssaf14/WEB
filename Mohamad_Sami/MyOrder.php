<html>
<body>
<?php 

$userId = $_SESSION["UserId"];
    require("Config.php");
    $query = "SELECT I.ID, I.Name, I.Price, I.Image,
    O.OrderDate, O.OrderNb FROM item I 
    INNER JOIN `order` O ON I.ID = O.itemId 
    WHERE O.UserId = $userId";
/*
$query = "SELECT * FROM `order` O inner join Item I on O.itemId = I.ID where O.UserId = $userId";
	    echo $query;*/
		 $result = mysqli_query($con, $query);
    echo "<table border='1' width='70%' >";
    echo "<tr> <th> Order # </th> <th></th> <th> Name </th> 
                <th> Price </th>
                <th> Order Date </th></tr>";
    while( $row = mysqli_fetch_array($result) ) {
            echo "<tr>";
            echo "<th>".$row["OrderNb"]."</th>";
            $img = $row["Image"];
            echo "<td align='center'><img src='Uploads\\$img' height='50px' width='50px'/> </td>";
            echo "<td>".$row["Name"]."</td>";
            echo "<td>".$row["Price"]."$</td>";
            echo "<td>".$row["OrderDate"]."</td>";
            echo "</tr>";
    }
    echo "</table>";
    ?>
</body>


</html>