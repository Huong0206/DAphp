<?php include "config.php";
//lấy dữ liệu đã chỉnh sửa
$idLT = $_GET['idLT'];
$Ten = $_GET['Ten'];
$ThuTu = $_GET['ThuTu'];
$AnHien = $_GET['AnHien'];

$str = "update loaitin set Ten = '$Ten', ThuTu='$ThuTu', AnHien='$AnHien' where idLT =$idLT";
mysqli_query($conn,$str);
header("location:list_loaitin.php");
?>