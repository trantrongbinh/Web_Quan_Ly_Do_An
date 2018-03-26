<?php
include('../model/database.class.php');
include('../model/class.sinhvien.php');

$sinhvien = new sinhvien();
$dssinhvien = $sinhvien->laySV();
?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <?php           
                if (isset($_SESSION['suasv']) && $_SESSION['suasv'] == 'done'){
                    echo '<div class="alert alert-success"> Cập nhật thành công!!!</div>';
                    $_SESSION['suasv'] = "";
                }
            ?>
            <div class="col-lg-12">
                <h1 class="page-header">Sinh Viên
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>MSSV</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($dssinhvien as $ds) {
                        ?>
                            <tr class="odd gradeX" align="center">
                                <td><?=$ds['mssv']?></td>
                                <td><?=$ds['name']?></td>
                                <td><?=$ds['email']?></td>
                                <td><?=$ds['password']?></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('Bạn có chắc là muốn xóa không?')" href="admin.php?p=xoasv&mssv=<?=$ds['mssv']?>"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin.php?p=suasv&mssv=<?=$ds['mssv']?>">Edit</a></td>
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