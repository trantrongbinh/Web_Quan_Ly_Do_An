<?php
include('../model/database.class.php');
include('../model/class.giangvien.php');
include('../model/class.bomon.php');

$gvm = new giangvien();
if (!isset($_GET['ma_gv']) || $gvm->checkGV($_GET['ma_gv']) == false ) {
    echo '<div class="alert alert-gvnger alert-dismissable">Giảng viên không tồn tại!!!</div>';
    exit();
}
$gv = $gvm->layMotGV($_GET['ma_gv']);
$bm = new bomon();
$list_bm = $bm->layBoMon();
if(isset($_POST['sua_gv'])){
    if($_POST['magv'] =="" || $_POST['tengv'] =="" || $_POST['email'] =="" || $_POST['password'] =="" || $_POST['bomon'] ==""){
    echo '<div class="alert alert-gvnger">Hãy kiểm tra dữ liệu!!!</div>';
    }else{
        $gvmoi = new giangvien();
        $gvmoi->setMagv($_POST['magv']);
        $gvmoi->setTengv($_POST['tengv']);
        $gvmoi->setEmail($_POST['email']);
        $gvmoi->setPassword($_POST['password']);
        $gvmoi->setIdbm($_POST['bomon']);
        $kq = $gvmoi->suaGV($_GET['ma_gv']);
        if ($kq){
            $_SESSION['suagv'] = 'done';
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
                <h1 class="page-header">Giảng Viên
                    <small><?=$gv['name']?></small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="" method="POST" name="form_sua">
                    <div class="form-group">
                        <label>MaGV</label>
                        <input class="form-control" name="magv" placeholder="Please Enter MaGV" value="<?php echo $gv['magv']?>" />
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="tengv" placeholder="Please Enter Name" value="<?php echo $gv['name']?>" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Please Enter Email" value="<?php echo $gv['email']?>" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" name="password" placeholder="Please Enter Password" value="<?php echo $gv['password']?>" />
                    </div>
                    <div class="form-group">
                        <label>Bộ môn</label>
                        <select class="form-control" name="bomon">
                            <option value="0">---Select---</option>
                            <?php
                                foreach ($list_bm as $item_bm){
                                    echo '<option value="'.$item_bm["idBM"].'"';
                                    if(isset($gv['idBM']) && $gv['idBM'] == $item_bm['idBM']){
                                        echo 'selected';
                                    }
                                    echo '>'.$item_bm["TenBM"].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-default" name="sua_gv">Sửa</button>
                    <button type="reset" class="btn btn-default">Exit</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->