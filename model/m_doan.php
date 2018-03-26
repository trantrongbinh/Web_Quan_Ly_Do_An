<?php
include('database.class.php');

class M_doan extends database{

	function getSlide(){
		$sql = "SELECT * FROM slide";
		$this->query($sql);
		return $this->fetchAll();
	}

	function getMenu(){
		$sql="SELECT bm.*, GROUP_CONCAT(DISTINCT l.idL, ':',l.TenL, ':',l.TenLKD) AS Loai FROM bomon AS bm,loai AS l GROUP BY bm.idBM ";
		$this->query($sql);
		return $this->fetchAll();
	}

	function getDoanByidLoaiAndidBM($id_loaidoan, $id_loaibomon, $vitri = -1, $limit = -1){
		$sql = "SELECT da.*, ct.* FROM doan da INNER JOIN chitiet ct ON ct.idDA = da.idDA WHERE idL = $id_loaidoan AND idBM = $id_loaibomon";
		if($vitri > -1 && $limit > 1){
			$sql .=" limit $vitri,$limit";//nối tiếp câu lệnh truy vấn trên. 
		}
		$this->query($sql);
		return $this->fetchAll(array($id_loaidoan,$id_loaibomon));
	}

	function getTitlebyId($id_loaidoan){
		$sql ="SELECT TenL From loai WHERE idL = $id_loaidoan";
		$this->query($sql);
		return $this->fetch(array($id_loaidoan));
	}

	function getChitiet($id){
		$sql = "SELECT da.*, ct.*, l.TenL, bm.TenBM FROM doan AS da, chitiet AS ct, loai AS l, bomon AS bm WHERE da.idDA = ct.idDA  AND da.idL = l.idL AND da.idBM = bm.idBM AND da.idDA = $id";
		$this->query($sql);
		return $this->fetch(array($id));
	}

	function getComment($id_doan){
		$sql = "SELECT cm.*, sv.name FROM comment cm INNER JOIN sinhvien sv ON cm.mssv = sv.mssv WHERE idDA = $id_doan";
		$this->query($sql);
		return $this->fetchAll(array($id_doan));
	}

	function getRelatedNews($tenlkd, $tenbmkd){
		$sql = "SELECT da.*, l.TenLKD, l.idL, bm.TenBMKD, bm.idBM , ct.* FROM doan da INNER JOIN loai l ON da.idL = l.idL INNER JOIN bomon bm ON da.idBM = bm.idBM INNER JOIN chitiet ct ON ct.idDA = da.idDA WHERE l.TenLKD ='$tenlkd' AND bm.TenBMKD='$tenbmkd' LIMIT 1,4 ";
		$this->query($sql);
		return $this->fetchAll(array($tenlkd,$tenbmkd));
	}

	function getTenBM($id_loaibomon){
		$sql = "SELECT TenBM, TenBMKD FROM bomon WHERE idBM = $id_loaibomon";
		$this->query($sql);
		return $this->fetch(array($id_loaibomon));
	}

	function getTenKDLoaiDoan($id_loaidoan){
		$sql = "SELECT TenLKD FROM loai WHERE idL = $id_loaidoan";
		$this->query($sql);
		return $this->fetch(array($id_loaidoan));
	}

	function getDoanNoibat(){
		$sql = "SELECT da.*, ct.*,l.TenL, l.TenLKD, l.idL, bm.TenBM, bm.TenBMKD FROM doan da INNER JOIN chitiet ct ON da.idDA = ct.idDA INNER JOIN loai l ON da.idL = l.idL INNER JOIN bomon bm ON da.idBM = bm.idBm WHERE ct.NoiBat = 1 LIMIT 0,4";
		$this->query($sql);
		return $this->fetchAll();
	}

	// // function getBaocao($id){
	// // 	$sql = "SELECT * FROM baocao WHERE idDA = $id";
	// // 	$this->setQuery($sql);
	// // 	return $this->loadRow(array($id));
	// // }

