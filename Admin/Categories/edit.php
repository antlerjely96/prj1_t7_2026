<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit category</title>
</head>
<body>
    <form method="post" action="update.php">
        <?php
            //Lay id cua ban ghi can sua
            $id = $_GET['id'];
            //Mo ket noi
            include_once "../../Connections/open.php";
            //Sql lay du lieu
            $sql = "SELECT * FROM categories WHERE id = '$id'";
            //Chay sql
            $categories = mysqli_query($connection, $sql);
            //Dong ket noi
            include_once "../../Connections/close.php";
            //Hien thi du lieu
            foreach ($categories as $category) {
        ?>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            Name: <input type="text" name="name" value="<?php echo $category['name']; ?>"><br>
            <button>Edit</button>
        <?php
            }
        ?>


    </form>
</body>
</html>