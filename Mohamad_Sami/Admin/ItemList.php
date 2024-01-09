<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
   
</head>
<style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 80%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            padding: 12px 20px;
            background-color: #3498db;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-size: 16px;
            margin-bottom: 20px;
        }

        a:hover {
            background-color: #2980b9;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .action-buttons {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .edit-button, .delete-button {
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
            font-size: 14px;
            display: inline-block;
        }

        .edit-button {
            background-color: #2ecc71;
            color: #fff;
        }

        .edit-button:hover {
            background-color: #27ae60;
        }

        .delete-button {
            background-color: #e74c3c;
            color: #fff;
        }

        .delete-button:hover {
            background-color: #c0392b;
        }

        .logout-button {
            margin-top: 20px;
            padding: 12px 20px;
            background-color: #e74c3c;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 16px;
        }

        .logout-button:hover {
            background-color: #c0392b;
        }
    </style>
<body>
    <?php require_once("Config.php"); ?>  
    <h1>Admin Dashboard</h1>
    <a href="ItemAdd.php"><i class="fas fa-plus"></i> Add new Item</a>
    <?php 
    
    $query = "SELECT *  
    FROM item   ";

    $result = mysqli_query($con, $query);
    echo "<table>";
    echo "<tr><th></th> <th> Name </th> 
                <th> Price </th>
                <th></th> 
                <th></th> </tr>";
    while( $row = mysqli_fetch_array($result) ) {
        echo "<tr>";
        $img = $row["Image"];
        echo "<td><img src='..\\Uploads\\$img' alt='item image'/> </td>";
        echo "<td>".$row["Name"]."</td>";
        echo "<td>".$row["Price"]."</td>";
        $id = $row["ID"];
        $id = base64_encode($id);
        echo "<td class='action-buttons'>
                  <button class='edit-button' onclick='confirmEdit(\"ItemEdit.php?q=$id\")'><i class='fas fa-edit'></i> Edit</button>
                  <button class='delete-button' onclick='confirmDelete(\"ItemDelete.php?x=$id\")'><i class='fas fa-trash'></i> Delete</button>
              </td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>

    <script>
        function confirmDelete(url) {
            if (confirm("Are you sure?")) {
                window.location.href = url;
            }
        }

        function confirmEdit(url) {
            if (confirm("Proceed to Edit?")) {
                window.location.href = url;
            }
        }
    </script>
</body>
</html>
