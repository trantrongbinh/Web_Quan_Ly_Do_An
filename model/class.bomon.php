<?php

class bomon extends database{
	private $_idbm;
	private $_tenbm;
	private $_tenbmkd;
	
	function __construct(){
        $this->connect();
    }

    public function getIdbm(){
        return $this->_idbm;
    }

    public function setIdbm($idbm){
        $this->_idbm = $idbm;
    }

	public function getTenbm(){
		return $this->_tenbm;
	}

	public function setTenbm($tenbm){
		$this->_tenbm = $tenbm;
	}

	public function getTenbmkd(){
		return $this->_tenbmkd;
	}

	public function setTenbmkd($tenbmkd){
		$this->_tenbmkd = $tenbmkd;
	}

	public function themBoMon(){
        try
        {
            $sql = "INSERT INTO bomon VALUES (null,N'".$this->getTenbm()."',N'".$this->getTenbmkd()."')";
            $this-> query($sql);
            return true;
        }
        catch(mysqli_sql_exception $e)
        {
            return false;
        }
    }

    public function suaBoMon($id){
        try
        {
            $sql = "UPDATE bomon SET TenBM = N'".$this->getTenbm()."', TenBMKD = N'".$this->getTenbmkd()."' WHERE idBM = '$id'";
            $this-> query($sql);
            return true;
        }
        catch(mysqli_sql_exception $e)
        {
            return false;
        }
    }

    public function layBoMon(){
        $sql = "SELECT * FROM bomon ORDER BY idBM ASC";
        $this-> query($sql);
        return $this-> fetchALL();
    }

    public function layMotBoMon($id){
        $sql = "SELECT * FROM bomon where idBM = '$id' ";
        $this-> query($sql);
        return $this-> fetch();
    }

    public function xoaBoMon($id){
        try
        {
            $sql = "DELETE FROM bomon WHERE idBM = '$id' ";
            $this-> query($sql);
            return true;
        }
        catch(mysqli_sql_exception $e)
        {
            return false;
        }
    }

    public function checkBoMon($id){
        $kq = $this->layMotBoMon($id);
        if ( $kq == null ){
            return false;
        }
        else{
            return true;
        }
    }
}
?>