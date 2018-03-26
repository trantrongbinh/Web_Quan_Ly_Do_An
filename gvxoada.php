<?php
include('model/database.class.php');
include('model/class.sinhvien.php');
include('model/class.giangvien.php');
include('model/class.loaidoan.php');
include('model/class.bomon.php');
include('model/class.doan.php');
if(isset($_GET["id_da"])){
    $idda = $_GET["id_da"];
    $da = new doan();
    $ketqua = $da ->xoaDA($idda);

    if(!$ketqua){
        echo "<script>  alert('Có lỗi xảy ra! Vui lòng liên hệ Amdin'); window.history.go(-1);</script>";
    } else {
        echo "<script>  alert('Xóa đề tài thành công!'); window.history.go(-1);</script>";
    }
}
if(isset($_GET["idL"])){
    $idl = $_GET["idL"];
    $l = new loai();
    $ketqua = $nh ->xoaLoai($idl);
    // header('Location: giangvien.php?ma_gv='.$_SESSION['magv']);
    if(!$ketqua){
        echo "<script>  alert('Có lỗi xảy ra! Vui lòng liên hệ Amdin'); window.window.history.go(-1);</script>";
    } else {
        echo "<script>  alert('Xóa năm học thành công!'); window.window.history.go(-1);</script>";
    }
}
if(isset($_GET["idBM"])){
    $idbm = $_GET["idBM"];
    $bm = new bomon();
    $ketqua = $bm ->xoaBoMon($idbm);

    if(!$ketqua){
        echo "<script>  alert('Có lỗi xảy ra! Vui lòng liên hệ Amdin'); window.window.history.go(-1);</script>";
    } else {
        echo "<script>  alert('Xóa năm học thành công!'); window.window.history.go(-1);</script>";
    }
}
?>