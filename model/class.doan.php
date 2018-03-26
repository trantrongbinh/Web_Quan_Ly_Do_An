<?php

class doan extends database{
	private $_idda;
	private $_tenda;
	private $_congnghe;
	private $_idl;
	private $_mssv;
	private $_magv;
	private $_trangthai;
	private $_diem;
	private $_idbm;

	function __construct(){
		$this->connect();
	}

	public function getIdda(){
		return $this->_idda;
	}

	public function setIdda($idda){
		$this->_idda = $idda;
	}

	public function getTenda(){
		return $this->_tenda;
	}

	public function setTenda($tenda){
		$this->_tenda = $tenda;
	}

	public function getCongnghe(){
		return $this->_congnghe;
	}

	public function setCongnghe($congnghe){
		$this->_congnghe = $congnghe;
	}

	public function getIdl(){
		return $this->_idl;
	}

	public function setIdl($idl){
		$this->_idl = $idl;
	}

	public function getMssv(){
		return $this->_mssv;
	}

	public function setMssv($mssv){
		$this->_mssv = $mssv;
	}

	public function getMagv(){
		return $this->_magv;
	}

	public function setMagv($magv){
		$this->_magv = $magv;
	}

	public function getTrangthai(){
		return $this->_trangthai;
	}

	public function setTrangthai($trangthai){
		$this->_trangthai = $trangthai;
	}

	public function getDiem(){
		return $this->_diem;
	}

	public function setDiem($diem){
		$this->_diem = $diem;
	}

	public function getIdbm(){
		return $this->_idbm;
	}

	public function setIdbm($idbm){
		$this->_idbm = $idbm;
	}

	public function themDA(){
		try{
			$sql = "INSERT INTO doan VALUES (null, N'".$this->getTenda()."',N'".$this->getCongnghe()."',N'".$this->getIdl()."',N'".$this->getMssv()."',N'".$this->getMagv()."',N'".$this->getTrangthai()."',N'".$this->getDiem()."',N'".$this->getIdbm()."')";
			$this->query($sql);
			return true;
		}
		catch(mysqli_sql_exception $e){
			return false;
		}
	}

	public function suaDA($id){
		try{
			$sql="UPDATE doan SET TênDA = N'".$this->getTenda()."', CongNghe= N'".$this->getCongnghe()."',idL = N'".$this->getIdl()."',mssv = N'".$this->getMssv()."',magv = N'".$this->getMagv()."',TrangThai = N'".$this->getTrangthai()."',Diem = N'".$this->getDiem()."',idBM = N'".$this->getIdbm()."' WHERE idDA = '$id'";
			$this->query($sql);
			return true;
		}
		catch(mysqli_sql_exception $e){
            return false;
        }
	}

	public function layDA(){
        $sql = "SELECT * FROM doan ORDER BY idDA DESC";
        $this-> query($sql);
        return $this-> fetchALL();
    }

    public function getfullDA(){
    	$sql = "SELECT da.*, l.*, bm.*, sv.name AS TenSV, gv.name AS TenGV FROM doan AS da, bomon AS bm, loai AS l, sinhvien AS sv, giangvien AS gv WHERE da.idL = l.idL AND da.idBM = bm.idBM AND da.mssv = sv.mssv AND da.magv = gv.magv ORDER BY idDA DESC ";
    	$this->query($sql);
    	return $this->fetchALL();
    }

    public function layDATheoGV($magv){
        $sql = "SELECT * FROM doan WHERE magv='$magv' ORDER BY idDA DESC";
        $this-> query($sql);
        return $this-> fetchALL();
    }

    public function layDATheoSV($mssv){
        $sql = "SELECT * FROM doan WHERE mssv='$masv' ORDER BY idDA DESC";
        $this-> query($sql);
        return $this-> fetchALL();
    }

    public function layDATheoLoai($loai){
        $sql = "SELECT * FROM doan WHERE idL='$loai' ORDER BY idDA DESC";
        $this-> query($sql);
        return $this-> fetchALL();
    }

    public function layDATheoBoMon($bm){
        $sql = "SELECT * FROM doan WHERE idBM='$bm' ORDER BY idDA DESC";
        $this-> query($sql);
        return $this-> fetchALL();
    }

    public function layMotDA($id){
        $sql = "SELECT * FROM doan where idDA = '$id'";
        $this-> query($sql);
        return $this-> fetch();
    }
    public function xoaDA($id){
        try
        {
            $sql = "DELETE FROM doan WHERE idDA = '$id' ";
            $this-> query($sql);
            return true;
        }
        catch(mysqli_sql_exception $e)
        {
            return false;
        }
    }

    public function checkDA($id){
        $kq = $this->layMotDA($id);
        if ( $kq == null ){
            return false;
        }
        else{
            return true;
        }
    }

}
?>