<?php
include('../model/database.class.php');
include('../model/chuyentenkd.php');
include('../model/class.tintuc.php');
//xu lý them
if( isset($_POST['them']) ) {
    if ( $_POST['tieude'] =="" || $_POST['tomtat'] =="" || $_POST['noidung'] =="" ||$_POST['noibat'] =="" ){
        echo '<div class="alert alert-danger"> Hãy điền đầy đủ thông tin!!!</div>';
    }
    else {
        $tintucmoi = new tintuc();
        $TieuDeKD = changeTitle($_POST['tieude']);
        $tintucmoi->setTieude($_POST['tieude']);
        $tintucmoi->setTieudekd($TieuDeKD);
        $tintucmoi->setTomtat($_POST['tomtat']);
        $tintucmoi->setNoidung($_POST['noidung']);
        $tintucmoi->setUrlhinh($_POST['tenhinh']);
        $tintucmoi->setNoibat($_POST['noibat']);
        $kq = $tintucmoi->themTinTuc();
        if ($kq){
            echo '<div class="alert alert-success"> Thêm mới thành công</div>';
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
                <h1 class="page-header">Tin tức
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12" style="padding-bottom:120px">
                <br>
                <form action="" method="POST" name="form_them" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input class="form-control" name="tieude" placeholder="Please Enter Title" />
                    </div>
                    <div class="form-group">
                        <label>Tóm tắt</label>
                        <textarea class="form-control" name="tomtat" placeholder="Please Enter Abridge" rows="3"></textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea id="noidung" name="noidung" class="form-control ckeditor" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <input class="form-control" name="tenhinh" placeholder="Nhập tên hình" />
                    </div>
                    <!-- <div>
                        <label>Hình ảnh</label>
                        <label for="hinh"></label>
                        <input type="file" name="hinh" />
                        <input onclick="BrowseServer('Images:/','urlHinh')" type="button" name="btnChonFile" id="btnChonFile" value="Chọn File" /> 
                    </div> -->
                    <div class="form-group">
                        <label>Nổi bật:</label>
                        <label class="radio-inline">
                            <input name="noibat" value="0" checked="" type="radio">Tin thường
                        </label>
                        <label class="radio-inline">
                            <input name="noibat" value="1" type="radio">Tin nổi bật
                        </label>
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