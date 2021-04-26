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
                <div class="col-md-12">
                    <?php 
                    $str = "select * from loaitin";
                    $result = mysqli_query($conn,$str);?>

                    
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>Tên loại tin</th>
                                        <th>Thứ tự</th>
                                        <th>Ẩn hiện</th>
                                        <th>Hành động</th>
                                        </tr>
                                    </thead>

                    <?php while ($row = mysqli_fetch_assoc($result)){?>
                        <tr>
                            <td><?php echo $row['Ten']; ?></td>
                            <td><?php echo $row['ThuTu']; ?></td>
                            <td><?php echo $row['AnHien']; ?></td>
                            <td>
                                <a href="edit_loaitin.php?idLT= <?php echo $row['idLT']; ?>">Edit</a> | <a href="delete_loaitin.php?idLT= <?php echo $row['idLT']; ?>">Delete</a>
                            </td>
                        </tr>
                                
                    <?php }
                    ?>
                                </table>
                            </div>
                        </div>
                </div>
            </div>
		
		
			
<?php include "footer.php"; ?>