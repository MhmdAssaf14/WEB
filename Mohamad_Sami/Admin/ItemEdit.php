<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Item</title>
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

        form {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
            width: 50%;
            display: flex;
            flex-direction: column;
        }

        label {
            color: red;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"],
        input[type="reset"] {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            font-size: 16px;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <?php require_once("Config.php"); ?>
    <h1>Edit Item</h1>
    <?php
        $name = "";
        $nameError = "";
        $price = "";
        $priceError = "";

        $idToEdit = base64_decode($_GET["q"]);
        $query = "SELECT * FROM item WHERE ID = $idToEdit";
        $result = mysqli_query($con, $query);

        while ($row = mysqli_fetch_array($result)) {
            $name = $row["Name"];
            $price = $row["Price"];
        }

        if (isset($_POST["btnSave"])) {
            // the user clicks save
            // check validation:
            $name = $_POST["txtName"];
            $price = $_POST["txtPrice"];
            $isValid = true;

            // check textbox name
            if ($name == "") {
                $nameError = "Enter a value";
                $isValid = false;
            } else {
                $nameError = "";
            }

            // check textbox price
            if ($price == "" || !is_numeric($price) || $price <= 0) {
                $priceError = "Enter a valid price";
                $isValid = false;
            } else {
                $priceError = "";
            }

            if ($isValid) {
                // update SQL
                $query  = "UPDATE item SET Name = '$name', Price = $price WHERE ID = $idToEdit";
                $result = mysqli_query($con, $query);
                header("Location: itemList.php"); // return to list page
            }
        }
    ?>

    <form method="post" action="">
        Item Name <input type="text" name="txtName" value="<?php echo $name; ?>" />
        <label><?php echo $nameError; ?></label> <br/>

        Item Price <input type="number" name="txtPrice" value="<?php echo $price; ?>" />
        <label><?php echo $priceError; ?></label> <br/>

        <input type="submit" name="btnSave" value="Save" />
        <input type="reset" value="Clear" />
    </form>
</body>
</html>
