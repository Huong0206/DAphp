<?php include "config.php";
$idTL = $_GET['idTL'];
//câu truy vấn xóa thể loại theo điêu kiện là idTL
$str = "delete from theloai where idTL = $idTL";
mysqli_query($conn,$str);
header("location:list_theloai.php");