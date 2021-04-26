<?php include "config.php";
//lấy dữ liệu đã chỉnh sửa
$idTin = $_GET['idTin'];
$TieuDe = $_GET['TieuDe'];
$AnHien = $_GET['AnHien'];
$TheLoai = $_GET['idTL'];
$LoaiTin = $_GET['idLT'];

$str = "update tin set TieuDe='$TieuDe', AnHien='$AnHien', idTL='$TheLoai', idLT='$LoaiTin' where idTin=$idTin";
mysqli_query($conn,$str);
header("location:list_tin.php");
?>