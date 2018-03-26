<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hoàn thiện đồ án</title>
<link href="public/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="public/ckfinder/ckfinder.js"></script>
<script type="text/javascript" src="public/ckeditor/ckeditor.js"></script>
<script>CKEDITOR.replace('chitiet')</script>
</head>
<body>
<div id="page-wrapper">
    <div class="container" style="font-size:18px;">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="background-color: #6F6F6F; text-align: center; color: white; padding-top:10px; padding-bottom: 10px;">Nội dung đồ án
                    <small style="color:#D8D8D8;">Upload</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12" style="padding-bottom:120px">
                <br>
                <form action="" method="POST" name="form_upload">
                    <div class="form-group">
                        <label>Tổng quan</label>
                        <textarea class="form-control" name="tomtat" placeholder="Please Enter Abridge" rows="3"></textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea id="chitiet" name="chitiet" class="form-control ckeditor" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Path File</label>
                        <input class="form-control" name="file" placeholder="Nhập tên file báo cáo" />
                    </div>
                    <div class="form-group">
                        <label>Nổi bật:</label>
                        <label class="radio-inline">
                            <input name="noibat" value="0" checked="" type="radio"><i>Đồ án thường</i>
                        </label>
                        <label class="radio-inline">
                            <input name="noibat" disabled="true " value="1" type="radio"><i>Đồ án nổi bật</i>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default" name="upload">Upload</button>
                    <a class="btn btn-defaul pull-right" style="background-color:#9C0404;color: white; padding: 2px 3px 2px 3px;" href="sinhvien.php?ms_sv=<?=$_SESSION['mssv']?>">Hủy</a>
        			<hr>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
</body>
</html>