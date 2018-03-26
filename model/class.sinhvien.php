<?php

class sinhvien extends database{
	private $_mssv;
	private $_tensv;
	private $_email;
	private $_password;

	function __construct(){
		$this->connect();
	}

	public function getMssv(){
		return $this->_mssv;
	}

	public function setMssv($mssv){
		$this->_mssv = $mssv;
	}

	public function getTensv(){
    	return $this->_tensv;
	}

	public function setTensv($tensv){
    	$this->_tensv = $tensv;
	}

    public function getEmail(){
        return $this->_email;
    }

    public function setEmail($email){
        $this->_email = $email;
    }

	public function getPassword(){
    	return $this->_password;
	}

	public function setPassword($password){
    	$this->_password = $password;
	}

    public function themSV(){
        try{
            $sql = "INSERT INTO sinhvien VALUES (N'".$this->getMssv()."',N'".$this->getTensv()."',N'".$this->getEmail()."',N'".$this->getPassword()."')";
            $this-> query($sql);
            return true;
        }
        catch(mysqli_sql_exception $e){
            return false;
        }
    }

    public function suaSV($id){
        try{
            $sql = "UPDATE sinhvien SET mssv = N'".$this->getMssv()."', name = N'".$this->getTensv()."', email = N'".$this->getEmail()."', password = N'".$this->getPassword()."' WHERE mssv = '$id'";
            $this-> query($sql);
            return true;
        }
        catch(mysqli_sql_exception $e){
            return false;
        }
    }

    public function laySV(){
        $sql = "SELECT * FROM sinhvien ORDER BY mssv DESC";
        $this-> query($sql);
        return $this-> fetchALL();
    }

    public function layMotSV($id){
        $sql = "SELECT * FROM sinhvien where mssv = '$id' ";
        $this-> query($sql);
        return $this-> fetch();
    }

    public function xoaSV($id){
        try{
            $sql = "DELETE FROM sinhvien WHERE mssv = '$id' ";
            $this-> query($sql);
            return true;
        }
        catch(mysqli_sql_exception $e){
            return false;
        }
    }

    public function checkSV($id){
        $ketqua = $this->layMotSV($id);
        if($ketqua){
            return true;
        }
        else {
            return false;
        }
    }

    public function checkLoginSV($id,$pass){
        $sql = "SELECT * FROM sinhvien where mssv='$id' AND password='$pass' ";
        $this-> query($sql);
        $ketqua = $this->fetch();
        if($ketqua){
            return true;
        }
        else {
            return false;
        }
    }

}
?>