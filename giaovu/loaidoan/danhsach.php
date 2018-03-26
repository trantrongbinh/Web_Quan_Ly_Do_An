<?php
include('../model/database.class.php');
include('../model/class.loaidoan.php');

$loai = new loai();
$dsloai = $loai->layLoai();
//print_r($dsloai);
?>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <?php           
                if (isset($_SESSION['sual']) && $_SESSION['sual'] == 'done'){
                    echo '<div class="alert alert-success"> Cập nhật loại thành công!!!</div>';
                    $_SESSION['sual'] = "";
                }
            ?>
            <div class="col-lg-12">
                <h1 class="page-header">Loại đồ án
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
                        foreach ($dsloai as $ds) {
                        ?>
                            <tr class="odd gradeX" align="center">
                                <td><?=$ds['idL']?></td>
                                <td><?=$ds['TenL']?></td>
                                <td><?=$ds['TenLKD']?></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('Bạn có chắc là muốn xóa không?')" href="giaovu.php?ma_gvu=<?=$_SESSION['magvu']?>&p=xoaloai&id_loai=<?=$ds['idL']?>"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="giaovu.php?ma_gvu=<?=$_SESSION['magvu']?>&p=sualoai&id_loai=<?=$ds['idL']?>">Edit</a></td>
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