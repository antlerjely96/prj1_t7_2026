<?php
    //Lay du lieu tu form
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $category_id = $_POST['category_id'];
    //Mo ket noi
    include_once '../../Connections/open.php';
    //Viet sql
    $sql = "UPDATE products SET name = '$name', price = '$price', quantity = '$quantity', category_id = '$category_id' WHERE id = '$id'";
    //Chay sql
    mysqli_query($connection, $sql);
    //Dong ket noi
    include_once '../../Connections/close.php';
    //Quay lai danh sach
    header('Location: index.php');
?>