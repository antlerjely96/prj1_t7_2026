<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List product</title>
<!--    Nhung truc tiep tu tren internet
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->
<!--    Tai thu vien ve va cho thu vien vao trong prj -->
    <link href="../../Libraries/bootstrap.min.css" type="text/css" rel="stylesheet">
</head>
<body>
    <?php
        include_once '../Layouts/header.php';
    ?>
    <a href="create.php">Add a product</a>
    <table border="1px" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Category</th>
            <th></th>
            <th></th>
        </tr>
        <?php
            //Mo ket noi
            include_once "../../Connections/open.php";
            //Viet sql
            $sql = "SELECT products.*, categories.name AS category_name FROM products INNER JOIN categories ON products.category_id = categories.id";
            //Chay sql
            $products = mysqli_query($connection, $sql);
            //Dong ket noi
            include_once '../../Connections/close.php';
            //Hien thi du lieu
            foreach ($products as $product) {
        ?>
            <tr>
                <td>
                    <?php echo $product['id']; ?>
                </td>
                <td>
                    <?php echo $product['name']; ?>
                </td>
                <td>
                    <?php echo $product['price']; ?>
                </td>
                <td>
                    <?php echo $product['quantity']; ?>
                </td>
                <td>
                    <?php echo $product['category_name']; ?>
                </td>
                <td>
                    <a href="edit.php?id=<?php echo $product['id']; ?>">Edit</a>
                </td>
                <td>
                    <a href="destroy.php?id=<?php echo $product['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>