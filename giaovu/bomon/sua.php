<?php
include('../model/database.class.php');
include('../model/class.bomon.php');
include('../model/chuyentenkd.php');

$bm = new bomon();
if (! isset($_GET['id_bomon']) || $bm->checkBoMon($_GET['id_bomon']) == false ) {
    echo '<div class="alert alert-danger">Bộ môn không tồn tại!!!</div>';
    exit();
}
$bmm = new bomon();
$bomon  = $bmm->layMotBoMon($_GET['id_bomon']);
if( isset($_POST['sua']) ) {
    if ( $_POST['tenbomon'] ==""){
        echo '<div class="alert alert-danger alert-dismissable">Hãy kiểm tra thông tin!!!</div>';
    }
    else{
        $bmmoi = new bomon();
        $TenBMKD = changeTitle($_POST['tenbomon']);
        $bmmoi->setTenbm($_POST['tenbomon']);
        $bmmoi->setTenbmkd($TenBMKD);
        $kq = $bmmoi->suaBoMon($_GET['id_bomon']);
        if ($kq){
            $_SESSION['suabm']= 'done';
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
                <h1 class="page-header">Bộ Môn
                    <small><?=$bomon['TenBM']?></small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Tên Bộ Môn</label>
                        <input class="form-control" name="tenbomon" value="<?php echo $bomon['TenBM']?>" />
                    </div>
                    <button type="submit" class="btn btn-default" name="sua">Edit</button>
                    <button type="reset" class="btn btn-default">Exit</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->