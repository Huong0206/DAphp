<?php include "../admin/config.php"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>NEWS</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap News Template - Free HTML Templates" name="keywords">
        <meta content="Bootstrap News Template - Free HTML Templates" name="description">

        <!-- Favicon -->
        <link href="img/favicon.jpg" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet"> 

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tb-contact">
                            <p><i class="fas fa-envelope"></i>kd26.here@gmail.com</p>
                            <p><i class="fas fa-phone-alt"></i>0123 456 789</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tb-menu">
                            <a href="">About</a>
                            <a href="">Privacy</a>
                            <a href="">Terms</a>
                            <a href="">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar Start -->
        
        <!-- Brand Start -->
        <!--logo-->
        <div class="brand">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4">
                        <div class="b-logo">
                            <a href="index.html">
                                <img src="img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <!-- banner-->
                    <div class="col-lg-6 col-md-4">
                        <div class="b-ads">
                            <a href="https://htmlcodex.com">
                                <img src="img/ads-1.jpg" alt="Ads">
                            </a>
                        </div>
                    </div>
                    <!--seach-->
                    <div class="col-lg-3 col-md-4">
                        <div class="b-search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.php" class="nav-item nav-link active">Trang Chủ</a>

                            <?php 
                                $str_theloai = "select * from theloai where AnHien=1 and lang='vi'";
                                $result_theloai = mysqli_query($conn,$str_theloai);
                                while ($row_theloai = mysqli_fetch_assoc($result_theloai)){
                                $idTL = $row_theloai['idTL']
                            ?>
                            <div class="nav-item dropdown">
                                <a href="theloai.php?idTL=<?php echo $row_theloai['idTL'];?>" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo $row_theloai['TenTL']; ?></a>
                                <div class="dropdown-menu">
                                    <?php 
                                            $str_loaitin = "select * from loaitin where idTL = $idTL and AnHien=1 and lang = 'vi'";
                                            $result_loaitin = mysqli_query($conn,$str_loaitin);
                                            while($row_loaitin = mysqli_fetch_assoc($result_loaitin)){
                                            ?>
                                    <a href="loaitin.php?idLT=<?php echo $row_loaitin['idLT']; ?>" class="dropdown-item"><?php echo $row_loaitin['Ten']; ?></a>
                                    
                                    <?php } ?>
                                </div>
                            </div>
                            <?php } ?>

                            <!-- <a href="single-page.html" class="nav-item nav-link">Single Page</a>
                            <a href="contact.html" class="nav-item nav-link">Contact Us</a> -->
                        </div>
                        <div class="social ml-auto">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->