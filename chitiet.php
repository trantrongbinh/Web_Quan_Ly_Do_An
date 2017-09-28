<?php
session_start();
include ('controller/c_doan.php');
$c_doan = new C_doan();
$doan = $c_doan->chitietdoan();
$chitietdoan = $doan['chitietdoan'];
//print_r($chitietdoan);
$comment = $doan['comment'];
$relatednews = $doan['relatednews'];
$doannoibat = $doan['doannoibat'];
//print_r($doannoibat);

if(isset($_POST['binhluan'])){
    if(isset($_SESSION['mssv'])){
        $mssv = $_SESSION['mssv'];
        $id_doan = $_POST['id_doan'];
        $noidung = $_POST['noidung'];
        $comment = $c_doan->ThemBinhLuan($mssv, $id_doan, $noidung);
    }else{
        $_SESSION['chua_dang_nhap'] = "Vui lòng đăng nhập để có thể bình luận!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> TTB</title>

    <!-- Bootstrap Core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="public/css/shop-homepage.css" rel="stylesheet">
    <link href="public/css/my.css" rel="stylesheet">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Project Management System</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"> Trang chủ</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="gioithieu.php">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="lienhe.php">Liên hệ</a>
                    </li>
                </ul>

                <form class="navbar-form navbar-left" role="search">
			        <div class="form-group">
			          <input type="text" class="form-control" size="50" placeholder="Search">
			        </div>
			        <button type="submit" class="btn btn-default">Submit</button>
			    </form>

			    <ul class="nav navbar-nav pull-right">
                    <?php
                    if(isset(($_SESSION['user_name']))){
                    ?>
                    <li>
                        <a href="dangxuat.php">Đăng xuất</a>
                    </li>
                    <li>
                        <a href="canhan.php?ms_sv=<?=$_SESSION['mssv']?>"><span class ="glyphicon glyphicon-user" style="color: #3CFF0D; padding:0 10px 0 0"></span><?=$_SESSION['user_name']?></a>
                    </li>
                    <?php
                    }else{
                    ?>
                    <li>
                        <a href="dangki.html">Đăng ký</a>
                    </li>
                    <li>
                        <a href="dangnhap.php">Đăng nhập</a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="space20" style="padding-top: 70px;"></div>
    <!-- Project Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <!-- Title -->
                <h1><?=$chitietdoan->TênDA?></h1>
                <!-- Author -->
                <p class="lead"> => Công nghệ: <a href="#"><?=$chitietdoan->CongNghe?></a></p>
                <!-- <img class="img-responsive" src="#" alt=""> -->
                <!-- Date/Time -->
                <!-- <p><span class="glyphicon glyphicon-time"></span> Posted on <?=$chitietdoan->creater_at?></p> -->
                <hr> 
                <!-- Post Content -->
                <p class="lead" style="text-align: center;"><?=$chitietdoan->TomTat?></p>
                <p><?=$chitietdoan->NoiDung?></p>
                <div class="space20" style="padding-top: 70px;"></div>
                <a class="btn btn-primary" href="chitiet.html">file.pdf<span class="glyphicon glyphicon-download-alt"  style="margin-left: 5px"></span></a>
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
                        <input type="hidden" name="id_doan" value="<?=$chitietdoan->idDA?>">
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
                        <!-- <img class="media-object " src="http://placehold.it/64x64" alt=""> -->
                        </a>
                        <div class="media-body"><h4 class="media-heading"><?=$cmt->name?><small> <?=$cmt->creater_at?></small></h4><?=$cmt->NoiDung?></div>
                        </div>
                        <?php
                    }
                ?>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-3">

                <div class="panel panel-default">
                    <div class="panel-heading" style="text-align: center;color: blue;"><b>Liên Quan</b></div>
                    <div class="panel-body">
                        <!-- item -->
                        <?php
                            foreach ($relatednews as $rel) {
                                
                            ?>
                                <div class="row" style="margin-top: 10px;">
                                <div class="col-md-2 glyphicon glyphicon-book" style="padding-top:20px">
                                <!-- <a href="detail.html">
                                    <img class="img-responsive" src="public/image/avata/<?=$rel->Hinh?>" alt="">
                                </a> -->
                                </div>
                                <div class="col-md-10">
                                <a href="chitiet.php?loai_doan=<?=$rel->TenLKD?>&id_doan=<?=$rel->idDA?>"><b><?=$rel->TênDA?></b></a>
                                </div>
                                <p><?=$rel->TomTat?></p>
                                <div class="break"></div>
                        </div>
                            <?php
                            }
                        ?>
                        <!-- end item -->
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" style="text-align: center;color: blue;"><b>Nổi Bật</b></div>
                    <div class="panel-body">
                        <!-- item -->
                        <?php
                            foreach ($doannoibat as $hot) {
                                ?> 
                            <div class="row" style="margin-top: 10px;">
                                <div class="col-md-2 glyphicon glyphicon-book" style="padding-top:20px;">
                                <!-- <a href="detail.html"><img class="img-responsive" src="#" alt=""></a> -->
                                </div>
                                <div class="col-md-10"><a href="chitiet.php?loai_doan=<?=$hot->TenLKD?>&id_doan=<?=$hot->idDA?>"><b><?=$hot->TênDA?></b></a></div>
                                <p><?=$hot->TomTat?></p>
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
        <!-- /.row -->
    </div>
    <!-- end Page Content -->
    <div class="space20"></div>
    <!-- Footer -->
    <hr>
    <div id="footer">
        <!-- footer.php -->
        <div class="row">
            <div class="col-md-3">
                <div class="bot1"><img class="img-responsive" src="public/image/logo.gif" alt="" /></div>
            </div>
            <div class="space20"></div>
            <div class="col-md-5">
                <div class="bot2">
                    <p>&copy; <span><b>Copyright 2017 <mark>BK-TTB</mark></b></span></p>
                    <p>&reg; <i>welcome to the website</i></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bot3">
                    <p><b>Đại Học Bách Khoa Hà Nội</b></p>
                    <p><a style="color: #686E7A; font: 11px arial; padding: 0 4px; text-decoration: none;">Địa chỉ: </a><span>Số 01, Đại Cồ Việt, Hai Bà Trưng, Hà Nội</span></p>
                </div>
            </div>
            <div class="space20"></div>
        </div>
    </div>
    <!-- end Footer -->
    <div class="space20"></div>
    <!-- jQuery -->
    <script src="public/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/my.js"></script>

</body>

</html>
