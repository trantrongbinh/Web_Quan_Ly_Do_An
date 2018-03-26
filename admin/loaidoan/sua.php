<?php
include('../model/database.class.php');
include('../model/class.loaidoan.php');
include('../model/chuyentenkd.php');

$loai= new loai();
if (! isset($_GET['id_loai']) || $loai->checkLoai($_GET['id_loai']) == false ) {
    echo '<div class="alert alert-danger">Loại không tồn tại!!!</div>';
    exit();
}
$lm = new loai();
$loai  = $lm->layMotLoai($_GET['id_loai']);
if( isset($_POST['sua']) ) {
    if ( $_POST['tenloai'] ==""){
        echo '<div class="alert alert-danger alert-dismissable">Hãy kiểm tra thông tin!!!</div>';
    }
    else{
        $lmoi = new loai();
        $TenLKD = changeTitle($_POST['tenloai']);
        $lmoi->setTenl($_POST['tenloai']);
        $lmoi->setTenlkd($TenLKD);
        $kq = $lmoi->suaLoai($_GET['id_loai']);
        if ($kq){
            $_SESSION['sual']= 'done';
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
                <h1 class="page-header">Loại Đồ Án
                    <small><?=$loai['TenL']?></small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Tên Loại Đồ Án</label>
                        <input class="form-control" name="tenloai" value="<?php echo $loai['TenL']?>" />
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