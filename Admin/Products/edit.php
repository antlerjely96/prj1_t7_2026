<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
        include_once '../Layouts/header.php';
    ?>
    <form method="post" action="update.php">
        <?php
            //Lay id cua ban ghi can sua
            $id = $_GET['id'];
            //Mo ket noi
            include_once "../../Connections/open.php";
            //Viet sql
            $sqlProduct = "SELECT * FROM products WHERE id = '$id'";
            //Chay sql
            $products = mysqli_query($connection, $sqlProduct);
            //Hien thi du lieu
            foreach ($products as $product) {
        ?>
            <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
            Name: <input type="text" name="name" value="<?php echo $product['name']?>"><br>
            Price: <input type="text" name="price" value="<?php echo $product['price']?>"><br>
            Quantity: <input type="text" name="quantity" value="<?php echo $product['quantity']?>"><br>
            Category: <select name="category_id">
                <?php
                //Viet sql
                $sql = "SELECT * FROM categories";
                //Chay sql
                $categories = mysqli_query($connection, $sql);
                //Dong ket noi
                include_once "../../Connections/close.php";
                //Hien thi du lieu
                foreach ($categories as $category) {
                    ?>
                    <option value="<?php echo $category['id']; ?>"
                        <?php
                            if($category['id'] == $product['category_id']){
                                echo "selected";
                            }
                        ?>
                    >
                        <?php echo $category['name']; ?>
                    </option>
                    <?php
                }
                ?>
            </select><br>
        <?php
            }
        ?>
        <button>Edit</button>
    </form>
</body>
</html>