<?php include "config.php";
$idLT = $_GET['idLT'];
//câu truy vấn xóa thể loại theo điêu kiện là idLT
$str = "delete from loaitin where idLT = $idLT";
mysqli_query($conn,$str);
header("location:list_loaitin.php");