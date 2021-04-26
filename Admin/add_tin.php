<?php include "header.php"; ?>
<?php include "function.php"; ?>
		
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
                <div class="col-md-12 offset-3">
                                      
                    <form action="xuli_addtin.php" method="GET">
                    <div class="form-group">
                        <label for="text">Tiêu Đề</label>
                        <input type="text" class="form-control" name="TieuDe">
                    </div>
                    <div class="form-group">
                        <label for="text">Nội Dung</label>
                        <textarea class="form-control" name="Content" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="text">Hình Ảnh (URL)</label>
                        <input type="url" class="form-control" name="urlHinh">
                    </div>
                    <div class="form-group">
                        <label for="text">ID Tin</label>
                        <input type="text" class="form-control" name="idTin">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="text">Thể Loại</label>
                        <select class="form-control" name="idTL" id="TheLoai" >
                        <?php 
                            $str = "select * from theloai where AnHien=1 and lang='vi'";
                            $result = mysqli_query($conn,$str);
                            while($row = mysqli_fetch_assoc($result)){?>
                                <option value="<?php echo $row['idTL']; ?>"><?php echo $row['TenTL'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
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
                    <div class="form-group col-md-3">
                        <label for="text">Nổi Bật</label>
                        <select class="form-control" name="TinNoiBat" id="">
                            <option value="1">Có</option>
                            <option value="0">Không</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="text">Chế Độ</label>
                        <select class="form-control" name="AnHien" id="">
                            <option value="1">Hiện</option>
                            <option value="0">Ẩn</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                    </form>           
                                

                </div>
            </div>
		
			
<?php include "footer.php"; ?>