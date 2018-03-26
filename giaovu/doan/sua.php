<?php
include('../model/database.class.php');
include('../model/class.sinhvien.php');
include('../model/class.giangvien.php');
include('../model/class.loaidoan.php');
include('../model/class.bomon.php');
include('../model/class.doan.php');

$dam = new doan();
if (!isset($_GET['id_doan']) || $dam->checkDA($_GET['id_doan']) == false ) {
    echo '<div class="alert alert-danger alert-dismissable">Đồ án không tồn tại!!!</div>';
    exit();
}
$da = $dam->layMotDA($_GET['id_doan']);
$sv = new sinhvien();
$sv_list = $sv->laySV();
$gv = new giangvien();
$gv_list = $gv->layGV();
$l = new loai();
$list_l = $l->layLoai();
$bm = new bomon();
$list_bm = $bm->layBoMon();
if(isset($_POST['sua_da'])){
    if($_POST['tendoan'] =="" || $_POST['congnghe'] =="" || $_POST['sinhvien'] =="" || $_POST['giangvien'] =="" || $_POST['loai'] =="" || $_POST['bomon'] =="" || $_POST['trangthai'] ==""){
    echo '<div class="alert alert-danger">Hãy kiểm tra dữ liệu!!!</div>';
    }else{
        $damoi = new doan();
        $damoi->setTenda($_POST['tendoan']);
        $damoi->setCongnghe($_POST['congnghe']);
        $damoi->setMssv($_POST['sinhvien']);
        $damoi->setMagv($_POST['giangvien']);
        $damoi->setIdl($_POST['loai']);
        $damoi->setIdbm($_POST['bomon']);
        $damoi->setTrangThai($_POST['trangthai']);
        $damoi->setDiem($_POST['diem']);
        $kq = $damoi->suaDA($_GET['id_doan']);
        if ($kq){
            $_SESSION['suada'] = 'done';
             echo '<script>window.history.go(-2);</script>';
        }
        else{
            echo '<div class="alert alert-error"> Có lỗi xảy ra, hãy kiểm tra lại dữ liệu!!!</div>';
        }
    }
}

?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Đề tài
                    <small><?=$da['TênDA']?></small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="" method="POST" name="form_sua">
                    <div class="form-group">
                        <label>Tên Đồ án</label>
                        <input class="form-control" name="tendoan" placeholder="Please Enter Project Name" value="<?php echo $da['TênDA']?>" />
                    </div>
                    <div class="form-group">
                        <label>Công Nghệ</label>
                        <input class="form-control" name="congnghe" placeholder="Please Enter Technology" value="<?php echo $da['CongNghe']?>" />
                    </div>
                    <div class="form-group">
                        <label>Loại</label>
                        <select class="form-control" name="loai">
                            <option value="0">---Select---</option>
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
                    <div class="form-group">
                        <label>Bộ môn</label>
                        <select class="form-control" name="bomon">
                            <option value="0">---Select---</option>
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
                    <div class="form-group">
                        <label>Sinh viên thực hiện</label>
                        <select class="form-control" name="sinhvien">
                            <?php
                                foreach ($sv_list as $item_sv){
                                    echo '<option value="'.$item_sv["mssv"].'"';
                                    if(isset($da['mssv']) && $da['mssv'] == $item_sv['mssv']){
                                        echo 'selected';
                                    }
                                    echo '>'.$item_sv["name"].' - '.$item_sv["mssv"].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Giảng viên phụ trách</label>
                        <select class="form-control" name="giangvien">
                            <option value="0">---Select---</option>
                            <?php
                                foreach ($gv_list as $item_gv){
                                    echo '<option value="'.$item_gv["magv"].'"';
                                    if(isset($da['magv']) && $da['magv'] == $item_gv['magv']){
                                        echo 'selected';
                                    }
                                    echo '>'.$item_gv["name"].' - '.$item_gv["magv"].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Trạng thái</label>
                        <select class="form-control" name="trangthai">
                            <option value="chờ phê duyệt" <?php if (isset($da['TrangThai']) && $da['TrangThai'] == 'chờ phê duyệt') echo 'selected';?>>chờ phê duyệt</option>
                            <option value="chấp nhận" <?php if (isset($da['TrangThai']) && $da['TrangThai'] == 'chấp nhận') echo 'selected';?>>chập nhận</option>
                            <option value="hoàn thành" <?php if (isset($da['TrangThai']) && $da['TrangThai'] == 'hoàn thành') echo 'selected';?>>hoàn thành</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Điểm</label>
                        <input class="form-control" name="diem" placeholder="Please Enter Scores" value="<?php echo $da['Diem']?>" />
                    </div>
                    <!-- <div class="form-group">
                        <label>Category Description</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div> -->
                    <button type="submit" class="btn btn-default" name="sua_da">Sửa</button>
                    <button type="reset" class="btn btn-default">Exit</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->