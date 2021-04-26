<?php include "config.php"; 
    $TenTL = $_GET['TenTL'];
    $ThuTu = $_GET['ThuTu'];
    $AnHien = $_GET['AnHien'];

    $str = "insert into theloai (TenTL, ThuTu, AnHien) VALUES ('$TenTL','$ThuTu','$AnHien')";
    mysqli_query($conn,$str);
    header("location:list_theloai.php");
?>