<?php
$value = $_GET["name"]; // sent from ajax data
require("Config.php");
    $query = "SELECT *
    FROM item 
    WHERE Name LIKE '%$value%'
    ";
      echo"</br>";
      echo "<div class='row'>";
    $result = mysqli_query($con, $query);
    while( $row = mysqli_fetch_array($result) ) {
        echo "<div class='col-12 col-md-12 col-lg-4'>";
        echo "<div class='card text-light text-center bg-white pb-2'>";
        echo "<div class='card-body text-dark'>";
        $img = $row["Image"];
        echo "<div class='img-area'><img src='Uploads\\$img' class='img-fluid' alt='Product Image'/></div>";
        echo "<h3 class='card-title'>". $row["Name"]."</h3>";
        echo "<p class='lead'>". $row["Price"] . "$"." / piece </p>" ;
        $id = $row["ID"]; // Item Id
        $id = base64_encode($id);
        echo "<button class='btn bg-warning text-dark'><a style='text-decoration: none; color: black;' href='Order.php?x=$id'>Order Now</a></button>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        
        echo"</br>";
    }
    echo "</div>";
    ?>