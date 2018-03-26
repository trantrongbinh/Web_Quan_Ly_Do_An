<?php
session_start();
include('controller/c_doan.php');
include('model/class.sinhvien.php');
include('model/class.loaidoan.php');
include('model/class.bomon.php');
include('model/class.doan.php');

$c_doan = new C_doan();
$noi_dung = $c_doan->index();
$menu = $noi_dung['menu'];

$dam = new doan();
if (!isset($_GET['id_da']) || $dam->checkDA($_GET['id_da']) == false ) {
    echo '<div class="alert alert-danger alert-dismissable">Đề tài không tồn tại!!!</div>';
    exit();
}
$da = $dam->layMotDA($_GET['id_da']);
$sv = new sinhvien();
$sv_list = $sv->laySV();
$l = new loai();
$list_l = $l->layLoai();
$bm = new bomon();
$list_bm = $bm->layBoMon();
if(isset($_POST['sm_suada'])){
    if($_POST['ten_dt'] =="" || $_POST['cong_nghe'] =="" || $_POST['sv'] =="" || $_POST['loai'] =="" || $_POST['bomon'] ==""){
    echo '<div class="alert alert-danger">Hãy kiểm tra dữ liệu!!!</div>';
    }else{
        $damoi = new doan();
        $damoi->setTenda($_POST['ten_dt']);
        $damoi->setCongnghe($_POST['cong_nghe']);
        $damoi->setMagv($_SESSION['magv']);
        $damoi->setMssv($_POST['sv']);
        $damoi->setIdl($_POST['loai']);
        $damoi->setIdbm($_POST['bomon']);
        $damoi->setTrangThai($_POST['trangthai']);
        $damoi->setDiem($_POST['diem']);
        $kq = $damoi->suaDA($_GET['id_da']);
        if ($kq){
            $_SESSION['suada'] = 'done';
            header('Location: giangvien.php?ma_gv='.$_SESSION['magv']);
            // header('Location:'.$_SERVER['HTTP_REFERER']);
        }
        else{
            echo '<div class="alert alert-error"> Có lỗi xảy ra, hãy kiểm tra lại dữ liệu!!!</div>';
        }
    }
    }
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
                    <div class="panel-heading" style="background-color:#8D8D8D; color:white;" >
                        <h2 style="margin-top:0px; margin-bottom:0px; text-align: center;">Chỉnh sửa đồ án</h2>
                    </div>
                    <p style="text-align:center; margin-top: 15px;"><a href="giangvien.php?ma_gv=<?=$_SESSION['magv']?>" class="button_them">Trở về</a></p>
                    <div class="panel-body">
                        
                       <div class="sua">
                        <form method="post" name="form_them">
                            <div class="them_ten_dt">
                                <label  class="col-md-4" for="ten_dt">Tên đồ án</label>
                                <input  class="col-md-8" type="text" id="tendt" name="ten_dt" value="<?php echo $da['TênDA']?>">
                            </div>
                            <div  style="padding-top: 40px;"></div>
                            <div class="congnghe">
                                <label  class="col-md-4" for="ten_cn">Công nghệ</label>
                                <input  class="col-md-8" type="text" id="congnghe" name="cong_nghe" value="<?php echo $da['CongNghe']?>">
                            </div>
                            <div  style="padding-top: 40px;"></div>
                            <div class="them_tensv">
                                <label  class="col-md-4" for="mssv">Sinh viên</label>
                                <select  class="col-md-8" id="mssv" name="sv">
                                    <?php
                                        foreach ($sv_list as $item){
                                            echo '<option value="'.$item["mssv"].'"';
                                            if(isset($da['mssv']) && $da['mssv'] == $item['mssv']){
                                                echo 'selected';
                                            }
                                            echo '>'.$item["name"].' - '.$item["mssv"].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div  style="padding-top: 40px;"></div>
                            <div class="chon_loai">
                                <label  class="col-md-4" for="loai">Loại</label>
                                <select  class="col-md-8" id="loai" name="loai">
                                <option value="">---Select---</option>
                                <?php
                                    foreach ($list_l as $item_l){
                                        echo '<option value="'.$item_l["idL"].'"';
                                        if(isset($da['idL']) && $da['idL'] == $item_l['idL']){
                                            echo 'selected';
                                        }
                                        echo '>'.$item_l["TenL"].'</option>';
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
                                        echo '<option value="'.$item_bm["idBM"].'"';
                                        if(isset($da['idBM']) && $da['idBM'] == $item_bm['idBM']){
                                            echo 'selected';
                                        }
                                        echo '>'.$item_bm["TenBM"].'</option>';
                                    }
                                ?>
                                </select>
                            </div>
                            <div  style="padding-top: 40px;"></div>
                            <div class="sua_da_tt">
                                <label class="col-md-4" for="trang_thai">Trạng thái</label>
                                <select class="col-md-8" name="trangthai" id="trangthai">
                                    <option value="chờ phê duyệt" <?php if (isset($da['TrangThai']) && $da['TrangThai'] == 'chờ phê duyệt') echo 'selected';?>>chờ phê duyệt</option>
                                    <option value="chấp nhận" <?php if (isset($da['TrangThai']) && $da['TrangThai'] == 'chấp nhận') echo 'selected';?>>chập nhận</option>
                                    <option value="hoàn thành" <?php if (isset($da['TrangThai']) && $da['TrangThai'] == 'hoàn thành') echo 'selected';?>>hoàn thành</option>
                                </select>
                            </div>
                            <div  style="padding-top: 40px;"></div>
                            <div class="diem">
                                <label class="col-md-4" for="diem">Điểm</label>
                                <input class="col-md-8" type="text" name="diem" id="diem" value="<?php echo $da['Diem']?>">
                            </div>
                            <div  style="padding-top: 40px;"></div>
                            <div class="sends" style="text-align: center;">
                                <input type="submit" value="Cập nhật" name="sm_suada">
                            </div>
                        </form>
                    </div>


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