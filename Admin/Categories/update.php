<?php
    //Lay du lieu tu form
    $id = $_POST['id'];
    $name = $_POST['name'];
    //Mo ket noi
    include_once "../../Connections/open.php";
    //Viet sql update du lieu
    $sql = "UPDATE categories SET name = '$name' WHERE id = '$id'";
    //Chay sql
    mysqli_query($connection, $sql);
    //Dong ket noi
    include_once "../../Connections/close.php";
    //Quay ve danh sach
    header("Location: index.php");
?>
