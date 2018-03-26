<?php
include('../model/database.class.php');
include('../model/class.sinhvien.php');

$sv = new sinhvien();
$sv_list = $sv->laySV();
//xu ly them
if(isset($_POST['them'])){
    if($_POST['mssv'] =="" || $_POST['tensv'] =="" || $_POST['email'] =="" || $_POST['password'] ==""){
        echo '<div class="alert alert-danger">Hãy điền đầy đủ thông tin!!!</div>';
    }else{
        $svmoi = new sinhvien();
        $svmoi->setMssv($_POST['mssv']);
        $svmoi->setTensv($_POST['tensv']);
        $svmoi->setEmail($_POST['email']);
        $svmoi->setPassword($_POST['password']);
        $kq = $svmoi->themSV();
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
                <h1 class="page-header">Sinh Viên
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-8" style="padding-bottom:120px">
                <form action="" method="POST" name="form_them">
                    <div class="form-group">
                        <label>MSSV</label>
                        <input class="form-control" name="mssv" placeholder="Please Enter Masv" />
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="tensv" placeholder="Please Enter Name" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Please Enter Email" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" name="password" placeholder="Please Enter Password" />
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