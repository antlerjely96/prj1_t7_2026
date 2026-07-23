<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add a product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
        include_once '../Layouts/header.php';
    ?>
    <form method="post" action="store.php">
        Name: <input type="text" name="name"><br>
        Price: <input type="text" name="price"><br>
        Quantity: <input type="text" name="quantity"><br>
        Category: <select name="category_id">
            <?php
                //Mo ket noi
                include_once "../../Connections/open.php";
                //Viet sql
                $sql = "SELECT * FROM categories";
                //Chay sql
                $categories = mysqli_query($connection, $sql);
                //Dong ket noi
                include_once "../../Connections/close.php";
                //Hien thi du lieu
                foreach ($categories as $category) {
            ?>
                <option value="<?php echo $category['id']; ?>">
                    <?php echo $category['name']; ?>
                </option>
            <?php
                }
            ?>
        </select><br>
        <button>Add</button>
    </form>
</body>
</html>