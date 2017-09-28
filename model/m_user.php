<?php
include('database.php');

	class M_user extends database{
		function dangnhap($email, $password){
			$sql = "SELECT * FROM sinhvien WHERE email = '$email' and password = '$password'";
			$this->setQuery($sql);
			return $this->loadRow(array($email,$password));
	}
}
?>