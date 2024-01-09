<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
           
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f4f4f4;
        }

        .container {
            width: 500px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        img {
            display: block;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            max-width: 100%;
            height: auto;
        }

        h2 {
            margin-bottom: 10px;
        }

        .price {
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        .back-link, .submit-link {
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            color: #333;
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #f4f4f4;
            transition: background-color 0.3s ease;
        }

        .submit-link:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>

<?php
include("auth.php");

// Redirect to login if not logged in
if (!isset($_SESSION["LoggedIN"]) || $_SESSION["LoggedIN"] != 1) {
    header("Location: login.php");
    exit;
}

require("Config.php");

// Fetch item details
$itemId = base64_decode($_GET["x"]);
$query = "SELECT * FROM item WHERE ID = ?";
$stmt = mysqli_prepare($con, $query);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "i", $itemId);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_assoc($result)) {
        displayItemDetails($row);
    }

    mysqli_stmt_close($stmt);
}

// Function to display item details
function displayItemDetails($item) {
    echo "<div class='container'>";
    echo "<img src='Uploads/{$item["Image"]}' alt='Item Image'/>";
    echo "<h2>{$item["Name"]}</h2>";
    echo "<div class='price'>{$item["Price"]}$</div>";
    echo "<a href='index.php' class='back-link'>Back to List</a>";
    $id = base64_encode($item["ID"]);
    echo "<a href='OrderAction.php?x=$id' class='submit-link' onclick='return confirm(\"Are you sure?\")'>Submit Order</a>";
    echo "</div>";
}
?>

</body>
</html>
