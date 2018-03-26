<?php
$doan = $c_doan->chitietdoan();
$chitietdoan = $doan['chitietdoan'];
$comment = $doan['comment'];
$relatednews = $doan['relatednews'];

if(isset($_POST['binhluan'])){
    if(isset($_SESSION['mssv'])){
        $mssv = $_SESSION['mssv'];
        $id_doan = $_POST['id_doan'];
        $noidung = $_POST['noidung'];
        $kq = $c_doan->ThemBinhLuan($mssv, $id_doan, $noidung);
    }else{
        $_SESSION['chua_dang_nhap'] = "Vui lòng đăng nhập để có thể bình luận!";
    }
}
?>

<div class="row">
    <div class="col-lg-9">
        <h1 style="color: blue; text-align: center;"><b><?=$chitietdoan['TenL']?></b></h1>
        <h2 style="text-align: center;">Bộ Môn: <?=$chitietdoan['TenBM']?></h2>
        <hr> 
        <h3><b>Đề tài: </b><?=$chitietdoan['TênDA']?></h3>
        <p class="lead"><b>Công nghệ: </b><i><?=$chitietdoan['CongNghe']?></i></p>
        <p class="lead" style="text-align: center;"><?=$chitietdoan['TomTat']?></p>
        <p><?=$chitietdoan['NoiDung']?></p>
        <div class="space20" style="padding-top: 70px;"></div>
        <a class="btn btn-primary" href="public/upload/files/<?=$chitietdoan['FileBC']?>">file.pdf<span class="glyphicon glyphicon-download-alt"  style="margin-left: 5px"></span></a>
        <hr>

        <?php
            if(isset($_SESSION['chua_dang_nhap'])){
                echo "<div class='alert alert-danger'>$_SESSION[chua_dang_nhap]</div>";
            }
        ?>
        <!-- Comments Form -->
        <div class="well">
            <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
            <form role="form" method="post" action="#">
                <input type="hidden" name="id_doan" value="<?=$chitietdoan['idDA']?>">
                <div class="form-group">
                    <textarea class="form-control" rows="3" name="noidung"></textarea>
                </div>
                <button type="submit" name="binhluan" class="btn btn-primary">Gửi</button>
            </form>
        </div>
        <hr>
        <!-- Comment -->
        <?php 
            foreach ($comment as $cmt) {
                ?>
                <div class="media">
                <a class="pull-left glyphicon glyphicon-comment" style="width:40px; padding-left: 15px;" href="#">
                </a>
                <div class="media-body"><h4 class="media-heading"><?=$cmt['name']?><small> <?=$cmt['creater_at']?></small></h4><?=$cmt['NoiDung']?></div>
                </div>
                <?php
            }
        ?>
    </div>
    <div class="space20" style="padding-top: 50px;"></div>
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading" style="text-align: center;color: blue;"><b>Liên Quan</b></div>
            <div class="panel-body">
                <!-- item -->
                <?php
                    foreach ($relatednews as $rel) {
                    ?>
                    <div class="row" style="padding-top:10px">
                        <div class="col-md-1 glyphicon glyphicon-hand-right" style="padding-top:7px">
                        </div>
                        <div class="col-md-10">
                            <a href="chitietdoan.php?loai_doan=<?=$rel['TenLKD']?>&loai_bomon=<?=$rel['TenBMKD']?>&id_doan=<?=$rel['idDA']?>"><b><?=$rel['TênDA']?></b></a>
                        </div>
                        <div class="break"></div>
                    </div>
                    <?php
                    }
                ?>
                <!-- end item -->
            </div>
        </div>
    </div>
</div>