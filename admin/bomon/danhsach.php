<?php
include('../model/database.class.php');
include('../model/class.bomon.php');

$bomon = new bomon();
$dsbomon = $bomon->layBoMon();
?>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <?php           
                if (isset($_SESSION['suabm']) && $_SESSION['suabm'] == 'done'){
                    echo '<div class="alert alert-success"> Cập nhật bộ môn thành công!!!</div>';
                    $_SESSION['suabm'] = "";
                }
            ?>
            <div class="col-lg-12">
                <h1 class="page-header">Bộ môn
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Abbreviate Name</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($dsbomon as $ds) {
                        ?>
                            <tr class="odd gradeX" align="center">
                                <td><?=$ds['idBM']?></td>
                                <td><?=$ds['TenBM']?></td>
                                <td><?=$ds['TenBMKD']?></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('Bạn có chắc là muốn xóa không?')" href="admin.php?p=xoa&id_bomon=<?=$ds['idBM']?>"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin.php?p=sua&id_bomon=<?=$ds['idBM']?>">Edit</a></td>
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