	function getCanhanSV($ms_sv){
		$sql = "SELECT da.*, l.TenL, bm.TenBM, sv.name as namesv, sv.email, gv.name as namegv FROM doan da INNER JOIN loai l ON da.idL = l.idL INNER JOIN bomon bm ON da.idBM = bm.idBM INNER JOIN sinhvien sv ON da.mssv = sv.mssv INNER JOIN giangvien gv ON da.magv = gv.magv WHERE da.mssv = '$ms_sv'";
		$this->query($sql);
		return $this->fetchAll(array($ms_sv));
	}

	function getCanhanGV($ma_gv){
		$sql = "SELECT da.*, l.TenL, bm.TenBM, gv.name as namegv, gv.email, sv.name as namesv, sv.mssv FROM doan da INNER JOIN loai l ON da.idL = l.idL INNER JOIN bomon bm ON da.idBM = bm.idBM INNER JOIN sinhvien sv ON da.mssv = sv.mssv INNER JOIN giangvien gv ON da.magv = gv.magv WHERE da.magv = '$ma_gv'";
		$this->query($sql);
		return $this->fetchAll(array($ma_gv));
	}

	function addComment($mssv, $id_doan, $noidung){
		// $sql = "INSERT INTO comment(mssv, idDA, NoiDung) VALUES(?,?,?)";
		// $this->query($sql);
		// return $this->execute(array($mssv, $id_doan, $noidung));
		$sql = "INSERT INTO comment(mssv, idDA, NoiDung, creater_at) VALUES('$mssv', '$id_doan', '$noidung', now())";
		$this ->query($sql);
		//return $this->fetchAll(array($mssv, $id_doan, $noidung, $creater_at));
	}

	function search($key, $vitri = -1, $limit = -1){
		$sql = "SELECT da.*, ct.*, l.TenLKD AS LKD, bm.TenBMKD AS BMKD FROM doan da INNER JOIN chitiet ct ON da.idDA = ct.idDA INNER JOIN loai l ON da.idL = l.idL INNER JOIN bomon bm ON da.idBM = bm.idBm where da.TênDA like '%$key%' or ct.TomTat like '%$key%'";
		if($vitri > -1 && $limit > 1){
			$sql .=" limit $vitri,$limit";//nối tiếp câu lệnh truy vấn trên. 
		}
		$this->query($sql);
		return $this->fetchAll(array($key));
	}

	// function timkiem($key){
	// 	$sql = "SELECT da.* , ct.* FROM `doan` WHERE TênDA REGEXP '$key'";
	// 	$this->query($sql);
	// 	return $this->fetchAll(array($key));
	// }

	function gettintuc($vitri = -1, $limit = -1){
		$sql = "SELECT * From tintuc ORDER BY Ngay DESC";
		if($vitri > -1 && $limit > 1){
			$sql .=" limit $vitri,$limit";//nối tiếp câu lệnh truy vấn trên. 
		}
		$this->query($sql);
		return $this->fetchAll();
	}

	function getTintucMoinhat(){
		// $sql = "SELECT * FROM tintuc WHERE Ngay = (SELECT MAX(Ngay) FROM tintuc)";
		$sql = "SELECT * FROM tintuc ORDER BY Ngay DESC  LIMIT 1";
		$this->query($sql);
		return $this->fetchAll();
	}

	function getTintucBiggestView(){
		$sql = "SELECT * FROM tintuc ORDER BY SoLuotXem DESC LIMIT 0,4";
		$this->query($sql);
		return $this->fetchAll();
	}

	function getChitieTtintuc($id_tintuc){
		$sql = "SELECT * FROM tintuc WHERE idTT = $id_tintuc";
		$this->query($sql);
		return $this->fetch(array($id_tintuc));
	}

	function CapNhatSoLanXemTin($id_tintuc){
		$sql = "UPDATE tintuc SET SoLuotXem = SoLuotXem + 1 WHERE idTT = $id_tintuc";
		$this->query($sql);
	}
}

?>