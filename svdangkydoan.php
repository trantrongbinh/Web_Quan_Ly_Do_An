<?php
session_start();
include('controller/c_doan.php');
include('model/class.giangvien.php');
include('model/class.loaidoan.php');
include('model/class.bomon.php');
include('model/class.doan.php');

$c_doan = new C_doan();
$noi_dung = $c_doan->index();
$chitietcanhan = $c_doan->CaNhan();
$thongtincanhan = $chitietcanhan['canhan'];
$slide = $noi_dung['slide'];
$menu = $noi_dung['menu'];

$gv = new giangvien();
$gv_list = $gv->layGV();
$l = new loai();
$list_l = $l->layLoai();
$bm = new bomon();
$list_bm = $bm->layBoMon();
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

            <div class="col-md-12">
                <div class="panel panel-default">            
                    <div class="panel-heading" style="background-color:#8D8D8D; color:white; padding-bottom: 0px;" >
                        <h2 style="margin-top:0px; margin-bottom:0px; text-align: center;">Đăng Ký</h2>
                        <p style="text-align:center; margin-top: 15px;"><a href="sinhvien.php?ms_sv=<?=$_SESSION['mssv']?>" class="button_them">Trở về</a></p>
                    </div>
                    <div class="panel-body">
                        
                        <div class="them">
                        <form method="post" name="form_them">
                            <div class="them_ten_dt">
                                <label  class="col-md-4" for="ten_dt">Tên đồ án</label>
                                <input  class="col-md-8" type="text" id="tendt" name="ten_dt">
                            </div>
                            <div  style="padding-top: 40px;"></div>
                            <div class="congnghe">
                                <label  class="col-md-4" for="ten_cn">Công nghệ</label>
                                <input  class="col-md-8" type="text" id="congnghe" name="cong_nghe">
                            </div>
                            <div  style="padding-top: 40px;"></div>
                            <div class="chon_loai">
                                <label  class="col-md-4" for="loai">Loại</label>
                                <select  class="col-md-8" id="loai" name="loai">
                                <option value="">---Select---</option>
                                <?php
                                    foreach ($list_l as $item_l){
                                        echo '<option value='.$item_l["idL"].'>'.$item_l["TenL"].'</option>';
                                    }
                                ?>
                                </select>
                            </div>
                            <div  style="padding-top: 40px;"></div>
                            <div class="chon_bomon">
                                <label  class="col-md-4" for="bomon">Bộ môn</label>
                                <select  class="col-md-8" id="bomon" name="bomon">
                                <option value="">---Select---</option>
                                <?php
                                    foreach ($list_bm as $item_bm){
                                        echo '<option value='.$item_bm["idBM"].'>'.$item_bm["TenBM"].'</option>';
                                    }
                                ?>
                                </select>
                            </div>
                            <div  style="padding-top: 40px;"></div>
                            <div class="dk_gv">
                                <label  class="col-md-4" for="magv">Giảng viên</label>
                                <select  class="col-md-8" id="magv" name="gv">
                                    <option value="">---Select---</option>
                                    <?php
                                        foreach ($gv_list as $item){
                                            echo '<option value='.$item["magv"].'>'.$item["name"].' - '.$item["magv"].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div  style="padding-top: 40px;"></div>
                            <div class="sends" style="text-align: center;">
                                <input type="submit" value="Gửi đăng ký" name="sm_themdt">
                            </div>

                        </form>
                    </div>


                    </div>
                </div>
                <?php
                //xu ly them
                    if(isset($_POST['sm_themdt'])){
                        if($_POST['ten_dt'] =="" || $_POST['cong_nghe'] =="" || $_POST['gv'] =="" || $_POST['loai'] =="" || $_POST['bomon'] ==""){
                            echo '<div class="alert alert-danger">Hãy điền đầy đủ thông tin!!!</div>';
                        }else{
                            $damoi = new doan();
                            $damoi->setTenda($_POST['ten_dt']);
                            $damoi->setCongnghe($_POST['cong_nghe']);
                            $damoi->setMssv($_SESSION['mssv']);
                            $damoi->setMagv($_POST['gv']);
                            $damoi->setIdl($_POST['loai']);
                            $damoi->setIdbm($_POST['bomon']);
                            $damoi->setTrangThai("Chờ phê duyệt");
                            $damoi->setDiem('');
                            $kq = $damoi->themDA();
                            if ($kq){
                                echo '<div class="alert alert-success"> Đăng ký đồ án thành công</div>';
                            }else{
                                echo '<div class="alert alert-error"> Có lỗi xảy ra, hãy kiểm tra lại dữ liệu!!!</div>';
                            }
                        }
                    }
                ?>
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
	<script>
    	$(document).ready(function() {
            $("#bomon").change(function(){
					var id = $(this).val();
					$.get("ajaxgv.php",{idBM: id},function(data){
							$("#magv").html(data);
						});
				});
        });
    </script>
</body>

</html>