<?php
include('../model/database.class.php');
include('../model/class.sinhvien.php');
include('../model/class.giangvien.php');
include('../model/class.loaidoan.php');
include('../model/class.bomon.php');
include('../model/class.doan.php');

if(isset($_GET["id_doan"])){
    $idda = $_GET["id_doan"];
    $da = new doan();
    $ketqua = $da ->xoaDA($idda);

    if(!$ketqua){
        echo "<script>  alert('Có lỗi xảy ra! Vui lòng thử lại'); window.history.go(-1);</script>";
    } else {
        echo "<script>  alert('Xóa đề tài thành công!'); window.history.go(-1);</script>";
    }
}
?>