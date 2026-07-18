<?php
    //Lay du lieu tu form
    $name = $_POST['name'];
    //Mo ket noi
    include_once "../../Connections/open.php";
    //sql luu du lieu
    $sql = "INSERT INTO categories(name) VALUES ('$name')";
    //Chay sql
    mysqli_query($connection, $sql);
    //Dong ket noi
    include_once "../../Connections/close.php";
    //Quay ve danh sach
    header("Location:index.php");
?>
