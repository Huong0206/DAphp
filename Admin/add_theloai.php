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
        
        
        <!-- Content Row -->
            <div class="row">
                <div class="col-md-6 offset-3">
                                      
                    <form action="xuli_addtheloai.php" method="GET">
                    <div class="form-group">
                        <label for="text">Tên thể loại</label>
                        <input type="text" class="form-control" name="TenTL">
                    </div>
                    <div class="form-group">
                        <label for="text">Thứ tự</label>
                        <input type="text" class="form-control" name="ThuTu">
                    </div>
                    <div class="form-group">
                        <label for="text">Chế độ</label>
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