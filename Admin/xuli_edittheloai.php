<?php include "config.php";
//lấy dữ liệu đã chỉnh sửa
$idTL = $_GET['idTL'];
$TenTL = $_GET['TenTL'];
$ThuTu = $_GET['ThuTu'];
$AnHien = $_GET['AnHien'];

$str = "update theloai set TenTL = '$TenTL', ThuTu='$ThuTu', AnHien='$AnHien' where idTL=$idTL";
mysqli_query($conn,$str);
header("location:list_theloai.php");
?>