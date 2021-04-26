<?php include "header.php"; ?>
<?php include "function.php"; ?>
<?php include "../admin/config.php"; ?>
<?php $idTL = $_GET['idTL']?>

        <br><br>
        <!-- Category News Start-->
        <div class="cat-news">
            <div class="container">
                <div class="row">
                                        
                    <?php 
                    $str = "select * from loaitin where AnHien=1 and lang='vi' and idTL=$idTL";
                    $result = mysqli_query($conn,$str);
                    while ($row = mysqli_fetch_assoc($result)){
                        $idLT=$row['idLT'];
                        $filter="idLT";
                    
                ?>                 
                    <div class="col-md-6">
                        <h2><?php echo $row['Ten']; ?></h2>
                        <div class="row cn-slider">

                            <?php get_tintrongloai($conn,$idTL,$filter); ?>

                            
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