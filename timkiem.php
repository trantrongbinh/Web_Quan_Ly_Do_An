<?php
$key = $_GET['key'];
$ds_doan = $c_doan->timkiem($key);
$doan = $ds_doan['doan'];
$thanhphantrang = $ds_doan['thanhphantrang'];
?>

<!--end search-->
<div class="row">
    <div class="col-md-12" id="datasearch">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color:#2509F9; color:white; text-align: center; padding-bottom: 0px;">
                <h3><b>Danh sách tìm kiếm</b></h3>
            </div>

            <?php

                foreach ($doan as $da) {
                    ?>
                    <div class="row-item row">
                    <div class="col-md-1 glyphicon glyphicon-hand-right" style="padding: 25px 0 0 40px;">
                    </div>
                    <div class="col-md-9">
                        <h3><?=$da['TênDA']?></h3>
                        <p><?=$da['TomTat']?></p>
                        <a class="btn btn-primary" href="chitietdoan.php?loai_doan=<?=$tenlkd['TenLKD']?>&loai_bomon=<?=$tenbomon['TenBMKD']?>&id_doan=<?=$da['idDA']?>">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                    <div class="break"></div>
                    </div>
                    <?php
                }
            ?>
            <div style = "text-align: center;"><?=$thanhphantrang?></div>
        </div>   
    </div> 
</div>