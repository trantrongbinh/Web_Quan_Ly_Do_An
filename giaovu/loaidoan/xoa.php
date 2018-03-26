<?php
include('../model/database.class.php');
include('../model/class.loaidoan.php');

if(isset($_GET["id_loai"])){
    $idloai = $_GET["id_loai"];
    $l = new loai();
    $ketqua = $l ->xoaLoai($idloai);

    if(!$ketqua){
        echo "<script>  alert('Có lỗi xảy ra! Vui lòng thử lại'); window.history.go(-1);</script>";
    } else {
        echo "<script>  alert('Xóa loại thành công!'); window.history.go(-1);</script>";
    }
}
?>