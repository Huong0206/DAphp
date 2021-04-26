<?php include "header.php"; ?>
<?php include "function.php"; ?>
<?php $idTin = $_GET['idTin']; ?>
		
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

        <!-- Content Row -->
            <div class="row">
                <div class="col-md-6 offset-3">
                    <?php  
                    $str = "select * from tin where idTin = $idTin";
                    $result = mysqli_query($conn,$str);
                    $row = mysqli_fetch_assoc($result);
                    ?>                 
                    <form action="xuli_edittin.php" method="GET">
                    <div class="form-group">
                        <label for="text">Tiêu Đề</label>
                        <input type="text" class="form-control" value="<?php echo $row['TieuDe'] ?>" name="TieuDe">
                    </div>
                    <!-- <div class="form-group">
                        <label for="text">Nội Dung</label>
                        <input type="text" class="form-control" value="<?php echo $row['Content'] ?>" name="Content">
                    </div> -->
                    <!-- <div class="form-group">
                        <label for="text">Thứ tự</label>
                        <input type="text" class="form-control" value="<?php echo $row['ThuTu'] ?>" name="ThuTu">
                    </div> -->
                    
                    

                    <div class="form-group">
                        <label for="text">Chế độ</label>
                        <select class="form-control" name="AnHien" id="AnHien">
                            <option value="1" <?php if($row['AnHien']==1) echo "selected"; ?> >Hiện</option>
                            <option value="0" <?php if($row['AnHien']==0) echo "selected"; ?> >Ẩn</option>
                        </select>
                        <input type="hidden" value="<?php echo $idTin; ?>" name="idTin">
                    </div>

                    <div class="form-group">
                        <label for="text">Thể loại</label>
                        <select class="form-control" name="idTL" id="TheLoai" >
                        
                        <?php 
                            
                            $str = "select * from theloai where AnHien=1 and lang='vi'";
                            $result = mysqli_query($conn,$str);
                            while($row = mysqli_fetch_assoc($result)){?>
                                <option value="<?php echo $row['idTL']; ?>"><?php echo $row['TenTL'];?></option>

                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="text">Loại Tin</label>
                        <select class="form-control" name="idLT" id="LoaiTin" >
                        
                        <?php 
                            
                            $str = "select * from loaitin where AnHien=1 and lang='vi'";
                            $result = mysqli_query($conn,$str);
                            while($row = mysqli_fetch_assoc($result)){?>
                                <option value="<?php echo $row['idLT']; ?>"><?php echo $row['Ten'];?></option>

                            <?php } ?>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                    </form>           
                                

                </div>
            </div>
		
		
			
<?php include "footer.php"; ?>