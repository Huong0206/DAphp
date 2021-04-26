<?php include "header.php"; ?>
<?php include "function.php"; ?>
<?php include "classTin.php";?>
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container">
                <ul class="breadcrumb">
                    
                    <?php
                        $t = new tin;
                        $chitiettin = $t->chitiettin();
                        $row_chitiettin = mysqli_fetch_assoc($chitiettin);
                        echo "<p> Trang chủ > ",$row_chitiettin['TenTL'], " > " , $row_chitiettin['Ten'],"</p>";
                    ?>
                    <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">News</a></li>
                    <li class="breadcrumb-item active">News details</li> -->
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Single News Start-->
        <div class="single-news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="sn-container">
                            <div class="sn-img">
                                <!-- <img src="img/news-825x525.jpg" /> -->
                                <img src="<?php echo $row_chitiettin['urlHinh']; ?>" />
                            </div>
                            <div class="sn-content">
                                <!-- nội dung bài viết -->
                                <?php
                                    require_once "classTin.php";
                                    $t = new tin;
                                    $chitiettin = $t->ChiTietTin();
                                    $row_chitiettin = mysqli_fetch_assoc($chitiettin);
                                    echo "<h3>",$row_chitiettin['TieuDe'],"</h3>";
                                    echo "<p>",$row_chitiettin['TomTat'],"</p>";
                                    echo "<p>",$row_chitiettin['Content'],"</p>";
                                ?>


                                <!-- <h1 class="sn-title">Lorem ipsum dolor sit amet</h1>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer molestie, lorem eu eleifend bibendum, augue purus mollis sapien, non rhoncus eros leo in nunc. Donec a nulla vel turpis consectetur tempor ac vel justo. In hac habitasse platea dictumst. Cras nec sollicitudin eros. Nunc eu enim non turpis sagittis rhoncus consectetur id augue. Mauris dignissim neque felis. Phasellus mollis mi a pharetra cursus. Maecenas vulputate augue placerat lacus mattis, nec ornare risus sollicitudin.
                                </p>
                                <p>
                                    Mauris eu pulvinar tellus, eu luctus nisl. Pellentesque suscipit mi eu varius pulvinar. Aenean vulputate, massa eget elementum finibus, ipsum arcu commodo est, ut mattis eros orci ac risus. Suspendisse ornare, massa in feugiat facilisis, eros nisl auctor lacus, laoreet tempus elit dolor eu lorem. Nunc a arcu suscipit, suscipit quam quis, semper augue.
                                </p> -->
                                
                                
                            </div>
                        </div>
                        <!-- <div class="sn-related">
                        Tin mới cùng loại
                            <h2>Related News</h2>
                            <div class="row sn-slider">
                            
                                <div class="col-md-4">
                                    <div class="sn-img">
                                        <img src="img/news-350x223-1.jpg" />
                                        <div class="sn-title">
                                            <a href="">Interdum et fames ac ante</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="sn-img">
                                        <img src="img/news-350x223-2.jpg" />
                                        <div class="sn-title">
                                            <a href="">Interdum et fames ac ante</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="sn-img">
                                        <img src="img/news-350x223-3.jpg" />
                                        <div class="sn-title">
                                            <a href="">Interdum et fames ac ante</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="sn-img">
                                        <img src="img/news-350x223-4.jpg" />
                                        <div class="sn-title">
                                            <a href="">Interdum et fames ac ante</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>

                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar-widget">
                                <h2 class="sw-title">Tin Liên Quan</h2>
                                <div class="news-list">

                                <?php
                                    require_once "classTin.php";
                                    $t= new tin;
                                    $kq= $t->TinMoiCungLoai();
                                    while ($row=mysqli_fetch_assoc($kq) ){
                                ?>
                                    <div class="nl-item">
                                        <div class="nl-img">
                                            <img src="<?php echo $row['urlHinh']; ?>" />
                                        </div>
                                        <div class="nl-title">
                                            <a href="tinchitiet.php?idTin=<?php echo $row['idTin']; ?>"><?php $row['TieuDe']; ?></a>
                                            <?php echo $row['TieuDe']; ?>
                                        </div>
                                    </div>
                                    <?php } ?>

                                    <!-- <div class="nl-item">
                                        <div class="nl-img">
                                            <img src="img/news-350x223-2.jpg" />
                                        </div>
                                        <div class="nl-title">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                        </div>
                                    </div>
                                    <div class="nl-item">
                                        <div class="nl-img">
                                            <img src="img/news-350x223-3.jpg" />
                                        </div>
                                        <div class="nl-title">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                        </div>
                                    </div>
                                    <div class="nl-item">
                                        <div class="nl-img">
                                            <img src="img/news-350x223-4.jpg" />
                                        </div>
                                        <div class="nl-title">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                        </div>
                                    </div>
                                    <div class="nl-item">
                                        <div class="nl-img">
                                            <img src="img/news-350x223-5.jpg" />
                                        </div>
                                        <div class="nl-title">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            
                            <div class="sidebar-widget">
                                <div class="image">
                                    <a href="https://htmlcodex.com"><img src="img/ads-2.jpg" alt="Image"></a>
                                </div>
                            </div>
                            
                            <div class="sidebar-widget">
                                <div class="tab-news">

                                    <ul class="nav nav-pills nav-justified">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="pill" href="#noibat">Nổi Bật</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#xemnhieu">Xem Nhiều</a>
                                        </li>

                                        <!-- <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#latest">Latest News</a>
                                        </li> -->
                                    </ul>

                                    <div class="tab-content">
                                        <div id="noibat" class="container tab-pane active">

                                            <?php echo noibat($conn); ?>
                                        </div>
                                        <div id="xemnhieu" class="container tab-pane fade">

                                            <?php echo xemnhieu($conn);?>
                                            
                                        </div>
                                    </div>
                                    <!-- <ul class="nav nav-pills nav-justified">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="pill" href="#featured">Featured</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#popular">Popular</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#latest">Latest</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div id="featured" class="container tab-pane active">
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="img/news-350x223-1.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="img/news-350x223-2.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="img/news-350x223-3.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="img/news-350x223-4.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="img/news-350x223-5.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="popular" class="container tab-pane fade">
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="img/news-350x223-4.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="img/news-350x223-3.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="img/news-350x223-2.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="img/news-350x223-1.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="img/news-350x223-2.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="latest" class="container tab-pane fade">
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="img/news-350x223-3.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="img/news-350x223-4.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="img/news-350x223-5.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="img/news-350x223-4.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="img/news-350x223-3.jpg" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            
                            <div class="sidebar-widget">
                                <div class="image">
                                    <a href="https://htmlcodex.com"><img src="img/ads-2.jpg" alt="Image"></a>
                                </div>
                            </div>

                            <!-- <div class="sidebar-widget">
                                <h2 class="sw-title">News Category</h2>
                                <div class="category">
                                    <ul>
                                        <li><a href="">National</a><span>(98)</span></li>
                                        <li><a href="">International</a><span>(87)</span></li>
                                        <li><a href="">Economics</a><span>(76)</span></li>
                                        <li><a href="">Politics</a><span>(65)</span></li>
                                        <li><a href="">Lifestyle</a><span>(54)</span></li>
                                        <li><a href="">Technology</a><span>(43)</span></li>
                                        <li><a href="">Trades</a><span>(32)</span></li>
                                    </ul>
                                </div>
                            </div> -->

                            <!-- <div class="sidebar-widget">
                                <div class="image">
                                    <a href="https://htmlcodex.com"><img src="img/ads-2.jpg" alt="Image"></a>
                                </div>
                            </div> -->
                            
                            <!-- <div class="sidebar-widget">
                                <h2 class="sw-title">Tags Cloud</h2>
                                <div class="tags">
                                    <a href="">National</a>
                                    <a href="">International</a>
                                    <a href="">Economics</a>
                                    <a href="">Politics</a>
                                    <a href="">Lifestyle</a>
                                    <a href="">Technology</a>
                                    <a href="">Trades</a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single News End-->        
        
<?php include "footer.php"; ?>