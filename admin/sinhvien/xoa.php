<?php
include('../model/database.class.php');
include('../model/class.sinhvien.php');

if(isset($_GET["mssv"])){
    $mssv = $_GET["mssv"];
    $sv = new sinhvien();
    $ketqua = $sv ->xoaSV($mssv);

    if(!$ketqua){
        echo "<script>  alert('Có lỗi xảy ra! Vui lòng thử lại'); window.history.go(-1);</script>";
    } else {
        echo "<script>  alert('Xóa thành công!'); window.history.go(-1);</script>";
    }
}
?>