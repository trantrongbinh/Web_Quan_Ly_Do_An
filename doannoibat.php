<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color:#f4f4f4; color:#990000;">
                <h2 style="margin-top:0px; margin-bottom:0px;">Danh sách các đồ án nổi bật <p class="glyphicon glyphicon-star"></p></h2>
            </div>
            <div class="panel-body" style="background-color:#f4f4f4;">
                <?php
                    foreach ($doannoibat as $noibat) {
                        ?>
                            <div class="row-item row">
                                <div class="col-md-1 glyphicon glyphicon-hand-right" style="padding: 25px 0 0 40px;">
                                </div>
                                <div class="col-md-9">
                                    <h3><?=$noibat['TênDA']?></h3>
                                    <h4>(<?=$noibat['TenL']?> - <?=$noibat['TenBM']?>)</h4>
                                    <p><?=$noibat['TomTat']?></p>
                                    <a class="btn btn-primary" href="chitietdoan.php?loai_doan=<?=$noibat['TenLKD']?>&loai_bomon=<?=$noibat['TenBMKD']?>&id_doan=<?=$noibat['idDA']?>">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                                </div>
                                <div class="break" ></div>
                            </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->