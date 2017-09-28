<?php
session_start();
include('controller/c_doan.php');
$c_doan = new C_doan();
$alldoan = $c_doan->loaidoan();
$doan = $alldoan['danhmucdoan'];
//print_r($doan);
$menu = $alldoan['menu'];
$title = $alldoan['title'];
$thanh_phantrang = $alldoan['thanh_phantrang'];
//print_r($menu);
$tenkd = $alldoan['tenkd'];
//print_r($tenkd);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TTB</title>

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
                <a class="navbar-brand" href="index.php">Trang chủ</a>
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
                      <input type="text"  size="50" class="form-control" placeholder="Search">
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
        </div>
        <!-- /.container -->
    </nav>
    <div class="space20" style="padding-top: 70px;"></div>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-3 ">
                <ul class="list-group" id="menu">
                    <li href="#" class="list-group-item menu1 active">
                        Menu
                    </li>
                    <?php
                        foreach ($menu as $mn) {
                            ?>
                            <li href="#" class="list-group-item menu1"><?=$mn->TenBM?></li>
                            <ul>
                                <?php
                                    $loai = explode(',',$mn->Loai);//phan cach mang thanh cac mang con boi dau ','
                                    // print_r($loai);
                                    foreach ($loai as $l) {
                                        list($id, $ten, $tenkhongdau) = explode(':', $l);
                                        ?>
                                        <li class="list-group-item"><a href="loaidoan.php?id_loai=<?=$id?>"><?=$ten?></a></li>
                                        <?php
                                    }
                                ?>
                            </ul>
                            <?php
                        }

                    ?>
                </ul>
            </div>

            <div class="col-md-9 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#337AB7; color:white;">
                        <h4><b><?=$title->TenL?></b></h4>
                    </div>

                    <?php

                        foreach ($doan as $da) {
                            ?>
                            <div class="row-item row">
                            <div class="col-md-1 glyphicon glyphicon-ok" style="padding: 25px 0 0 40px;">

                                <!-- <a href="detail.html">
                                    <br>
                                    <img width="200px" height="200px" class="img-responsive" src="public/image/avata/<?=$da->Hinh?>" alt="">
                                </a> -->
                            </div>

                            <div class="col-md-9">
                                <h3><?=$da->TênDA?></h3>
                                <p><?=$da->TomTat?></p>
                                <a class="btn btn-primary" href="chitiet.php?loai_doan=<?=$tenkd->TenLKD?>&id_doan=<?=$da->idDA?>">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>
                            <div class="break"></div>
                            </div>
                            <?php
                        }
                    ?>

                </div>

                <div style = "text-align: center;"><?=$thanh_phantrang?></div>

            </div> 
        </div>
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
