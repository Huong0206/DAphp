<?php include "header.php"; ?>
<?php include "function.php"; ?>
<?php include "../admin/config.php"; ?>
<?php $idLT = $_GET['idLT']?>

        <br>
        <!-- Category News Start-->
        <div class="cat-news">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <?php 
                            $str = "select * from loaitin where AnHien=1 and lang='vi' and idLT=$idLT";
                            $result = mysqli_query($conn,$str);
                            $row = mysqli_fetch_assoc($result);
                        ?>
                        <h3><?php echo $row['Ten']; ?></h3>
                        <br>
                    </div>


                    <?php
                                    $str = "select * from tin where idLT = $idLT and AnHien = 1 and lang = 'vi' ";
                                    $result = mysqli_query($conn,$str);

                                    while($row = mysqli_fetch_assoc($result)){?>
                                        <div class="col-12 col-sm-6">
                                            <div class="single-blog-post style-2 mb-5">
                                                <!-- Blog Thumbnail -->
                                                <div class="blog-thumbnail">
                                                    <a href="#"><img src="img/news-350x223-2.jpg" alt=""></a>
                                                </div>

                                                <!-- Blog Content -->
                                                <div class="blog-content">
                                                    <span class="post-date"><?php echo $row['Ngay'];?></span>
                                                    <a href="#" class="post-title"><?php echo $row['TieuDe'];?></a>
                                                    <a href="#" class="post-author">By Ken</a>
                                                </div>
                                            </div>
                                        </div>

                                    <?php } ?> 

                    
                </div>
            </div>
        </div>
        
        
        <!-- Tab News Start-->
        <div class="tab-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#noibat">Nổi Bật</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#xemnhieu">Xem Nhiều</a>
                            </li>

                            
                        </ul>

                        <div class="tab-content">
                            <div id="noibat" class="container tab-pane active">

                                <?php echo noibat($conn); ?>
                                
                            </div>
                            <div id="xemnhieu" class="container tab-pane fade">

                                <?php echo xemnhieu($conn);?>
                            </div>

                        </div>
                    </div>
                    
                    <div class="col-md-6">

                    <div class="main-news">
                        <div class="container">
                            <div class="row">
                    
                                <div class="mn-list">
                                    <h2>Read More</h2>
                                    <ul>
                                        <?php echo readmore($conn); ?> 
                                        
                                    </ul>
                                </div>
                    
                            </div>
                        </div>
                    </div>
                        
                    
                    
                    </div>
                </div>
            </div>
        </div>

<?php include "footer.php";?>