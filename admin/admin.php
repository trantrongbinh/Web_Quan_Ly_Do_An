<?php
session_start();
if( isset($_GET["p"]))
    $p = $_GET["p"];
else $p = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Khóa Học Lập Trình Laravel Framework 5.x Tại Khoa Phạm">
    <meta name="author" content="">
    <title>Admin quản lý</title>
    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../public/admin/metisMenu.min.css">
    <link href="../public/admin/sb-admin-2.css" rel="stylesheet">
    <link href="../public/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../public/admin/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../public/admin/dataTables.responsive.css" rel="stylesheet">

	<script src="../public/ckeditor/ckeditor.js"></script>
    <script src="../public/ckfinder/ckfinder.js"></script>
    <script>CKEDITOR.replace('noidung')</script>
</head>

<body>
    <div id="wrapper">

        <?php 
        include('header.php');
        
        switch ($p) {
            case 'list':
                include('bomon/danhsach.php');
                break;
            case 'them':
                include('bomon/them.php');
                break;
            case 'sua':
               include('bomon/sua.php');
                break;
            case 'xoa':
               include('bomon/xoa.php');
                break;
            case 'list_loai':
                include('loaidoan/danhsach.php');
                break;
            case 'themloai':
                include('loaidoan/them.php');
                break;
            case 'sualoai':
                include('loaidoan/sua.php');
                break;
            case 'xoaloai':
                include('loaidoan/xoa.php');
                break;
            case 'list_doan':
                include('doan/danhsach.php');
                break;
            case 'themdoan':
                include('doan/them.php');
                break;
            case 'suadoan':
                include('doan/sua.php');
                break;
            case 'xoadoan':
                include('doan/xoa.php');
                break;
            case 'list_tintuc':
                include('tintuc/danhsach.php');
                break;
            case 'themtintuc':
                include('tintuc/them.php');
                break;
            case 'suatintuc':
                include('tintuc/sua.php');
                break;
            case 'xoatintuc':
                include('tintuc/xoa.php');
                break;
            case 'listsv':
                include('sinhvien/danhsach.php');
                break;
            case 'themsv':
                include('sinhvien/them.php');
                break;
            case 'suasv':
                include('sinhvien/sua.php');
                break;
            case 'xoasv':
                include('sinhvien/xoa.php');
                break;
            case 'listgv':
                include('giangvien/danhsach.php');
                break;
            case 'themgv':
                include('giangvien/them.php');
                break;
            case 'suagv':
                include('giangvien/sua.php');
                break;
            case 'xoagv':
                include('giangvien/xoa.php');
                break;
            default:
               include('bomon/danhsach.php');
                break;
        }             
        ?>

    </div>

    <script src="../public/admin/jquery.min.js"></script>
    <script src="../public/admin/bootstrap.min.js"></script>
    <script src="../public/admin/metisMenu.min.js"></script>
    <script src="../public/admin/sb-admin-2.js"></script>
    <script src="../public/admin/jquery.dataTables.min.js"></script>
    <script src="../public/admin/dataTables.bootstrap.min.js"></script>
    
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
</body>

</html>
