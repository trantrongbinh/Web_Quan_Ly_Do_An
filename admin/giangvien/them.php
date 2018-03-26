<?php
include('../model/database.class.php');
include('../model/class.giangvien.php');
include('../model/class.bomon.php');

$gv = new giangvien();
$gv_list = $gv->layGV();
$bm = new bomon();
$list_bm = $bm->layBoMon();
//xu ly them
if(isset($_POST['them'])){
    if($_POST['magv'] =="" || $_POST['tengv'] =="" || $_POST['email'] =="" || $_POST['password'] =="" || $_POST['bomon'] ==""){
        echo '<div class="alert alert-danger">Hãy điền đầy đủ thông tin!!!</div>';
    }else{
        $gvmoi = new giangvien();
        $gvmoi->setMagv($_POST['magv']);
        $gvmoi->setTengv($_POST['tengv']);
        $gvmoi->setEmail($_POST['email']);
        $gvmoi->setPassword($_POST['password']);
        $gvmoi->setIdbm($_POST['bomon']);
        $kq = $gvmoi->themGV();
        if ($kq){
            echo '<div class="alert alert-success"> Thêm thành công</div>';
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
                <h1 class="page-header">Giảng Viên
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-8" style="padding-bottom:120px">
                <form action="" method="POST" name="form_them">
                    <div class="form-group">
                        <label>Mã GV</label>
                        <input class="form-control" name="magv" placeholder="Please Enter MaGV" />
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="tengv" placeholder="Please Enter Name" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Please Enter Email" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" name="password" placeholder="Please Enter Password" />
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