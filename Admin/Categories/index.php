<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List category</title>
</head>
<body>
    <a href="create.php">Add Category</a>
    <table width="100%" border="1px" cellspacing="0" cellpadding="0">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th></th>
            <th></th>
        </tr>
        <?php
            //Mo ket noi
            include_once "../../Connections/open.php";
            //Sql lay du lieu tu db
            $sql = "SELECT * FROM categories";
            //Chay sql
            $categories = mysqli_query($connection, $sql);
            //Dong ket noi
            include_once "../../Connections/close.php";
            //Hien thi du lieu
            foreach ($categories as $category){
        ?>
                <tr>
                    <td>
                        <?php echo $category['id']; ?>
                    </td>
                    <td>
                        <?php echo $category['name']; ?>
                    </td>
                    <td>
                        <a href="edit.php?id=<?php echo $category['id']; ?>">Edit</a>
                    </td>
                    <td>
                        <a href="destroy.php?id=<?php echo $category['id']; ?>">Delete</a>
                    </td>
                </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>