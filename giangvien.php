<?php
session_start();
include('controller/c_doan.php');
$c_doan = new C_doan();
$noi_dung = $c_doan->index();
$chitietgv = $c_doan->GiangVienQuanLy();
$gvquanly = $chitietgv['gvquanly'];
$menu = $noi_dung['menu'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Hệ thống quản lý đồ án sinh viên</title>
    <!-- Bootstrap Core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="public/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="public/admin/font-awesome/css/font-awesome.min.css">
</head>

<body>
    <!--logo-->
    <div class="row" id="home1">
        <div class="col-md-8">
            <div class="logo"><img class="img-responsive" src="public/image/logo.png" alt="" /></div>
        </div>
        <div class="col-md-4">
                <?php
                if(isset(($_SESSION['user_name']))){
                ?>
                    <a href="dangxuat.php" class="btn btn-success pull-right" role="button"  style="padding: 0 28px 0 28px;">Đăng xuất</a>
                    <a role="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#popUpWindow" style="padding: 0 28px 0 28px; margin-right: 5px; ">Thông tin</a>
                     <?php require "thongtincanhan.php";?>
                    <div class="pull-right" style="margin-top:20px;">
                        <?php
                            if ($_SESSION['per'] == 'sv' ) {
                                ?>
                                <div class="pull-right">
                                <b>Xin chào: </b><a href="sinhvien.php?ms_sv=<?=$_SESSION['mssv']?>"><span class ="glyphicon glyphicon-user" style="color: #3CFF0D; padding:0 10px 0 0"></span><code><?=$_SESSION['user_name']?></code></a>
                                <br>
                                <p class="text-center"><i>( Have a nice day ! )</i></p>    
                                </div>
                                <?php
                            }
                        if ($_SESSION['per'] == 'gv' ) {
                            ?>
                            <div class="pull-right">
                                <b>Xin chào: </b><a href="giangvien.php?ma_gv=<?=$_SESSION['magv']?>"><span class ="glyphicon glyphicon-user" style="color: #3CFF0D; padding:0 10px 0 0"></span><code><?=$_SESSION['user_name']?></code></a>
                                <br>
                                <p class="text-center"><i>( Have a nice day ! )</i></p>
                                </div>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                }else{
                ?>
                    <a href="dangnhap.php" class="btn btn-success pull-right" role="button" style="padding: 0 25px 0 25px;">Đăng nhập</a>
                <?php
                }
                ?>
        </div>
    </div>
    <!--end logo-->
    <!-- menu -->
    <div>
        <?php require "menu.php"; ?>
    </div>
    <!--end menu-->
     <div class="space20"></div>
    <!-- Page Content -->
    <div class="container">
        <div class="space20"></div>

        <div class="row main-left">
			<?php			
				if (isset($_SESSION['suada']) && $_SESSION['suada'] == 'done'){
					echo '<div class="alert alert-success"> Cập nhật đề tài thành công!!!</div>';
					$_SESSION['suada'] = "";
				}
			?>
            <div class="col-md-12">
                <div class="panel panel-default">            
                    <div class="panel-heading" style="background-color:#8D8D8D; color:white;">
                        <h2 style="margin-top:0px; margin-bottom:0px; text-align: center;">Quản lý đồ án</h2>
                        <p style="text-align:center; margin-top: 15px;"><a href="gvthemda.php?ma_gv=<?=$_SESSION['magv']?>" class="button_them">Thêm đề tài</a></p>
                    </div>
					<div class="bang"  style="text-align: center;">
                    <table  border="1">
  					<thead>
    					<tr>
    					<th>Mã đồ án</th>
    					<th>MSSV</th>
    					<th>Họ Tên SV</th>
      					<th>Tên đồ án</th>
      					<th>Công Nghệ</th>
      					<th>Loại đồ án</th>
      					<th>Bộ Môn</th>
      					<th>Trạng Thái</th>
                        <th>Điểm</th>
                        <th>Tùy Chọn</th>
    					</tr>
  					</thead>
  					<tbody>
                    <?php
                    foreach ($gvquanly as $gvql) {
                        ?>
                        <tr>
                        <th scope="row"><?=$gvql['idDA']?></th>
                        <td><?=$gvql['mssv']?></td>
                        <td><?=$gvql['namesv']?></td>  
                        <td><?=$gvql['TênDA']?></td>
                        <td><?=$gvql['CongNghe']?></td>
                        <td><?=$gvql['TenL']?></td>
                        <td><?=$gvql['TenBM']?></td>
                        <td><?=$gvql['TrangThai']?></td>
                        <td><?=$gvql['Diem']?></td>
                        <td><a href="gvsuada.php?id_da=<?=$gvql["idDA"]?>">Sửa</a>|<a href="gvxoada.php?id_da=<?=$gvql["idDA"]?>">Xóa</a></td>
                        </tr>
                        <?php
                        }
                        ?>
  					</tbody>
					</table>
				</div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->
    <div class="space20"></div>
    <!-- Footer -->
        <hr>
        <div id="footer">
            <!-- footer.php -->
            <div class="row" id="home2">
                <div class="col-md-4">
                    <div class="bot1"><img class="img-responsive" src="public/image/logo.png" alt="" /></div>
                </div>
                <div class="space20"></div>
                <div class="col-md-4">
                    <div class="bot2">
                        <p>&copy; <span><b>Copyright 2017 <mark>BK-TTB</mark></b></span></p>
                        <p>&reg; <i>welcome to the website</i></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bot3">
                        <p><b>Đại Học Bách Khoa Hà Nội</b></p>
                        <p><a style="color: #686E7A; font: 11px arial; padding: 0 4px; text-decoration: none;">Địa chỉ: </a><span>Số 01, Đại Cồ Việt, Hai Bà Trưng, Hà Nội</span></p>
                    </div>
                </div>
                <div class="space20"></div>
            </div>
        </div>
        <!-- end Footer -->
    <!-- jQuery -->
    <script src="public/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/my.js"></script>

</body>

</html>
