<?php
session_start();
include('controller/c_doan.php');
$c_doan = new C_doan();
$noi_dung = $c_doan->index();
$chitietcanhan = $c_doan->CaNhan();
$thongtincanhan = $chitietcanhan['canhan'];
//print_r($thongtincanhan);
$slide = $noi_dung['slide'];
//$menu = $noi_dung['menu'];
//print_r($menu);


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
    <link href="public/css/homepage.css" rel="stylesheet">
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

    <!-- Page Content -->
    <div class="container">

    	<!-- slider -->
    	<div class="row carousel-holder">
            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <?php
                            for($i=0; $i<count($slide); $i++){
                                if($i==0){
                                    ?>
                                    <div class="item active">
                                        <img class="slide-image" src="public/image/slide/<?=$slide[$i]->Hinh?>" alt="">
                                    </div>
                                    <?php
                                }
                                else{
                                    ?>
                                    <div class="item">
                                        <img class="slide-image" src="public/image/slide/<?=$slide[$i]->Hinh?>" alt="">
                                    </div>
                                    <?php
                                }
                            }
                        ?>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
        <!-- end slide -->

        <div class="space20"></div>

        <div class="row main-left">
            <div class="col-md-3">
                <div class="panel panel-default">            
                    <div class="panel-heading" style="background-color:#337AB7; color:white;" >
                        <h2 style="margin-top:0px; margin-bottom:0px; text-align: center;">Thông Tin</h2>
                    </div>
                    <?php
                    if(isset(($_SESSION['user_name']))){
                        ?>
                            <div class="panel-body">
                        <h3><span class="glyphicon glyphicon-user"></span> <?=$_SESSION['user_name']?></h3>
                        <div class="break"></div>
                        <h4><span class= "glyphicon glyphicon-copyright-mark"></span> MSSV : </h4>
                        <p><?=$_SESSION['mssv']?></p>
                        <h4><span class="glyphicon glyphicon-envelope"></span> Email : </h4>
                        <p><?=$thongtincanhan[0]->email?></p>
                        <h4><span class="glyphicon glyphicon-phone-alt"></span> Điện thoại : </h4>
                        <p>0969696969</p>

                    </div>
                        <?php
                    }
                    ?>
                    
                </div>
            </div>

            <div class="col-md-9">
                <div class="panel panel-default">            
                    <div class="panel-heading" style="background-color:#337AB7; color:white;" >
                        <h2 style="margin-top:0px; margin-bottom:0px; text-align: center;">Quản lý đề tài</h2>
                        <p style="text-align:center; margin-top: 15px;"><a href="dangkydoan.php?ms_sv=<?=$_SESSION['mssv']?>" class="button_them">Đăng kí đề tài</a></p>
                    </div>
					<div class="bang"  style="text-align: center;">
                    <table class="table table-bordered">
  					<thead>
    					<tr>
    					<th>Mã</th>
      					<th>Loại</th>
      					<th>Tiêu đề</th>
      					<th>GV hướng dẫn</th>
      					<th>Trạng Thái</th>
                        <th>Điểm</th>
    					</tr>
  					</thead>
  					<tbody>
                        <?php
                        foreach ($thongtincanhan as $info) {
                            ?>
                            <tr>
                            <th scope="row"><?=$info->idDA?></th>
                            <td><?=$info->TenL?></td>
                            <td><?=$info->TênDA?></td>
                            <td><?=$info->namegv?></td>
                            <td><?=$info->TrangThai?></td>
                            <td><?=$info->Diem?></td>
                    </tr>
                            <?php
                        }
                        ?>
  					</tbody>
					</table>
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
