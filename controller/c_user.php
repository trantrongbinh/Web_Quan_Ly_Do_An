<?php
	session_start();
	include('model/m_user.php');

	class C_user{
		public function dangnhapTK($email, $password){
			$m_user = new M_user();
			$user1 = $m_user->dangnhapsv($email,$password);
			$user2 = $m_user->dangnhapgv($email,$password);
			$user3 = $m_user->dangnhapgvu($email,$password);
			if($user1 == true){
				$_SESSION['user_name'] = $user1['name'];
				$_SESSION['mssv'] = $user1['mssv'];
				$_SESSION['email'] = $user1['email'];
				$_SESSION["per"] = 'sv';
				header('location:index.php');
				if(isset($_SESSION['user_error'])){
					unset($_SESSION['user_error']);
				}
				if(isset($_SESSION['chua_dang_nhap'])){
					unset($_SESSION['chua_dang_nhap']);
				}
			}elseif ($user2 == true) {
				$_SESSION['user_name'] = $user2['name'];
				$_SESSION['magv'] = $user2['magv'];
				$_SESSION['email'] = $user2['email'];
				$_SESSION["per"] = 'gv';
				header('location:index.php');
				if(isset($_SESSION['user_error'])){
					unset($_SESSION['user_error']);
				}
				if(isset($_SESSION['chua_dang_nhap'])){
					unset($_SESSION['chua_dang_nhap']);
				}
			}elseif ($user3 == true) {
				$_SESSION['user_name'] = $user3['name'];
				$_SESSION['magvu'] = $user3['magvu'];
				$_SESSION['email'] = $user3['email'];
				$_SESSION["per"] = 'gvu';
				header('location:index.php');
				if(isset($_SESSION['user_error'])){
					unset($_SESSION['user_error']);
				}
				if(isset($_SESSION['chua_dang_nhap'])){
					unset($_SESSION['chua_dang_nhap']);
				}
			}elseif ( $email =='admin@gmail.com' && $password == 'admin' ){
            	$_SESSION["user_name"] = 'admin đẹp trai';
            	$_SESSION["per"] = 'admin';
            	header("location:index.php");
        	}
			else{
				$_SESSION['user_error'] = "Sai thông tin đăng nhập";
				header('location:dangnhap.php');
			}
		}

		function dangxuat(){
			session_destroy();
			header("location:index.php");
		}
	}
?>