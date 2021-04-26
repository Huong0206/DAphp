<?php include "config.php";
$idTin = $_GET['idTin'];
//câu truy vấn xóa tin theo điêu kiện là idTin
$str = "delete from tin where idTin = $idTin";
mysqli_query($conn,$str);
header("location:list_tin.php");