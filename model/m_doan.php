<?php
include('database.php');
class M_doan extends database{

	function getSlide(){
		$sql = "SELECT * FROM slide";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	function getMenu(){
		$sql="SELECT bm.*, GROUP_CONCAT(DISTINCT l.idL, ':',l.TenL, ':',l.TenLKD) AS Loai, da.idDA, da.TênDA, da.CongNghe, ct.TomTat FROM bomon bm INNER JOIN loai l ON l.idBM = bm.idBM INNER JOIN doan da ON da.idL = l.idL INNER JOIN chitiet ct ON ct.idDA = da.idDA GROUP BY bm.idBM";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	function getDoanByIdLoai($id_loaidoan, $vitri = -1, $limit = -1){
		$sql = "SELECT da.*, ct.* FROM doan da INNER JOIN chitiet ct ON ct.idDA = da.idDA WHERE idL = $id_loaidoan";
		if($vitri > -1 && $limit > 1){
			$sql .=" limit $vitri,$limit";//nối tiếp câu lệnh truy vấn trên. 

		}
		$this->setQuery($sql);
		return $this->loadAllRows(array($id_loaidoan));
	}

	function getTitlebyId($id_loaidoan){
		$sql ="SELECT TenL From loai WHERE idL = $id_loaidoan";
		$this->setQuery($sql);
		return $this->loadRow(array($id_loaidoan));
	}

	function getChitiet($id){
		$sql = "SELECT da.*, ct.* FROM doan AS da, chitiet AS ct WHERE da.idDA = ct.idDA AND da.idDA = $id";
		$this->setQuery($sql);
		return $this->loadRow(array($id));
	}

	function getComment($id_doan){
		$sql = "SELECT cm.*, sv.name FROM comment cm INNER JOIN sinhvien sv ON cm.mssv = sv.mssv WHERE idDA = $id_doan";
		$this->setQuery($sql);
		return $this->loadAllRows(array($id_doan));
	}

	function getRelatedNews($tenkd){
		$sql = "SELECT da.*, l.TenLKD, l.idL, ct.* FROM doan da INNER JOIN loai l ON da.idL = l.idL INNER JOIN chitiet ct ON ct.idDA = da.idDA WHERE l.TenLKD ='$tenkd' LIMIT 0,3";
		$this->setQuery($sql);
		return $this->loadAllRows(array($tenkd));
	}

	function getTenKDLoaiDoan($id_loaidoan){
		$sql = "SELECT TenLKD FROM loai WHERE idL = $id_loaidoan";
		$this->setQuery($sql);
		return $this->loadRow(array($id_loaidoan));
	}

	function getDoanNoibat(){
		$sql = "SELECT da.*, ct.*, l.TenLKD, l.idL FROM doan da INNER JOIN chitiet ct ON da.idDA = ct.idDA INNER JOIN loai l ON da.idL = l.idL  WHERE ct.NoiBat = 1 LIMIT 0,3";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	// function getBaocao($id){
	// 	$sql = "SELECT * FROM baocao WHERE idDA = $id";
	// 	$this->setQuery($sql);
	// 	return $this->loadRow(array($id));
	// }

	function getCanhanSV($ms_sv){
		// $sql ="SELECT da.*, l.TenL, sv.name, sv.email , gv.name FROM doan AS da, loai AS l, sinhvien AS sv, giangvien AS gv WHERE da.idL = l.idL AND da.mssv = sv.mssv AND da.magv = gv.magv AND da.mssv = '$ms_sv'";
		$sql = "SELECT da.*, l.TenL, sv.name as namesv, sv.email, gv.name as namegv FROM doan da INNER JOIN loai l ON da.idL = l.idL INNER JOIN sinhvien sv ON da.mssv = sv.mssv INNER JOIN giangvien gv ON da.magv = gv.magv WHERE da.mssv = '$ms_sv'";
		$this->setQuery($sql);
		return $this->loadAllRows(array($ms_sv));
	}

	function addComment($mssv, $id_doan, $noidung){
		$sql = "INSERT INTO comment(mssv, idDA, NoiDung) VALUES(?,?,?)";
		$this->setQuery($sql);
		return $this->execute(array($mssv, $id_doan, $noidung));
	}

}

?>