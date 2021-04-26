<?php include "config.php"; 
    $TieuDe = $_GET['TieuDe'];
    $Content = $_GET['Content'];
    $urlHinh = $_GET['urlHinh'];
    $idTin = $_GET['idTin'];
    $idTL = $_GET['idTL'];
    $idLT = $_GET['idLT'];
    $TinNoiBat = $_GET['TinNoiBat'];
    $AnHien = $_GET['AnHien'];

    $str = "insert into tin (TieuDe, Content, idTin, urlHinh, idTL, idLT, TinNoiBat, AnHien) VALUES ('$TieuDe','$Content','$idTin','$urlHinh','$idTL','$idLT','$TinNoiBat','$AnHien')";
    mysqli_query($conn,$str);
    header("location:list_tin.php");
?>