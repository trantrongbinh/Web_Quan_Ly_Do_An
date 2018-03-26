<?php

class loai extends database
{
	private $_idl;
	private $_tenl;
	private $_tenlkd;
	function __construct()
	{
		$this->connect();
	}

	public function getIdl(){
		return $this->_idl;
	}

	public function setIdl($idl){
		$this->_idl = $idl;
	}

	public function getTenl(){
		return $this->_tenl;
	}

	public function setTenl($tenl){
		$this->_tenl = $tenl;
	}

	public function getTenlkd(){
		return $this->_tenlkd;
	}

	public function setTenlkd($tenlkd){
		$this->_tenlkd = $tenlkd;
	}

	public function themLoai(){
        try
        {
            $sql = "INSERT INTO loai VALUES (null,N'".$this->getTenl()."',N'".$this->getTenlkd()."')";
            $this-> query($sql);
            return true;
        }
        catch(mysqli_sql_exception $e)
        {
            return false;
        }
    }

    public function suaLoai($id){
        try
        {
            $sql = "UPDATE loai SET TenL = N'".$this->getTenl()."', TenLKD = N'".$this->getTenlkd()."' WHERE idL = '$id'";
            $this-> query($sql);
            return true;
        }
        catch(mysqli_sql_exception $e)
        {
            return false;
        }
    }

    public function layLoai(){
        $sql = "SELECT * FROM loai ORDER BY idL ASC";
        $this-> query($sql);
        return $this-> fetchALL();
    }

    public function layMotLoai($id){
        $sql = "SELECT * FROM loai where idL = '$id' ";
        $this-> query($sql);
        return $this-> fetch();
    }

    public function xoaLoai($id){
        try
        {
            $sql = "DELETE FROM loai WHERE idL = '$id' ";
            $this-> query($sql);
            return true;
        }
        catch(mysqli_sql_exception $e)
        {
            return false;
        }
    }

    public function checkLoai($id){
        $kq = $this->layMotLoai($id);
        if ( $kq == null ){
            return false;
        }
        else{
            return true;
        }
    }
}
?>