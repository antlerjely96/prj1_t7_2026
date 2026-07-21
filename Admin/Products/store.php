<?php
    //Lay du lieu trong form
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $category_id = $_POST['category_id'];
    //Mo ket noi
    include_once "../../Connections/open.php";
    //Viet sql
    $sql = "INSERT INTO products(name, price, quantity, category_id) VALUES ('$name', '$price', '$quantity', '$category_id')";;
    //Chay sql
    mysqli_query($connection, $sql);
    //Dong ket noi
    include_once "../../Connections/close.php";
    //Quay lai danh sach
    header("Location: index.php");
?>
