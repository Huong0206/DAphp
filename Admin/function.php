<?php

function get_theloai($idTL,$conn){
    $str = "select * from theloai where idTL =$idTL";
    $result = mysqli_query($conn,$str);
    $row = mysqli_fetch_assoc($result);
    echo $row['TenTL'];
}
function get_loaitin($idLT,$conn){
    $str = "select * from loaitin where idLT =$idLT";
    $result = mysqli_query($conn,$str);
    $row = mysqli_fetch_assoc($result);
    echo $row['Ten'];
}

?>