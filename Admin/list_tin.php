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
        
        <div class="row">
                <div class="col-md-12">
                    <?php 
                    $str = "select * from tin";
                    $result = mysqli_query($conn,$str);?>

                    
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>ID Tin</th>
                                        <th>Ngày</th>
                                        <th>Tiêu Đề</th>
                                        <th>Thể Loại</th>
                                        <th>Loại Tin</th>
                                        <th>Lượt Xem</th>
                                        <th>Ẩn Hiện</th>
                                        <th>Hành Động</th>
                                        </tr>
                                    </thead>

                    <?php while ($row = mysqli_fetch_assoc($result)){?>
                        <tr>
                            <td><?php echo $row['idTin']; ?></td>
                            <td><?php echo $row['Ngay']; ?></td>
                            <td><?php echo $row['TieuDe']; ?></td>
                            <td><?php 
                                $idTL = $row['idTL'];
                                get_theloai($idTL,$conn);
                            ?></td>
                            <td><?php 
                                $idLT = $row['idLT'];
                                get_loaitin($idLT,$conn);
                            ?></td>
                            
                            <td><?php echo $row['SoLanXem']; ?></td>
                            <td><?php echo $row['AnHien']; ?></td>
                            <td>
                                <a href="edit_tin.php?idTin= <?php echo $row['idTin']; ?>">Edit</a> | <a href="delete_tin.php?idTin= <?php echo $row['idTin']; ?>">Delete</a>
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