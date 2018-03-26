<?php
include('../model/database.class.php');
include('../model/class.giangvien.php');

$giangvien = new giangvien();
$dsgiangvien = $giangvien->layfullGV();
?>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <?php           
                if (isset($_SESSION['suagv']) && $_SESSION['suagv'] == 'done'){
                    echo '<div class="alert alert-success"> Cập nhật thành công!!!</div>';
                    $_SESSION['suagv'] = "";
                }
            ?>
            <div class="col-lg-12">
                <h1 class="page-header">Giảng Viên
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Mã GV</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Bộ môn</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($dsgiangvien as $ds) {
                        ?>
                            <tr class="odd gradeX" align="center">
                                <td><?=$ds['magv']?></td>
                                <td><?=$ds['name']?></td>
                                <td><?=$ds['email']?></td>
                                <td><?=$ds['password']?></td>
                                <td><?=$ds['TenBM']?></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('Bạn có chắc là muốn xóa không?')" href="giaovu.php?ma_gvu=<?=$_SESSION['magvu']?>&p=xoagv&ma_gv=<?=$ds['magv']?>"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="giaovu.php?ma_gvu=<?=$_SESSION['magvu']?>&p=suagv&ma_gv=<?=$ds['magv']?>">Edit</a></td>
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