<?php
$alltintuc = $c_doan->danhsachtintuc();
$danhsachtin = $alltintuc['danhmuctintuc'];
$thanhphantrang = $alltintuc['thanhphantrang'];
?>

<div class="space20"></div>
<div class="row">
    <!-- Blog Post Content Column -->
    <div class="col-md-9 ">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color:#337AB7; color:white; text-align: center;">
                <h3><b>BK-TTB NEWS</b></h3>
            </div>
            <?php
                foreach ($danhsachtin as $ds) {
                    ?>
                    <div class="row-item row">
                    <div class="col-md-3">
                    <a href="chitietthongbao.php?id_tintuc=<?=$ds['idTT']?>">
                        <br>
                        <img width="200px" height="200px" class="img-responsive" src="public/upload/images/<?=$ds['urlHinh']?>" alt="">
                    </a>
                    </div>

                    <div class="col-md-9">
                        <h3><?=$ds['TieuDe']?></h3>
                        <p><span class="glyphicon glyphicon-time"></span> Post on: <?=$ds['Ngay']?></p>
                        <a class="btn btn-primary" href="index.php?id_tintuc=<?=$ds['idTT']?>&p=chitietthongbao">Đọc thêm <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                    <div class="break"></div>
                    </div>
                    <?php
                }
            ?>
            <div style = "text-align: center;"><?=$thanhphantrang?></div>

        </div>
    </div> 

    <div class="col-md-3">
        <div class="panel panel-default">            
            <div class="panel-heading" style="background-color:#337ab7; color:white;" >
                <h3 style="margin-top:0px; margin-bottom:0px;"><span class="glyphicon glyphicon-align-left"></span> Thông tin liên hệ</h3>
            </div>
            <div class="panel-body">
                    <div class="break"></div>
                    <h4><span class= "glyphicon glyphicon-home "></span> Địa chỉ : </h4>
                    <p>Phòng 509 - K9 - Đại học BKHN </p>
                    <h4><span class="glyphicon glyphicon-envelope"></span> Email : </h4>
                    <p>bkttb@gmail.com</p>
                    <h4><span class="glyphicon glyphicon-phone-alt"></span> Điện thoại : </h4>
                    <p>0123456789</p>
                    <div class="break"></div>
                    <div class="space20"></div>
                    <div id="contact" style="text-align: center;">
                        <a class="btn btn-default btn-lg facebook-btn" href="https://www.facebook.com" role="button" target="_blank"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                        <a class="btn btn-default btn-lg twitter-btn" style="padding-right: 20px;" href="https://twitter.com/lveent" role="button" target="_blank"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                    </div>
                    <div class="space20"></div>
                    <div>
                        <div class="break"></div>
                        <h4><span class= "glyphicon glyphicon-signal"></span> Liên kết ngoài: </h4>
                        <h4 class="page1"><a href="https://soict.hust.edu.vn/"><i>Viện Công Nghệ Thông Tin</i></a></h4>
                        <h4 class="page1"><a href="https://ctt-daotao.hust.edu.vn/"><i>Đào tạo đại học</i></a></h4>
                        <h4 class="page1"><a href="https://ctt-daotao.hust.edu.vn/"><i>Công tác sinh viên</i></a></h4>
                    </div>
                </div>
        </div>  
    </div>
</div>