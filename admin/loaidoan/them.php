<?php
include('../model/database.class.php');
include('../model/chuyentenkd.php');
include('../model/class.loaidoan.php');
?>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Bộ môn
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <?php
                    //xu lý them
                    if( isset($_POST['them']) ) {
                    if ( $_POST['tenl'] =="" ){
                        echo '<div class="alert alert-danger"> Hãy điền đầy đủ thông tin!!!</div>';
                    }
                    else {
                        $loaimoi = new loai();
                        $TenLKD = changeTitle($_POST['tenl']);
                        $loaimoi->setTenl($_POST['tenl']);
                        $loaimoi->setTenlkd($TenLKD);
                        $kq = $loaimoi->themLoai();
                        if ($kq){
                            echo '<div class="alert alert-success"> Thêm mới thành công</div>';
                        }
                        else{
                            echo '<div class="alert alert-error"> Có lỗi xảy ra, hãy kiểm tra lại dữ liệu!!!</div>';
                        }
                    }
                    }
                ?>
                <br>
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="tenl" placeholder="Nhập tên loại" />
                    </div>
                    <button type="submit" class="btn btn-default" name="them">Thêm</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->