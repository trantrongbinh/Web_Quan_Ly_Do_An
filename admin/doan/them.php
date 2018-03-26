<?php
include('../model/database.class.php');
include('../model/class.sinhvien.php');
include('../model/class.giangvien.php');
include('../model/class.loaidoan.php');
include('../model/class.bomon.php');
include('../model/class.doan.php');

$sv = new sinhvien();
$sv_list = $sv->laySV();
$gv = new giangvien();
$gv_list = $gv->layGV();
$l = new loai();
$list_l = $l->layLoai();
$bm = new bomon();
$list_bm = $bm->layBoMon();
//xu ly them
if(isset($_POST['them'])){
    if($_POST['tendoan'] =="" || $_POST['congnghe'] =="" || $_POST['loai'] =="" || $_POST['bomon'] =="" || $_POST['sinhvien'] =="" || $_POST['giangvien'] =="" || $_POST['trangthai'] ==""){
        echo '<div class="alert alert-danger">Hãy điền đầy đủ thông tin!!!</div>';
    }else{
        $damoi = new doan();
        $damoi->setTenda($_POST['tendoan']);
        $damoi->setCongnghe($_POST['congnghe']);
        $damoi->setMssv($_POST['sinhvien']);
        $damoi->setMagv($_POST['giangvien']);
        $damoi->setIdl($_POST['loai']);
        $damoi->setIdbm($_POST['bomon']);
        $damoi->setTrangThai($_POST['trangthai']);
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

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Đồ án
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-8" style="padding-bottom:120px">
                <form action="" method="POST" name="form_them">
                    <div class="form-group">
                        <label>Tên Đồ án</label>
                        <input class="form-control" name="tendoan" placeholder="Please Enter Project Name" />
                    </div>
                    <div class="form-group">
                        <label>Công Nghệ</label>
                        <input class="form-control" name="congnghe" placeholder="Please Enter Technology" />
                    </div>
                    <div class="form-group">
                        <label>Loại</label>
                        <select class="form-control" name="loai">
                            <option value="0">---Select---</option>
                            <?php
                                foreach ($list_l as $item_l){
                                    echo '<option value='.$item_l["idL"].'>'.$item_l["TenL"].'</option>';
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
                                    echo '<option value='.$item_bm["idBM"].'>'.$item_bm["TenBM"].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Sinh viên thực hiện</label>
                        <select class="form-control" name="sinhvien">
                            <option value="0">---Select---</option>
                            <?php
                                foreach ($sv_list as $item){
                                    echo '<option value='.$item["mssv"].'>'.$item["name"].' - '.$item["mssv"].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Giảng viên phụ trách</label>
                        <select class="form-control" name="giangvien">
                            <option value="0">---Select---</option>
                            <?php
                                foreach ($gv_list as $item){
                                    echo '<option value='.$item["magv"].'>'.$item["name"].' - '.$item["magv"].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Trạng thái</label>
                        <select class="form-control" name="trangthai">
                            <option value="0">---Select---</option>
                            <option value="chờ phê duyệt" <?php if (isset($da['TrangThai']) && $da['TrangThai'] == 'chờ phê duyệt') echo 'selected';?>>chờ phê duyệt</option>
                            <option value="chấp nhận" <?php if (isset($da['TrangThai']) && $da['TrangThai'] == 'chấp nhận') echo 'selected';?>>chập nhận</option>
                            <option value="hoàn thành" <?php if (isset($da['TrangThai']) && $da['TrangThai'] == 'hoàn thành') echo 'selected';?>>hoàn thành</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Điểm</label>
                        <input class="form-control" name="diem" placeholder="Please Enter Scores" />
                    </div>
                    <!-- <div class="form-group">
                        <label>Category Description</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div> -->
                    <button type="submit" class="btn btn-default" name="them">Thêm</button>
                    <button type="reset" class="btn btn-default">Exit</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->