<?php
include('../model/database.class.php');
include('../model/class.tintuc.php');

if(isset($_GET["id_tintuc"])){
    $idtintuc = $_GET["id_tintuc"];
    $tt = new tintuc();
    $ketqua = $tt ->xoaTinTuc($idtintuc);

    if(!$ketqua){
        echo "<script>  alert('Có lỗi xảy ra! Vui lòng thử lại'); window.history.go(-1);</script>";
    } else {
        echo "<script>  alert('Xóa thành công!'); window.history.go(-1);</script>";
    }
}
?>