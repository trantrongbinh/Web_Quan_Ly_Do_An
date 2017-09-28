<?php
//goi function ben m_doan
include('model/m_doan.php');
include('model/pager.php');
class C_doan{

	public function index(){
		$m_doan = new M_doan();
		$slide = $m_doan->getSlide();
		$menu = $m_doan->getMenu();
		return array('slide'=>$slide, 'menu'=>$menu);
	}

	function loaidoan(){
		$id_loai = $_GET['id_loai'];
		$m_doan = new M_doan();

		$tenkd = $m_doan->getTenKDLoaiDoan($id_loai);
		$danhmucdoan = $m_doan->getDoanByIdLoai($id_loai);
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
		$danhmucdoan = $m_doan->getDoanByIdLoai($id_loai, $vitri, $limit);
		$menu = $m_doan->getMenu();
		$title = $m_doan->getTitlebyId($id_loai);
		return array('danhmucdoan'=>$danhmucdoan, 'menu'=>$menu, 'title'=>$title, 'thanh_phantrang'=>$paginationHTML, 'tenkd'=>$tenkd);
	}

	function chitietdoan(){
		$id_doan = $_GET['id_doan'];
		$tenkd = $_GET['loai_doan'];
		$m_doan = new M_doan();
		$chitietdoan = $m_doan->getChitiet($id_doan);
		$comment = $m_doan->getComment($id_doan);
		$relatednews = $m_doan->getRelatedNews($tenkd);
		$doannoibat = $m_doan->getDoanNoibat();
		return array('chitietdoan'=>$chitietdoan, 'comment'=>$comment, 'relatednews'=>$relatednews, 'doannoibat'=>$doannoibat);
	}

	// function upload(){
	// 	$id_doan = $_GET['id_doan'];
	// 	$m_doan = new M_doan();
	// 	$baocao = $m_doan->getBaocao($id_doan);
	// 	return array('baocao'=>$baocao);
	// }

	function ThemBinhLuan($mssv, $id_doan, $noidung){
		$m_doan = new M_doan();
		$binhluan = $m_doan->addComment($mssv, $id_doan, $noidung);
		header('Location:'.$_SERVER['HTTP_REFERER']);
	}

	function CaNhan(){
		$ms_sv = $_GET['ms_sv'];
		$m_doan = new M_doan();
		$canhan = $m_doan->getCanhanSV($ms_sv);
		return array('canhan'=>$canhan);
	}
}
?>