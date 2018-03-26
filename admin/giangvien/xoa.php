<?php
include('../model/database.class.php');
include('../model/class.giangvien.php');

if(isset($_GET["ma_gv"])){
    $magv = $_GET["ma_gv"];
    $gv = new giangvien();
    $ketqua = $gv ->xoaGV($magv);

    if(!$ketqua){
        echo "<script>  alert('Có lỗi xảy ra! Vui lòng thử lại'); window.history.go(-1);</script>";
    } else {
        echo "<script>  alert('Xóa thành công!'); window.history.go(-1);</script>";
    }
}
?>