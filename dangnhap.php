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

    <title> TTB</title>

    <!-- Bootstrap Core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="public/css/shop-homepage.css" rel="stylesheet">
    <link href="public/css/my.css" rel="stylesheet">
</head>

<body>
    <div class="space20" style="padding-top: 70px;"></div>
    <div class="container">

        <div class="row carousel-holder">
            <div class="col-md-4"></div>
            <div class="col-md-4">

                <?php
                    if(isset($_SESSION['user_error'])){
                        echo "<div class='alert alert-danger'>".($_SESSION['user_error'])."</div>";
                    }
                ?>

                <div class="panel panel-default">
                    <div class="panel-heading">Đăng nhập</div>
                    <div class="panel-body">
                        <form method="POST" action="#">
                            <div>
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email" name="email" 
                                >
                            </div>
                            <br>    
                            <div>
                                <label>Mật khẩu</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <br>
                            <button type="submit" name="dangnhap" class="btn btn-success">Đăng nhập
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
   
    </div>

    <!-- jQuery -->
    <script src="public/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/my.js"></script>

</body>

</html>
