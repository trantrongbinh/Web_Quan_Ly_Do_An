<?php

class tintuc extends database{
	private $_idtt;
	private $_tieude;
	private $_tieudekd;
    private $_tomtat;
    private $_noidung;
    private $_urlhinh;
    private $_ngay;
    private $_noibat;
    private $_soluotxem;
    private $_anhien; 
	
	function __construct(){
        $this->connect();
    }

    public function getIdtt(){
        return $this->_idtt;
    }

    public function setIdbm($idtt){
        $this->_idtt = $idtt;
    }

	public function getTieude(){
		return $this->_tieude;
	}

	public function setTieude($tieude){
		$this->_tieude = $tieude;
	}

	public function getTieudekd(){
		return $this->_tieudekd;
	}

	public function setTieudekd($tieudekd){
		$this->_tieudekd = $tieudekd;
	}

    public function getTomtat(){
        return $this->_tomtat;
    }

    public function setTomtat($tomtat){
        $this->_tomtat = $tomtat;
    }

    public function getNoidung(){
        return $this->_noidung;
    }

    public function setNoiDung($noidung){
        $this->_noidung = $noidung;
    }

    public function getUrlhinh(){
        return $this->_urlhinh;
    }

    public function setUrlhinh($urlhinh){
        $this->_urlhinh = $urlhinh;
    }

    public function getNoibat(){
        return $this->_noibat;
    }

    public function setNoibat($noibat){
        $this->_noibat = $noibat;
    }

    public function getSoluotxem(){
        return $this->_soluotxem;
    }

    public function setSoluotxem($soluotxem){
        $this->_soluotxem = $soluotxem;
    }

	public function themTinTuc(){
        try
        {
            $sql = "INSERT INTO tintuc VALUES (null,N'".$this->getTieude()."',N'".$this->getTieudekd()."',N'".$this->getTomtat()."',N'".$this->getNoidung()."',N'".$this->getUrlhinh()."',now(),N'".$this->getNoibat()."',N'".$this->getSoluotxem()."')";
            $this-> query($sql);
            return true;
        }
        catch(mysqli_sql_exception $e)
        {
            return false;
        }
    }

    public function suaTinTuc($id){
        try
        {
            $sql = "UPDATE tintuc SET TieuDe = N'".$this->getTieude()."', TieuDeKD = N'".$this->getTieudekd()."', TomTat = N'".$this->getTomtat()."', NoiDung = N'".$this->getNoidung()."', urlHinh = N'".$this->getUrlhinh()."',Ngay = now(), NoiBat = N'".$this->getNoibat()."', SoLuotXem = N'".$this->getSoluotxem()."' WHERE idTT = '$id'";
            $this-> query($sql);
            return true;
        }
        catch(mysqli_sql_exception $e)
        {
            return false;
        }
    }

    public function layTinTuc(){
        $sql = "SELECT * FROM tintuc ORDER BY idTT ASC";
        $this-> query($sql);
        return $this-> fetchALL();
    }

    public function layMotTinTuc($id){
        $sql = "SELECT * FROM tintuc where idTT = '$id' ";
        $this-> query($sql);
        return $this-> fetch();
    }

    public function xoaTinTuc($id){
        try
        {
            $sql = "DELETE FROM tintuc WHERE idTT = '$id' ";
            $this-> query($sql);
            return true;
        }
        catch(mysqli_sql_exception $e)
        {
            return false;
        }
    }

    public function checkTinTuc($id){
        $kq = $this->layMotTinTuc($id);
        if ( $kq == null ){
            return false;
        }
        else{
            return true;
        }
    }
}
?>