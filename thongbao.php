<div class="row">
    <div class="col-lg-9">
        <div id="left">
            <!-- <img class="logo_icon_home" src="public/image/icon_home.gif" alt=""> -->
            <ul class="whitest">
                <li class="start">
                    <a href="javascript: ;">Thông báo</a>
                </li>
            </ul>
        </div> 
        <!-- Post Content -->
                    <img class="img-responsive" src="public/upload/images/<?=$tintucmoinhat[0]['urlHinh']?>" alt="">
                    <h2 class="title"><a href="index.php?id_tintuc=<?=$tintucmoinhat[0]['idTT']?>&p=chitietthongbao"><?=$tintucmoinhat[0]['TieuDe']?></a> </h2>
                    <div class="tomtat"><?=$tintucmoinhat[0]['TomTat']?></div>
    </div>
    <!-- thong bao khac -->
    <div class="space20" style="padding-top: 50px;"></div>
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading" style="text-align: center;color:#900;"><b>Tin xem nhiều</b></div>
            <div class="panel-body">
                <?php
                    foreach ($biggest_view as $biggest) {
                        ?>
                            <!-- item -->
                            <div class="row" style="margin-top: 10px;">
                                <div class="col-md-5">
                                    <a href="detail.html">
                                    <img class="img-responsive" src="public/upload/images/<?=$biggest['urlHinh']?>" alt="">
                                    </a>
                                </div>
                                <a href="index.php?id_tintuc=<?=$biggest['idTT']?>&p=chitietthongbao" class="link"><b><?=$biggest['TieuDe']?></b></a>
                                <div class="break"></div>
                            </div>
                            <!-- end item -->
                        <?php
                    }
                ?>
                <div class="space20"></div>
                <div id="contact" style="text-align: center;">
                    <a class="btn btn-default btn-lg" href="index.php?p=dstintuc" role="button"><span>BK-TTB NEWS</span></a>
                </div>
            </div>
        </div>
    </div>
</div>