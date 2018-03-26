<?php
include('../model/database.class.php');
include('../model/class.bomon.php');

if(isset($_GET["id_bomon"])){
    $idbomon = $_GET["id_bomon"];
    $bm = new bomon();
    $ketqua = $bm ->xoaBoMon($idbomon);

    if(!$ketqua){
        echo "<script>  alert('Có lỗi xảy ra! Vui lòng thử lại'); window.history.go(-1);</script>";
    } else {
        echo "<script>  alert('Xóa loại thành công!'); window.history.go(-1);</script>";
    }
}
?>