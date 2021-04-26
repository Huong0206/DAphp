<?php include "config.php"; 
    $Ten = $_GET['Ten'];
    $ThuTu = $_GET['ThuTu'];
    $AnHien = $_GET['AnHien'];

    $str = "insert into loaitin (Ten, ThuTu, AnHien) VALUES ('$Ten','$ThuTu','$AnHien')";
    mysqli_query($conn,$str);
    header("location:list_loaitin.php");
?>