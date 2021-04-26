<?php include "header.php"; ?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
		
			
<?php include "footer.php"; ?>

<?php
                        require_once "classTin.php";
                        $t = new tin;
                        $rs = $t->ChiTietTin(1);
                        $kq = mysqli_fetch_assoc($rs);
                        echo "<p> Trang chủ > ",$kq['TenTL'], " > " , $kq['Ten'],"</p>";
                    ?>


<?php 
    $s = new tin;
    $showtin = $s->showtin();
    $row_showtin = mysqli_fetch_assoc($showtin);
    $idLT = $row_showtin['idLT'];
?>