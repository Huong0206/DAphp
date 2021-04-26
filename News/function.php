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

function get_tintrongloai($conn,$id,$filter){
    $str_tinmoi = "select * from tin where $filter=$id and AnHien=1 and lang='vi' order by idTin desc limit 0,4";
    $result_tinmoi = mysqli_query($conn,$str_tinmoi);
    while ($row_tinmoi = mysqli_fetch_assoc($result_tinmoi)){?>
        <div class="col-md-6">
            <div class="cn-img">
                <img src="img/news-450x350-2.jpg" />
                <div class="cn-title">
                    <a href="tinchitiet.php?idTin=<?php echo $row_tinmoi['idTin']; ?>"><?php echo $row_tinmoi['TieuDe']; ?></a>
                </div>
            </div>
        </div>
    <?php }
}

function noibat($conn){
    $str = "select * from tin where AnHien=1 and lang='vi' and TinNoiBat=1 order by idTin desc limit 0,3";
    $result = mysqli_query($conn,$str);
    while ($row = mysqli_fetch_assoc($result)){
        ?>
        <div class="tn-news">
            <div class="tn-img">
                <img src="img/news-350x223-1.jpg" />
                </div>
            <div class="tn-title">
                <a href="tinchitiet.php?idTin=<?php echo $row['idTin']; ?>"><?php echo $row['TieuDe'];?></a>
            </div>
        </div>
        <?php
    }
}


function xemnhieu($conn){
    $str = "select * from tin where AnHien=1 and lang='vi' and TinNoiBat=1 order by SoLanXem desc limit 0,3";
    $result = mysqli_query($conn,$str);
    while ($row = mysqli_fetch_assoc($result)){
        ?>
        <div class="tn-news">
            <div class="tn-img">
                <img src="img/news-825x525.jpg" />
                </div>
            <div class="tn-title">
                <a href="tinchitiet.php?idTin=<?php echo $row['idTin']; ?>"><?php echo $row['TieuDe'];?></a>
            </div>
        </div>
        <?php
    }
}

function readmore($conn){
    $str = "select * from tin where AnHien=1 and lang='vi' and TinNoiBat=1 order by SoLanXem desc limit 4,9";
    $result = mysqli_query($conn,$str);
    while ($row = mysqli_fetch_assoc($result)){
        ?>
        <li><a href="tinchitiet.php?idTin=<?php echo $row['idTin']; ?>"><?php echo $row['TieuDe'];?></a></li>
        <?php
    }
}


