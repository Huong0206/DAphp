<?php session_start(); ?>
<?php include "config.php"; ?>  
<?php
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $str = "select * from users where Username = '$username' and Password = '$password'";
    $result = mysqli_query($conn,$str);
    $numrows = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);

    if($numrows == 1){
        $_SESSION['user'] = $row['HoTen'];
        header("Location:index.php");
    }else{
        header("Location:login.php");
    }

?>