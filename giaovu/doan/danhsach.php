<?php
include('../model/database.class.php');
include('../model/class.doan.php');

$doan = new doan();
$dsdoan = $doan->getfullDA();
?>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <?php           
                if (isset($_SESSION['suada']) && $_SESSION['suada'] == 'done'){
                    echo '<div class="alert alert-success"> Cập nhật đồ án thành công!!!</div>';
                    $_SESSION['suada'] = "";
                }
            ?>
            <div class="col-lg-12">
                <h1 class="page-header">Đồ án
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên DA</th>
                        <th>Công Nghệ</th>
                        <th>Loại</th>
                        <th>Bộ môn</th>
                        <th>SV thực hiện</th>
                        <th>GV phụ trách</th>
                        <th>Trạng thái</th>
                        <th>Điểm</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($dsdoan as $ds) {
                        ?>
                            <tr class="odd gradeX" align="center">
                                <td><?=$ds['idDA']?></td>
                                <td><?=$ds['TênDA']?></td>
                                <td><?=$ds['CongNghe']?></td>
                                <td><?=$ds['TenL']?></td>
                                <td><?=$ds['TenBM']?></td>
                                <td><?=$ds['TenSV']?></td>
                                <td><?=$ds['TenGV']?></td>
                                <td><?=$ds['TrangThai']?></td>
                                <td><?=$ds['Diem']?></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('Bạn có chắc là muốn xóa không?')" href="giaovu.php?ma_gvu=<?=$_SESSION['magvu']?>&p=xoadoan&id_doan=<?=$ds['idDA']?>"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="giaovu.php?ma_gvu=<?=$_SESSION['magvu']?>&p=suadoan&id_doan=<?=$ds['idDA']?>">Edit</a></td>
                            </tr>
                        <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->