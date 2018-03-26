<?php
include('../model/database.class.php');
include('../model/class.sinhvien.php');

$svm = new sinhvien();
if (!isset($_GET['mssv']) || $svm->checksv($_GET['mssv']) == false ) {
    echo '<div class="alert alert-svnger alert-dismissable">Sinh viên không tồn tại!!!</div>';
    exit();
}
$sv = $svm->layMotSV($_GET['mssv']);
if(isset($_POST['sua_sv'])){
    if($_POST['mssv'] =="" || $_POST['tensv'] =="" || $_POST['email'] =="" || $_POST['password'] ==""){
    echo '<div class="alert alert-svnger">Hãy kiểm tra dữ liệu!!!</div>';
    }else{
        $svmoi = new sinhvien();
        $svmoi->setMssv($_POST['mssv']);
        $svmoi->setTensv($_POST['tensv']);
        $svmoi->setEmail($_POST['email']);
        $svmoi->setPassword($_POST['password']);
        $kq = $svmoi->suaSV($_GET['mssv']);
        if ($kq){
            $_SESSION['suasv'] = 'done';
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
                <h1 class="page-header">Sinh Viên
                    <small><?=$sv['name']?></small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="" method="POST" name="form_sua">
                    <div class="form-group">
                        <label>MSSV</label>
                        <input class="form-control" name="mssv" placeholder="Please Enter MSSV" value="<?php echo $sv['mssv']?>" />
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="tensv" placeholder="Please Enter Name" value="<?php echo $sv['name']?>" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Please Enter Email" value="<?php echo $sv['email']?>" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" name="password" placeholder="Please Enter Password" value="<?php echo $sv['password']?>" />
                    </div>
                    <button type="submit" class="btn btn-default" name="sua_sv">Sửa</button>
                    <button type="reset" class="btn btn-default">Exit</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->