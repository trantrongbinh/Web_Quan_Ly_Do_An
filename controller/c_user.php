<?php
	session_start();
	include('model/m_user.php');

	class C_user{
		public function dangnhapTK($email, $password){
			$m_user = new M_user();
			$user = $m_user->dangnhap($email,$password);
			// print_r($user);
			if($user == true){
				$_SESSION['user_name'] = $user->name;
				$_SESSION['mssv'] = $user->mssv;
				$_SESSION['email'] = $user->email;
				header('location:index.php');
				if(isset($_SESSION['user_error'])){
					unset($_SESSION['user_error']);
				}
				if(isset($_SESSION['chua_dang_nhap'])){
					unset($_SESSION['chua_dang_nhap']);
				}
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