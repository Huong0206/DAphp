<?php
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $database = "kend";
    $conn = mysqli_connect($localhost,$username,$password);
    // Ket Noi Database
      mysqli_select_db($conn,$database)
?>
