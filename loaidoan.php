<?php
$alldoan = $c_doan->loaidoan();
$doan = $alldoan['danhmucdoan'];
$menu = $alldoan['menu'];
$title = $alldoan['title'];
$thanh_phantrang = $alldoan['thanh_phantrang'];
$tenbomon = $alldoan['tenbomon'];
$tenlkd = $alldoan['tenlkd'];
?>

<div class="row">
    <div class="col-md-12" id="datasearch">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color:#2509F9; color:white; text-align: center; padding-bottom: 0px;">
                <h3><b><?=$tenbomon['TenBM']?></b></h3>
                <h4><i><?=$title['TenL']?></i></h4>
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
                        <a class="btn btn-primary" href="index.php?loai_doan=<?=$tenlkd['TenLKD']?>&loai_bomon=<?=$tenbomon['TenBMKD']?>&id_doan=<?=$da['idDA']?>&p=chitietdoan">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                    <div class="break"></div>
                    </div>
                    <?php
                }
            ?>
            <div style = "text-align: center;"><?=$thanh_phantrang?></div>
        </div>   
    </div> 
</div>
<script>
    $(document).ready(function(){
        $("#icon_search").click(function(){
            var keyword = $('#txtSearch').val();
            $.post("timkiemdoan.php", {tukhoa:keyword},function(data){
                $('#datasearch').html(data);
            })
        })
    })
</script>
