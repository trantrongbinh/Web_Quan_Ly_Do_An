<?php
include('database.class.php');

	class M_user extends database{
		function dangnhapsv($email, $password){
			$sql = "SELECT * FROM sinhvien WHERE email = '$email' and password = '$password'";
			$this->query($sql);
			return $this->fetch(array($email,$password));
		}

		function dangnhapgv($email, $password){
			$sql = "SELECT * FROM giangvien WHERE email = '$email' and password = '$password'";
			$this->query($sql);
			return $this->fetch(array($email,$password));
		}

		function dangnhapgvu($email, $password){
			$sql = "SELECT * FROM giaovu WHERE email = '$email' and password = '$password'";
			$this->query($sql);
			return $this->fetch(array($email,$password));
		}

	}
?>