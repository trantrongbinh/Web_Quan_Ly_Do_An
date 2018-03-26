<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cập Nhật Tài Khoản</title>
    <!-- Bootstrap Core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="public/css/homepage.css" rel="stylesheet">
    <link href="public/css/my.css" rel="stylesheet">
    <link rel="stylesheet" href="../Library/Font-Awesome/css/font-awesome.min.css">
</head>

<body>
	 <div class="space20"></div>
	 <div class="space20"></div>
     <div class="space20"></div>
    <!-- Page Content -->
    <div class="container">
    	<!-- slider -->
    	<div class="row carousel-holder">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="panel panel-default">
				  	<div class="panel-heading" style="text-align: center; font-size: 24px;"><b>Thay đổi thông tin tài khoản</b></div>
				  	<div class="panel-body">
				    	<form>
				    		<div>
				    			<label>UserName</label>
							  	<input type="text" class="form-control" placeholder="Username" name="name" aria-describedby="basic-addon1" value="<?=$_SESSION['user_name']?>">
							</div>
							<br>
							<div>
				    			<label>Email</label>
							  	<input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1" disabled="true " value="<?=$_SESSION['email']?>">
							</div>
							<br>
							<div>
				    			<label>Nhập mật khẩu cũ</label>
							  	<input type="text" class="form-control" placeholder="Username" name="name" aria-describedby="basic-addon1">
							</div>	
							<br>
							<div>
								<input type="checkbox" class="" name="checkpassword">
				    			<label>Nhập mật khẩu mới</label>
							  	<input type="password" class="form-control" name="password" aria-describedby="basic-addon1">
							</div>
							<br>
							<div>
				    			<label>Nhập lại mật khẩu</label>
							  	<input type="password" class="form-control" name="passwordAgain" aria-describedby="basic-addon1">
							</div>
							<br>
							<input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
				    	</form>
				  	</div>
				</div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <!-- end slide -->
    </div>
    <!-- end Page Content -->
    <!-- jQuery -->
    <script src="public/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/my.js"></script>

</body>

</html>