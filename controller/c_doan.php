<?php
include('model/m_doan.php');
include('model/pager.php');

class C_doan{

	public function index(){
		$m_doan = new M_doan();
		$slide = $m_doan->getSlide();
		$menu = $m_doan->getMenu();
		$doannoibat = $m_doan->getDoanNoibat();
		$tintucmoinhat = $m_doan->getTintucMoinhat();
		$biggest_view = $m_doan->getTintucBiggestView();
		return array('slide'=>$slide, 'menu'=>$menu, 'doannoibat'=>$doannoibat, 'tintucmoinhat'=>$tintucmoinhat, 'biggest_view'=>$biggest_view);
	}

	function loaidoan(){
		$id_loai = $_GET['id_loai'];
		$id_bomon = $_GET['id_bomon'];
		$m_doan = new M_doan();
		$tenbomon = $m_doan->getTenBM($id_bomon);
		$tenlkd = $m_doan->getTenKDLoaiDoan($id_loai);
		$danhmucdoan = $m_doan->getDoanByidLoaiAndidBM($id_loai, $id_bomon);
		//$tranghientai = (isset($_GET['page']))?$_GET['page']:1;//lay trang hien tai
		if(isset($_GET['page'])){
			$tranghientai = $_GET['page'];//lay trang hien tai
		}else{
			$tranghientai = 1;
		}

		$pagination = new pagination(count($danhmucdoan), $tranghientai, 3, 4);
		$paginationHTML = $pagination->showPagination();
		$limit = $pagination->_nItemOnPage;
		$vitri = ($tranghientai-1)*$limit;
		$danhmucdoan = $m_doan->getDoanByidLoaiAndidBM($id_loai, $id_bomon, $vitri, $limit);
		$menu = $m_doan->getMenu();
		$title = $m_doan->getTitlebyId($id_loai);
		return array('danhmucdoan'=>$danhmucdoan, 'menu'=>$menu, 'title'=>$title, 'thanh_phantrang'=>$paginationHTML, 'tenlkd'=>$tenlkd, 'tenbomon'=>$tenbomon);
	}

	function danhsachtintuc(){
		$m_doan = new M_doan();
		$danhmuctintuc = $m_doan->gettintuc();
		if(isset($_GET['page'])){
			$tranghientai = $_GET['page'];//lay trang hien tai
		}else{
			$tranghientai = 1;
		}

		$pagination = new pagination(count($danhmuctintuc), $tranghientai, 3, 2);
		$paginationHTML = $pagination->showPagination();
		$limit = $pagination->_nItemOnPage;
		$vitri = ($tranghientai-1)*$limit;
		$danhmuctintuc = $m_doan->gettintuc($vitri, $limit);
		return array('danhmuctintuc'=>$danhmuctintuc,'thanhphantrang'=>$paginationHTML);
	}

	function chitietdoan(){
		$id_doan = $_GET['id_doan'];
		$tenlkd = $_GET['loai_doan'];
		$tenbmkd = $_GET['loai_bomon'];
		$m_doan = new M_doan();
		$chitietdoan = $m_doan->getChitiet($id_doan);
		$comment = $m_doan->getComment($id_doan);
		$relatednews = $m_doan->getRelatedNews($tenlkd, $tenbmkd);
		return array('chitietdoan'=>$chitietdoan, 'comment'=>$comment, 'relatednews'=>$relatednews);
	}

	function chitiettintuc(){
		$id_tintuc = $_GET['id_tintuc'];
		$m_doan = new M_doan();
		$chitiettintuc = $m_doan->getChitieTtintuc($id_tintuc);
		$solanxem = $m_doan->CapNhatSoLanXemTin($id_tintuc);
		return array('chitiettintuc'=>$chitiettintuc, 'solanxem'=>$solanxem);
	}

	function ThemBinhLuan($mssv, $id_doan, $noidung){
		$m_doan = new M_doan();
		$binhluan = $m_doan->addComment($mssv, $id_doan, $noidung);
		echo '<script>window.history.go(-1);</script>';
	}

	function timkiem($key){
		$m_doan = new M_doan();
		$doan = $m_doan->search($key);
		if(isset($_GET['page'])){
			$tranghientai = $_GET['page'];//lay trang hien tai
		}else{
			$tranghientai = 1;
		}

		$pagination = new pagination(count($doan), $tranghientai, 3, 2);
		$paginationHTML = $pagination->showPagination();
		$limit = $pagination->_nItemOnPage;
		$vitri = ($tranghientai-1)*$limit;
		$doan = $m_doan->search($key,$vitri, $limit);
		return array('doan'=>$doan,'thanhphantrang'=>$paginationHTML);
		
		//return $doan;
	}

	function CaNhan(){
		$ms_sv = $_GET['ms_sv'];
		$m_doan = new M_doan();
		$canhan = $m_doan->getCanhanSV($ms_sv);
		return array('canhan'=>$canhan);
	}

	function GiangVienQuanLy(){
		$ma_gv = $_GET['ma_gv'];
		$m_doan = new M_doan();
		$gvquanly = $m_doan->getCanhanGV($ma_gv);
		return array('gvquanly'=>$gvquanly);
	}

}
?>