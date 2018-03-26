<?php
include('../model/database.class.php');
include('../model/class.tintuc.php');

$tintuc = new tintuc();
$dstintuc = $tintuc->layTinTuc();
?>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <?php      
                if (isset($_SESSION['suatt']) && $_SESSION['suatt'] == 'done'){
                    echo '<div class="alert alert-success"> Cập nhật thành công!!!</div>';
                    $_SESSION['suatt'] = "";
                }
            ?>
            <div class="col-lg-12">
                <h1 class="page-header">Tin tức
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tiêu đề</th>
                        <th>Tóm tắt</th>
                        <th>Ngày đăng</th>
                        <th>Nổi bật</th>
                        <th>Views</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($dstintuc as $ds) {
                        ?>
                            <tr class="odd gradeX" align="center">
                                <td><?=$ds['idTT']?></td>
                                <td>
                                    <?=$ds['TieuDe']?>
                                    <div>
                                        <br>
                                        <img src="../public/upload/images/<?=$ds['urlHinh']?>" width="150" height="100" />
                                    </div>
                                </td>
                                <td><?=$ds['TomTat']?></td>
                                <td><?=$ds['Ngay']?></td>
                                <td>
                                    <?php
                                        if($ds['NoiBat'] == 1) echo "Có";
                                        else echo "Không";
                                    ?>
                                </td>
                                <td><?=$ds['SoLuotXem']?></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('Bạn có chắc là muốn xóa không?')" href="admin.php?p=xoatintuc&id_tintuc=<?=$ds['idTT']?>"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin.php?p=suatintuc&id_tintuc=<?=$ds['idTT']?>">Edit</a></td>
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