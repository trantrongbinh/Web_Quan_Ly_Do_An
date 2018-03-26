<?php
include('controller/c_user.php');
$c_user = new C_user();
if(isset($_POST['dangnhap'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = $c_user->dangnhapTK($email, $password);  
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
    <title> Đăng nhập</title>
    <!-- Bootstrap Core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="public/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="public/admin/font-awesome/css/font-awesome.min.css">
</head>
<body>
    <div class="space20" style="padding-top: 70px;"></div>
    <div class="container">
        <div class="row carousel-holder">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <?php
                    if(isset($_SESSION['user_error'])){
                        echo "<div class='alert alert-danger'>".($_SESSION['user_error'])."</div>";
                    }
                ?>
                <div class="panel panel-default" id="home5">
                    <div class="panel-heading" id="home4" style="color:white; font-size: 20px;">Đăng nhập</div>
                    <div class="panel-body">
                        <form method="POST" action="#">
                            <div>
                                <label class="pull-left">Email</label>
                                <input type="email" class="form-control" placeholder="Email" name="email" 
                                >
                            </div>
                            <br>    
                            <div>
                                <label class="pull-left">Mật khẩu</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <br>
                            <button type="submit" name="dangnhap" class="btn btn-primary" style="background-color:#2509F9; color:white;">Đăng nhập
                            </button>
                            <a href="index.php" class="btn btn-success pull-right" style="background-color:#5D0606; color:white; padding: 2px 3px 2px 3px; margin: 30px -10px -10px 0;">Exit</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="public/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/my.js"></script>

</body>

</html>
