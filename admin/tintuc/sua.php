<?php
include('../model/database.class.php');
include('../model/class.tintuc.php');
include('../model/chuyentenkd.php');

$tt = new tintuc();
if (! isset($_GET['id_tintuc']) || $tt->checkTinTuc($_GET['id_tintuc']) == false ) {
    echo '<div class="alert alert-danger">Bộ môn không tồn tại!!!</div>';
    exit();
}
$ttm = new tintuc();
$tintuc  = $ttm->layMotTinTuc($_GET['id_tintuc']);
if( isset($_POST['sua']) ) {
    if ( $_POST['tieude'] =="" || $_POST['tomtat'] =="" || $_POST['noidung'] =="" || $_POST['noibat'] ==""){
        echo '<div class="alert alert-danger alert-dismissable">Hãy kiểm tra thông tin!!!</div>';
    }
    else{
        $ttmoi = new tintuc();
        $TieuDeKD = changeTitle($_POST['tieude']);
        $ttmoi->setTieude($_POST['tieude']);
        $ttmoi->setTieudekd($TieuDeKD);
        $ttmoi->setTomtat($_POST['tomtat']);
        $ttmoi->setNoidung($_POST['noidung']);
        $ttmoi->setUrlhinh($_POST['tenhinh']);
        $ttmoi->setNoibat($_POST['noibat']);
        $kq = $ttmoi->suaTinTuc($_GET['id_tintuc']);
        if ($kq){
            $_SESSION['suatt']= 'done';
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
                <h1 class="page-header">Tin Tức
                    <small><?=$tintuc['TieuDe']?></small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12" style="padding-bottom:120px">
                <form action="" method="POST" name="form_sua" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input class="form-control" name="tieude" value="<?php echo $tintuc['TieuDe']?>" placeholder="Please Enter Title" />
                    </div>
                    <div class="form-group">
                        <label>Tóm tắt</label>
                        <textarea class="form-control" name="tomtat" placeholder="Please Enter Abridge" rows="3"><?php echo $tintuc['TomTat']?></textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea id="noidung" name="noidung" class="form-control ckeditor" rows="5"><?php echo $tintuc['NoiDung']?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <input class="form-control" name="tenhinh" value="<?php echo $tintuc['urlHinh']?>" placeholder="Nhập tên hình" />
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
                    <button type="submit" class="btn btn-default" name="sua">Sửa</button>
                    <button type="reset" class="btn btn-default">Exit</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->